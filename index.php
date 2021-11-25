<?php $message = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
        include("../config/res-db.php");
        require("config/traitement-res.php");
        if ($verify){
        $reserv = new Reservation();
        $reserv->save($_POST["days"], $_POST["nom"], $_POST["prenom"], $_POST["tel"], $_POST["email"], $_POST["place"]);
        }
        $message = empty($Err)? "<span class='bravo'>Votre réservation a bien été prise en compte</span>":"<span class='error'>$Err</span>";
    }
    
   
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link href="edit/style.css" rel="stylesheet">
    <script src="edit/festival.js" defer></script>
    <title>Neon Festival</title>
</head>
<body>
    <header>
        <video muted autoplay loop >
            <source src="img/vlc-record-2021-11-02-16h23m00s-Tomorrowland-Belgium-2019-_-Official-Aftermovie-.mp4" type="video/mp4">
            <source src="img/vlc-record-2021-11-02-16h23m00s-Tomorrowland-Belgium-2019-_-Official-Aftermovie-.webm" type="video/webm">
        </video>
        <div class="nav">
            <a href="#lineup" class="shownav">Line-Up</a>
            <a href="#reserv" class="shownav">Réservations</a>
            <a href="#retro" class="shownav">Rétrospective</a> 
        </div>
        <div class="headercont">  
            <h1>Bienvenue à Neon Festival</h1>
            <h2>27-28-29 Juillet 2022</h2>
            <p id="countdown"></p>
        </div>   
    </header>
    <section id="lineup">
        <h2 class="anim-h2">Line-up</h2>
        <div class="slider">
            <div class="slides">
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <input type="radio" name="radio-btn" id="radio4">
                <div class="slide first">
                    <img src="img/CalvinHarris_2.jpg" alt="">
                    <div class="hidden-text">
                        <p>Calvin Harris</p>
                    </div>
                </div>
                <div class="slide">
                    <img src="img/ArminvanBuuren_1.jpg" alt="">
                    <div class="hidden-text">
                        <p>Armin Van Buuren</p>
                    </div>
                </div>
                <div class="slide">
                    <img src="img/DavidGuetta_2.jpg" alt="">
                    <div class="hidden-text">
                        <p>David Guetta</p>
                    </div>
                </div>
                <div class="slide">
                    <img src="img/Skrillex_2.jpg" alt="">
                    <div class="hidden-text">
                        <p>Skrillex</p>
                    </div>
                </div>
                <div class="navigation-auto">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>
                    <div class="auto-btn4"></div>

                </div>
                <div class="navigation-manual">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
                <label for="radio4" class="manual-btn"></label>
            </div>
            </div>
            
        </div>


    </section>
    
    <div id="reserv"> 
        <h2 class="anim-h2">Réservations</h2> 
        <div class="warning"><?php echo $message ?></div>
        <form method="post" action="">
            <div class="form-row">
                <select name="days" required>
                    <option selected disabled>Journée</option>
                    <option value="vendredi" >Vendredi</option>
                    <option value="samedi" >Samedi</option>
                    <option value="dimanche" >Dimanche</option>
                </select>
            </div>
            <div class="form-row">
                <input type="text" name="nom" placeholder="Nom" required>
                <input type="text" name="prenom" placeholder="Prénom" required>
            </div>
            <div class="form-row">
                <input type="text" name="tel" placeholder="Numéro de téléphone" required>
                <input type="text" name="email" placeholder="E-mail" required>
            </div>
            <div class="form-row">
                <input type="number" name="place" placeholder="Combien de places ?" min = "1" max = "5" required>
                <input type="submit" value="Réserver">
            </div>
            <div class="form-row"><p>Vous pouvez prendre jusqu'à 5 places maximum</p></div>
        </form>
    </div>
    <article id="retro">
            <h2 class="anim-h2">Rétrospective</h2>
            <section id="timeline">
  
  <div class="tl-item">
    
    <div class="tl-bg" style="background-image: url(img/2020-000.jpg)"></div>
    
    <div class="tl-year">
      <p class="f2 heading--sanSerif">2020</p>
    </div>

    <div class="tl-content">
      <h1>Around the World</h1>
      <p>Une année exceptionnelle et pleine de défis a appelé à de nouvelles aventures à explorer… Lors de l'annulation de Neon Festival Winter en France et de l'édition d'été en Belgique en raison du COVID-19, Neon Festival a fait un saut dans le merveilleux monde numérique. </p>
    </div>

  </div>

  <div class="tl-item">
    
    <div class="tl-bg" style="background-image: url(img/2019-1.jpg)"></div>
    
    <div class="tl-year">
      <p class="f2 heading--sanSerif">2019</p>
    </div>

    <div class="tl-content">
      <h1 class="f3 text--accent ttu">The Book of Wisdom – The Return</h1>
      <p>Après une première édition magique de Neon Festival à l'Alpe d'Huez (mars 2019), l'édition Célébration des 15 ans en Belgique a renoué avec l'une des histoires les plus mythiques jamais contées. </p>
    </div>

  </div>

  <div class="tl-item">
    
    <div class="tl-bg" style="background-image: url(img/2018-1.jpg)"></div>
    
    <div class="tl-year">
      <p class="f2 heading--sanSerif">2018</p>
    </div>

    <div class="tl-content">
      <h1 class="f3 text--accent ttu">The Story of Planaxis</h1>
      <p> Plongez dans un conte merveilleux et nouveau : L'histoire de Planaxis. Avec 400 000 People of Tomorrow, deux week-ends merveilleux et ensoleillés ont marqué l'été 2018 comme magique. Nous sommes revenus dans le monde d'en haut et avons rempli nos cœurs de beaux souvenirs.</p>
    </div>

  </div>

  <div class="tl-item">
    
    <div class="tl-bg" style="background-image: url(img/2017-1.jpg)"></div>
    
    <div class="tl-year">
      <p class="f2 heading--sanSerif">2017</p>
    </div>

    <div class="tl-content">
      <h1 class="f3 text--accent ttu">Amicorum Spectaculum</h1>
      <p>En 2017 un rassemblement magique des People of Neon a eu lieu pendant 2 week-ends. Les 21-22-23 juillet et 28-29-30 juillet, plus de 400 000 amis ont découvert "Amicorum Spectaculum". Un spectacle qu'on voit rarement, un rassemblement de talents qui vous a émerveillé.</p>
    </div>

  </div>
</section>
    </article>
    <footer>
        <div class="contact">
            <h2 class="anim-h2">Rejoignez-nous !</h2><br>
            <div class="logo">
                <a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
                <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="disclaimer">
            <p>Ce site est entièrement fictif et conçu dans le cadre de ma formation.</p>
        </div>
    </footer>
</body>
</html>