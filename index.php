<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
    <section id="avis">

        <!-- Boutons d'affichage -->
        <div class="btn-group" id="buttonAvis" role="group" aria-label="Basic example">
            <button onclick="showCarouselOne()" type="button" class="btn btn-secondary"> Avis de particuliers </button>
            <button onclick="showCarouselTwo()" type="button" class="btn btn-secondary"> Avis de professionnels </button>
        </div>

        <!-- Carousel 1 -->
        <div id="carouselOne">
            <img src="assets/img/fleurBleue.jpg">
        </div>

        <!--Carousel 2-->
        <div id="carouselTwo">
            <img src="assets/img/fleurRose.jpg">
        </div>

    </section>

    <script>
        function showCarouselOne() {
            var x = document.getElementById('carouselTwo');
            var y = document.getElementById('carouselOne');
            if(x.style.display === "none"){
                x.style.display="block";
                y.style.display="none";
            }else{
                x.style.display="none";
                y.style.display="block";
            }
        }

        function showCarouselTwo(){
            var x = document.getElementById('carouselOne');
            var y = document.getElementById('carouselTwo');
            if(x.style.display === "none"){
                x.style.display="block";
            }else{
                x.style.display="none";
            }
        }
    </script>
</body>
</html>


