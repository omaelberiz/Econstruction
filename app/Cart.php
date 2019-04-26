<?php
/**
 * Created by PhpStorm.
 * User: MrRobot
 * Date: 08/01/2018
 * Time: 06:59
 */

namespace App;


class Cart
{
    public $items =[];

    public $totalQ = 0;

    public  $totalPrix = 0;



    public function  __construct($currentCart)
    {
        if ($currentCart)
        {
            $this->items = $currentCart->items;
            $this->totalQ = $currentCart->totalQ;
            $this->totalPrix = $currentCart->totalPrix;
        }
    }

    public function add($id, $item)
    {
        $storeItem = ['quantite'=>0,'prix'=>$item->prix,'item'=>$item];
        if ($this->items){
            if (array_key_exists($id, $this->items))
            {
               $storeItem = $this->items[$id];
            }
        }
//dd($storeItem);
        $storeItem['quantite']++;
        $storeItem['prix'] = $storeItem['quantite'] * $item->prix;
        $this->items[$id] = $storeItem;
        $this->totalQ++;
        $this->totalPrix += $item->prix;
    }

    public function removeOne($id)
    {
        $this->totalQ--;
        $this->totalPrix -=$this->items[$id]['item']->montant_ttc;
        $this->items[$id]['quantite']--;
        $this->items[$id]['prix']-=$this->items[$id]['item']->montant_ttc;

        if ($this->items[$id]['quantite'] <=0)
        {
            unset($this->items[$id]);
        }
    }

    public function delete($id)
    {
        $this->totalQ -=$this->items[$id]['quantite'];
        $this->totalPrix -=$this->items[$id]['prix'];
        unset($this->items[$id]);
    }

    public function addOne($id)
    {
        $this->totalQ++;
        $this->totalPrix +=$this->items[$id]['item']->prix;
        $this->items[$id]['quantite']++;
        $this->items[$id]['prix']+=$this->items[$id]['item']->prix;

    }
//recupere la quantité et l'id du produit pour augmenter
    public function Augmenter($id,$quantite)
    {
        //dd($this->items[$id]['quantite']);
        $newValue = ($quantite - $this->items[$id]['quantite'] );
        $this->totalQ +=$newValue;
        $this->items[$id]['quantite'] = $quantite;
        $this->totalPrix +=($this->items[$id]['item']->prix*$newValue);
        $this->items[$id]['prix']=$this->items[$id]['item']->prix *$quantite;

        return $this->totalQ;
    }


    public function addQty($id,$item,$quantite)
    {
        $storeItem = ['quantite'=>0,'prix'=>$item->prix,'item'=>$item];
        if ($this->items){
            if (array_key_exists($id, $this->items))
            {
                $storeItem = $this->items[$id];
            }
        }
//dd($storeItem);
        if (isset($this->items[$id]['quantite']))
        {
            //dd('ici');
            $newValue = ($quantite - $this->items[$id]['quantite'] );
            $this->totalQ +=$newValue;
            $this->items[$id]['quantite'] = $quantite;
            $this->totalPrix +=($this->items[$id]['item']->montant_ttc*$newValue);
            $this->items[$id]['prix']=$this->items[$id]['item']->prix *$quantite;
            return $this->totalQ;
        }
        $storeItem['quantite'] +=$quantite;
        $storeItem['prix'] = $storeItem['quantite'] * $item->prix;
        $this->items[$id] = $storeItem;
        $this->totalQ+=$storeItem['quantite'];
        $this->totalPrix += ($storeItem['quantite'] * $item->prix);

    }
}