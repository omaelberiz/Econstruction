<section id="slider">
    <div class="container">
        <div class="row">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <img class="img-responsive" src="{{ asset('images/slide1.jpg') }}" alt="First slide">
                        <div class="carousel-caption">
                            <h3>Nous realison votre rêve</h3>
                            <p>We love the Big Apple!</p>
                        </div>
                    </div>
                    <div class="item">
                        <img class="img-responsive" src="{{ asset('images/slide2.jpg') }}" alt="Second slide">
                        <div class="carousel-caption">
                            <h3>New York</h3>
                            <p>la maison de vos rêve</p>
                        </div>
                    </div>
                    <div class="item">
                        <img class="img-responsive" src="{{ asset('images/slide3.jpg') }}" alt="Third slide">
                        <div class="carousel-caption">
                            <h3>Construire son avenir</h3>
                            <p>We love the Big Apple!</p>
                        </div>
                    </div>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </div>
    </div>
</section>