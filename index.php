<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <header>
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                <a class="navbar-brand" href="#">Carousel</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">Disabled</a>
                        </li>
                    </ul>
                    <form class="form-inline mt-2 mt-md-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </nav>
        </header>

        <section id="avis">

            <!-- Boutons d'affichage -->
            <div class="btn-group" id="buttonAvis" role="group" aria-label="Basic example">
                <button onclick="showCarouselOne()" type="button" class="btn btn-secondary"> Avis de particuliers </button>
                <button onclick="showCarouselTwo()" type="button" class="btn btn-secondary"> Avis de professionnels </button>
            </div>

            <!-- Carousel 1 -->
            <div id="carouselOne">

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner">

                        <div class="carousel-item active">
                            <div class="card">
                                <div class="card-header">
                                    <img style="" src="assets/img/fleurRose.jpg" class="rounded-circle card-img-top" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">John Doe</h5>
                                    <p class="card-text"> "J'adore ce site, je recommande fortement."</p>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="card">
                                <div class="card-header">
                                    <img src="assets/img/fleurBleue.jpg" class="rounded-circle card-img-top" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Paul Turpin</h5>
                                    <p class="card-text"> "Je suis pressé d'avoir des enfants simplement pour les faire garder sur ce site !"</p>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="card">
                                <div class="card-header">
                                    <img src="assets/img/fleurJaune.jpg" class="rounded-circle card-img-top" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Nicolas Dufresne</h5>
                                    <p class="card-text"> "Franchement, c'est quali !"</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>

                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>

                </div>
            </div>

            <!--Carousel 2-->
                <div style="display:none" id="carouselTwo">

                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner">

                            <div class="carousel-item active">
                                <div class="card">
                                    <div class="card-header">
                                        <img src="assets/img/rat.jpg" class="rounded-circle card-img-top" alt="...">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">John Doe</h5>
                                        <p class="card-text"> "J'adore ce site, je recommande fortement."</p>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="card">
                                    <div class="card-header">
                                        <img src="assets/img/panda.jpg" class="rounded-circle card-img-top" alt="...">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Paul Turpin</h5>
                                        <p class="card-text"> "Je suis pressé d'avoir des enfants simplement pour les faire garder sur ce site !"</p>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="card">
                                    <div class="card-header">
                                        <img src="assets/img/coccinelle.png" class="rounded-circle card-img-top" alt="...">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Nicolas Dufresne</h5>
                                        <p class="card-text"> "Franchement, c'est quali !"</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>

                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>

                    </div>
                </div>
        </section>
    </div>

    <script>
        function showCarouselOne() {
            var two = document.getElementById('carouselTwo');
            var one = document.getElementById('carouselOne');
            if(one.style.display === "none" || two.style.display ==="block"){
                one.style.display="block";
                two.style.display="none";
            }
        }

        function showCarouselTwo(){
            var one = document.getElementById('carouselOne');
            var two = document.getElementById('carouselTwo');
            if(two.style.display === "none" || one.style.display === "block"){
                one.style.display="none";
                two.style.display="block";
            }
        }
    </script>
</body>
</html>


