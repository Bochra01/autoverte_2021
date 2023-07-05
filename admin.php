<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/admin.css">
   
</head>
<body>
    
<header class="header">

    <div id="menu-btn" class="fas fa-bars"></div>

    <a href="index.php" class="logo"> <span>max</span>wheels </a>

    <nav class="navbar">
        <a href="index.php">Accueil</a>
        <a href="recherche.php">Recherche</a>
        <a href="recherche.php">Location</a>
        <a href="inscription.php">Inscription</a>
        <a href="usager.php">Usager</a>
        <div class="dropdown">
        <button class="dropbtn">Admin</button>
        <div class="dropdown-content">
        <a href="maj.php">Mise à jour</a>
        <a href="ajouterClient.php">Insertion de clients</a>
        <a href="ajouterAuto.php">Insertion d'autos</a>
        <a href="Ajouterlocation.php">Insertion de locations</a>
        <a href="supprimer.php">Suppression</a>

  </div>

</div>
<a href="logout.php">Logout</a>
    </nav>
 
    <div id="login-btn">
        <button class="btn">login</button>
        <i class="far fa-user"></i>
    </div>

</header> 
    
<div class="login-form-container">

    <span id="close-login-form" class="fas fa-times"></span>

    <form action="actionLogin.php" method="POST">
        <h3>user login</h3>
        <p for="login"> Entrez votre login </p>
        <input type="text" placeholder="login" class="box" name="login">
        <p for="password"> Entrez votre mot de passe</p>
        <input type="password" placeholder="password" class="box" name="password">
        <input type="submit" value="login" class="btn">
        <p> don't have an account <a href="inscription.php">create one</a> </p>
    </form>

</div>

<section class="home" id="home">

    <h3 data-speed="-2" class="home-parallax">Best cars in Montreal</h3>

    <img data-speed="5" class="home-parallax" src="image/home-img.png" alt="">

    <a data-speed="7" href="recherche.php" class="btn home-parallax">Rechercher des voitures</a>

</section>

<section class="icons-container">

    <div class="icons">
        <i class="fas fa-home"></i>
        <div class="content">
            <h3>150+</h3>
            <p>branches</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-car"></i>
        <div class="content">
            <h3>4770+</h3>
            <p>cars sold</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-users"></i>
        <div class="content">
            <h3>320+</h3>
            <p>happy clients</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-car"></i>
        <div class="content">
            <h3>1500+</h3>
            <p>news cars</p>
        </div>
    </div>

</section>



<section class="services" id="services">

    <h1 class="heading"> our <span>services</span> </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-car"></i>
            <h3>car selling</h3>
            <p>Here, you can buy the car of your dreams.</p>
           
        </div>

        <div class="box">
            <i class="fas fa-tools"></i>
            <h3>parts repair</h3>
            <p>Here, We can repair all your car's problem parts.</p>
    
        </div>

        <div class="box">
            <i class="fas fa-car-crash"></i>
            <h3>car insurance</h3>
            <p>Here, you will find the best car insurance with the best price. </p>
           
        </div>

        <div class="box">
            <i class="fas fa-car-battery"></i>
            <h3>battery replacement</h3>
            <p>Here, we replace damage batteries to new batteries, with the best quality
                that can last longer than you can ever find, new generation. </p>
  
        </div>

        <div class="box">
            <i class="fas fa-gas-pump"></i>
            <h3>oil change</h3>
            <p>Here, we change car's oil for our old clients for no price.</p>
      
        </div>

        <div class="box">
            <i class="fas fa-headset"></i>
            <h3>24/7 support</h3>
            <p>Here, you can call us at any time to take of your car, to offer our
                client the best service.
            </p>
         
        </div>

    </div>

</section>


<section class="newsletter">
    
    <h3>subscribe for latest updates</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, suscipit.</p>

   <form action="">
        <input type="email" placeholder="enter your email">
        <input type="submit" value="subscribe">
   </form>

</section>

<section class="reviews" id="reviews">

    <h1 class="heading"> client's <span>review</span> </h1>

    <div class="swiper review-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="image/pic-1.png" alt="">
                <div class="content">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam incidunt quod praesentium iusto id autem possimus assumenda at ut saepe.</p>
                    <h3>john deo</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/pic-2.png" alt="">
                <div class="content">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam incidunt quod praesentium iusto id autem possimus assumenda at ut saepe.</p>
                    <h3>john deo</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/pic-3.png" alt="">
                <div class="content">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam incidunt quod praesentium iusto id autem possimus assumenda at ut saepe.</p>
                    <h3>john deo</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/pic-4.png" alt="">
                <div class="content">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam incidunt quod praesentium iusto id autem possimus assumenda at ut saepe.</p>
                    <h3>john deo</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/pic-5.png" alt="">
                <div class="content">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam incidunt quod praesentium iusto id autem possimus assumenda at ut saepe.</p>
                    <h3>john deo</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/pic-6.png" alt="">
                <div class="content">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam incidunt quod praesentium iusto id autem possimus assumenda at ut saepe.</p>
                    <h3>john deo</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

        </div>

        <div class="swiper-pagination"></div>

    </div>

</section>

<section class="contact" id="contact">

    <h1 class="heading"><span>contact</span> us</h1>

    <div class="row">

        <form action="">
            <h3>get in touch</h3>
            <input type="text" placeholder="your name" class="box">
            <input type="email" placeholder="your email" class="box">
            <input type="tel" placeholder="subject" class="box">
            <textarea placeholder="your message" class="box" cols="30" rows="10"></textarea>
            <input type="submit" value="send message" class="btn">
        </form>

    </div>

</section>

<section class="footer" id="footer">

    <div class="box-container">

        <div class="box">
            <h3>our branches</h3>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Tunisia </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Canada </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> France </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Germany </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> USA </a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
            <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
            <a href="#"> <i class="fas fa-envelope"></i> bochraabdelli@gmail.com </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Tunis, Tunisia - 400104 </a>
        </div>

    </div>

    <div class="credit"> Maxwheels </div>

</section>

</section>










<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

</body>
</html>