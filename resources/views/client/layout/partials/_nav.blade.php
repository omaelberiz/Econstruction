<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <a href="#" class="navbar-brand">
            E-construction
        </a>
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-target="#myNavbar" data-toggle="collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div id="myNavbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a  href="{{ route('accueil') }}">Accueil</a></li>
                <?php $tps = App\TypeAppart::all();?>
                @foreach($tps as $tp)
                <li><a href="{{ route('type',['id'=> $tp]) }}">{{ $tp->libelle }}</a></li>
                @endforeach
                <li><a href="">Contact</a></li>
                @if(session()->has('User'))
                <li id="logout" class="nav-item dropdown login-nav">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="height: 50px;"><i class="fa fa-user"></i> Mon Compte</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Mon compte</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('suivie') }}"><i class="fa fa-home"></i> Ma maison</a>
                        <div class="dropdown-divider"></div>
                        <?php
                            $user = session()->get('User');
                            //dump($user->typeProfile);
                        ?>
                        @if($user->typeProfile == 1)
                        <a class="dropdown-item" href="{{ route('admin.index') }}"><i class="fa fa-dashboard"></i> dashboard</a>
                        <div class="dropdown-divider"></div>
                        @endif
                        <a class="dropdown-item" href="{{ route('logout') }}"><i class="fa fa-lock"></i> Déconnexion</a>
                    </div>
                </li>
                    @else
                <li class="login-nav">
                    <a href="{{ route('login') }}"><i class="fa fa-lock"></i> connexion / inscription</a>
                </li>
                @endif
                <li>
                    @if(session()->has('Cart'))
                        <?php
                            $cart = session()->get('Cart');

                        ?>
                        <a href="{{ route('panier') }}">
                            <i class="fa fa-shopping-cart"></i> <span class="badge badge-light">{{ $cart->totalQ }}</span>
                        </a>
                        @else
                        <a>
                        <i class="fa fa-shopping-cart"></i> <span class="badge badge-light">0</span>
                        </a>
                    @endif
                </li>

            </ul>
        </div>
    </div>
</nav>