@extends('client.layout.app')
@section('container')
    <section id="form"><!--form-->
        <div class="header-double-line-home list-view-heading">
            <h2>Compte</h2>
        </div>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-1">
                    <div class="login-form"><!--login form-->
                        <h2>connectez vous</h2>
                        <form id="login-form" action="#">
                            {{ csrf_field() }}
                            <p id="userpass" class="comments"></p>
                            <input type="email" id="login" name="login" placeholder="Name" />
                            <p class="comments"></p>
                            <input type="password" id="login_pass" name="login_pass" placeholder="Email Address" />
                            <p class="comments"></p>
                            <button type="submit" class="btn btn-default"> <i class="fa fa-lock"></i> Connexion</button>
                        </form>
                    </div><!--/login form-->
                </div>
                <div class="col-sm-1">
                    <h2 class="or">ou</h2>
                </div>
                <div class="col-sm-4">
                    <div class="signup-form"><!--sign up form-->
                        <h2>Inscription</h2>
                        <form id="inscription" action="#">
                            {{ csrf_field() }}
                            <input type="text" id="nom" name="nom" placeholder="Nom"/>
                            <p class="comments"></p>
                            <input type="text" id="prenom" name="prenom" placeholder="Prénom"/>
                            <p class="comments"></p>
                            <input type="tel" id="contact" name="contact" placeholder="Télephone"/>
                            <p class="comments"></p>
                            <input type="text" id="adresse" name="adresse" placeholder="Domicile"/>
                            <p class="comments"></p>
                            <input type="email" id="email" name="email" placeholder="Email Address"/>
                            <p class="comments"></p>
                            <input type="password" id="password" name="password" placeholder="Password"/>
                            <p class="comments"></p>
                            <input type="password" id="" name="passwordC" placeholder="Password confirme"/>
                            <p class="comments"></p>
                            <button type="submit" class="btn btn-default"><i class="fa fa-sign-in"></i> S'inscrit</button>
                        </form>
                    </div><!--/sign up form-->
                </div>
            </div>
        </div>
    </section><!--/form-->
@endsection