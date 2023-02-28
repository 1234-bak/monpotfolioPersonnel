<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel = "preconnect" href = "https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Resto</title>
<body>
    <style>
        
*{
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
    font-family: 'poppins', sans-serif;
    scroll-behavior: smooth;
}

p{
    font-weight: 300;
    color: #111;
}

header{
    position: fixed;
    top: 0%;
    left: 0%;
    padding: 20px 10px;
    width: 100%;
    z-index: 1;
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    transition: 0.5s;
}

.logo{
    color: #fff;
    font-weight: bold;
    font-size: 2em;
    text-decoration: none;
}
.logo span{
    color: green;
}

.navbar{
    display: flex;
    position: relative;
}
.navbar li{
    list-style: none;
}
.navbar a{
    color: #fff;
    text-decoration: none;
    margin-left: 30px;
    font-weight: 700;
}

.btn-reserve{
    padding: 10px 20px;
    background: green;
   margin-top: -10px;
   text-transform:uppercase ;
}

.btn-reserve:hover{
    background: green;
    transition: ease-out;
}

header .navbar li a:hover{
    color: green;
    border-bottom: 2px solid green;
}

.banniere{
    position: relative;
    width: 100%;
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background-image: url(./images/pageheader-banner.jpg);
    background-size: cover;
}

.banniere .contenu{
    max-width: 70%;
    text-align: center;
}
.banniere .contenu h2{
    color: #fff;
    font-size: 3em;
    text-transform: capitalize;
}
.contenu p:nth-child(2){
    color: #ffff;
    font-size: 1.2em;
}

.btn1{
    font-size: 1em;
    color: #fff;
    background: green;
    padding: 10px 20px;
    display: inline-block;
    margin-top: 20px;
    text-decoration: none;
    text-transform: uppercase;
    letter-spacing: 2px;
    transition: 0.5s;
    margin-left: 10px;
}
.btn2{
    font-size: 1em;
    color: #fff;
    background: #2a4963;
    padding: 10px 20px;
    display: inline-block;
    margin-top: 20px;
    text-decoration: none;
    text-transform: uppercase;
    letter-spacing: 2px;
    transition: 0.5s;
    margin-left: 10px;
}

.btn1:hover{
letter-spacing: 4px;
}
section{
    padding: 100px;
}
.row{
    position: relative;
    width: 100%;
    display: flex;
    justify-content: space-between;
}

.row .col50{
    position: relative;
    width: 48%;
    justify-content: center;
    align-items: center;

}

.row .col50 h2{
    margin-bottom: 20px;
}

.titre-texte{
    color: #000;
    font-size: 2em;
    font-weight: 300px;
    text-transform: capitalize;
}

.titre-texte span{
    color: green;
    font-size: 1.5em;
    font-weight: 700px;
}

.row .col50 img{
    height: 450px;
    width: 600px;
    position: relative;
}

.titre{
    display: flex;
    width: 100%;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

.menu{
    margin-top: -100px;
}

.menu .contenu{
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    margin-top: 40px;
}

.menu .contenu .box{
    width: 350px;
    margin: 20px;
    border: 20px solid #fff;
    box-shadow: 20px 15px 35px rgba(0,0,0, 0.8);
}

.menu .contenu .box .imbox{
    position: relative;
    width: 100%;
    height: 300px;
}

.menu .contenu .box .imbox img{
    position: relative;
    top: 0;
    left: 0;
    width: 100%;
    height: 300px;
    object-fit: cover;
}

.menu .contenu .box .text{
    text-align: center;
    font-weight: 300px;
    color: #111;
}

.menu .contenu .box .text h3{
    font-weight: 400;
}

.expert{
    margin-top:-100px;
}

.expert .contenu{
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    margin-top: 40px;
}

.expert .contenu .box{
    width: 250px;
    margin: 15px;
}
.expert .contenu .box img{
    position: relative;
    width: 100%;
    height: 300px;
    top: 0;
    left: 0;
    object-fit: cover;
}

.expert .contenu .box h3{
    color: #111;
    font-weight: 400;
    text-align: center;
}

.temoignage{
    background-image: url(./images/bg2.jpg);
    background-size: cover;
}

.temoignage .contenu{
    display: flex;
    margin-top: 40px;
    width: 100%;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    flex-direction: row;
}

.temoignage .contenu .box{
    width: 340px;
    margin: 20px;
    background: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    border-radius: 15px;
    padding: 40px;
}

.temoignage .contenu .box .imbox{
    width: 150px;
    height: 150px;
    border-radius: 50px;
    position: relative;
    margin-bottom: 20px;
    overflow: hidden;
}

.temoignage .contenu .box .imbox img{
    position: relative;
    width: 100%;
    height: 100%;
    top:0;
    left: 0;
    object-fit: cover;
    justify-content: center;
    align-items: center;
}

.temoignage .contenu .box .text{
    text-align: center;
    color: #666;
    font-style: italic;
}

.temoignage .contenu .box .text h3{
    color: green;
    margin-top: 20px;
    font-size: 1em;
    font-weight: 600;
}

.blanc .titre-texte{
    color: #fff;
}

.blanc .titre-texte,
.blanc p{
    color: #fff;
}

.contact{
    background-image: url(./images/img-form.jpg);
    background-size: cover;
    box-shadow: 2px 2px 12px rgba(0,0,0, 0.8);
    width: 100%;
    background-position: unset;
}

.contactform{
    padding: 75px 50px;
    background: #fff;
    box-shadow: 5px 15px 50px rgba(0,0,0, 0.8);
    max-width: 500px;
    margin-top: 50px;
    justify-content: center;
    align-items: center;
    margin-left: 38%;
}

.contactform .inputboite{
    position: relative;
    width: 100%;
    margin-bottom: 20px;
}

.contactform h3{
    color: #111;
    font-size: 1.2em;
    margin-bottom: 20px;
}

.contactform .inputboite input,
.contactform .inputboite textarea{
    width: 100%;
    border: 1px solid #555;
    padding: 10px;
    color: #111;
    outline: none;
    font-size: 16px;
    font-weight: 300;
    resize: none;
}


.copyright{
    padding: 20px 40px;
    border-top: 2px solid rgba(0,0,0, 0.1);
    background: rgba(228,222,222,);
    text-align: center;
}

.copyright p:nth-child(1){
    color: #333;
}

.copyright a {
    color: green;
    text-decoration: none;
    font-weight: 600;
    font-style: italic;
}

.contact .titre-text span{
    color: green;
    font-size: 2em;
}

header.sticky{
    background: #fff;
    padding: 10px 10px;
    box-shadow: 0px 5px 20px rgba(0,0,0, 0.05);
}

header.sticky .logo{
    color: #000;
}

header.sticky .navbar li a {
    color: #000;
}

header.sticky li a:hover{
    color: green;
    border-bottom: 2px solid green;
}

@media (max-width: 991px) {
header, 
header.sticky{
    padding: 10px 20px;
}

header .navbar li{
    margin-left: 0px;
}

header .navbar li a {
    text-decoration: none;
    color: #111;
    font-size: 1.6em;
    font-weight: 300;
}

.navbar{
    display: none;
}
section{
    padding: 20px;
}

header .navbar.active{
    width: 100%;
    height: calc(100% -68px);
    position: fixed;
    top: 68px;
    left:0;
    display: flex;
    justify-content: center;
    flex-direction: column;
    background: #ffff;
    align-items: center;
}

.menuToggle{
    position: relative;
    width: 40px;
    height: 40px;
    background-image: url(./images/menu.png);
    background-repeat: no-repeat;
    background-position: center;
    cursor: pointer;
    background-size: 30px;
}

.menuToggle.active
{
    background-image: url(./images/close.png);
    background-size: 25px;
    background-repeat: no-repeat;
    background-origin: center;
}

header.sticky .menuToggle{
    filter: invert(1);
}


.banniere .contenu h2{
    font-size: 2em;
}

.row .col50 img{
    margin-left: 18%;
}

.contenu p:nth-child(2){
    font-size: 1.2em;
}
.expert{
    margin-top: 0px;
}

.menu{
    margin-top: 0px;
}

.row{
    display: flex;
    flex-direction: column;
}



.temoignage h2{
    font-size: 2em;
    text-align: center;
}

.temoignage p{
text-align: center;
}

.contactform{
    margin-left: 25%;
}


    .row .col50 {
        position: relative;
        width: 100%;
        justify-content: center;
        align-items: center;
        margin-bottom: 30px;
    
    }

    .row{
        flex-direction: column;
    }
}

@media (max-width: 480px)
{
    .banniere .contenu h2{
        font-size: 2.2em;
        color: #fff;
    }

    .titre-text{
        color: #000;
        font-size: 2rem;
        font-weight: 300;
        text-transform: capitalize;
    }

    .temoignage h2 
    {
        font-size: 1.1em;
    }

    .temoignage p{
        text-align: center;
    }
}

.invisible{
    visibility: hidden;
    height: 0;
}

.showtoggle{
    visibility: visible;
    height: 100%;
}

.actionApparaitre{
    border: none;
    
}

.contactform form input[type="submit"] {
    width: 100%;
    background-color: green;
    margin-top: 20px;
    padding: 20px;
    border: none;
    cursor: pointer;
    transition: 0.7s;
    color: #fff;
    font-weight: 500;


}

.msg {
    color: yellow;
    margin-bottom: 20px;
    padding: 15px;
    border-radius: 15px;

}

.error {
    background-color: red;
    padding: 15px;
    border-radius: 15px;

}

.success {
    background-color: green;
    padding: 15px;
    border-radius: 15px;

}
    </style>
<header>
    <a href="#" class="logo"><span>S</span>ana<span>B</span>ouf</a>
    <div class="menuToggle" onclick="toggleMenu();"></div>
    <ul class="navbar">
        <li><a href="#banniere" onclick="toggleMenu();">Accueil</a></li>
        <li><a href="#apropos" onclick="toggleMenu();">A propos</a></li>
        <li><a href="#menu" onclick="toggleMenu();">Menu</a></li>
        <li><a href="#expert" onclick="toggleMenu();">Expert</a></li>
        <li><a href="#temoignage" onclick="toggleMenu();">Temoignage</a></li>
        <li><a href="#contact" onclick="toggleMenu();">Contact</a></li>
        <a href="#" class="btn-reserve"onclick="toggleMenu();">Reservation</a>
    </ul>
</header>
<section class="banniere" id="banniere">
    <div class="contenu">
        <h2>Que Des Plats Délicieux de chez nous</h2>
        <p>Si vous resentez un creux dans le ventre c'est normal,
            c'est l'heure de la pause. Votre intestin reclame son droit.
            Un proverbe africain le dit "Mangeons bien tant qu'on est vivant"
            c'est pour cela que <strong>SanaBouf</strong> vous propose d'éguisez
            votre appetit avec les meilleures plats ivoirienne.
            n'hésitez donc pas, passez votre commande
                vous serrez bien servis!
            
        </p>
        <a href="#" class="btn1">Notre Menu</a>
        <a href="#" class="btn2">Reservation</a>
    </div>
</section>
<section class="apropos" id="apropos">
    <div class="row">
        <div class="col50">
            <h2 class="titre-texte"><span>A</span> Propos De Nous</h2>
            <p>
                <strong>SanaBouf</strong> est un restaurant situé dans la
                commune de Koumassi spécialisé dans la cuisine ivoirienne.
                Elle est piloté par des expert de la cuisine bien faite qui
                qui y accorde mains et pieds à la sastifaction de la population
                ivoirienne 
            </p>
        </div>
        <div class="col50">
            <div class="img">
                <img src="./images/plat3.jpg" alt="image">
            </div>
        </div>
    </div>
</section>
<section class="menu" id="menu">
    <div class="titre">
        <h2 class="titre-texte"><span>M</span>enu</h2>
        <p>Des plats 100% ivoirienne rien que pour vous! </p>
    </div>
    <div class="contenu">
        <div class="box">
            <div class="imbox">
                <img src="img/menu1 (1).jpeg" alt="">
            </div>
            <div class="text">
                <h3>Garba chaud</h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="img/menu1 (2).jpeg" alt="">
            </div>
            <div class="text">
                <h3>Tchep jaune au poisson thon</h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="img/menu1 (3).jpeg" alt="">
            </div>
            <div class="text">
                <h3>Tchep rouge au poisson carpe</h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="img/menu1 (4).jpeg" alt="">
            </div>
            <div class="text">
                <h3>Riz à la sauce arachide avec viande de mouton</h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="img/menu1 (5).jpeg" alt="">
            </div>
            <div class="text">
                <h3>Tchep au poulet</h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="img/menu6 (1).jpeg" alt="">
            </div>
            <div class="text">
                <h3>Riz à la salade</h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="./images/c7.jpg" alt="">
            </div>
            <div class="text">
                <h3>Viande de boeuf</h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="img/menu6 (2).jpeg" alt="">
            </div>
            <div class="text">
                <h3>Special salade</h3>
            </div>
        </div>
    </div>
 </div>
 <div class="titre">
    <button class="btn1 actionApparaitre">Voir plus</button>
 </div>
 <div class="contenu invisible">
    <div class="box">
        <div class="imbox">
            <img src="img/menu1 (1).jpeg" alt="">
        </div>
        <div class="text">
            <h3>Garba chaud</h3>
        </div>
    </div>
    <div class="box">
        <div class="imbox">
            <img src="img/menu1 (2).jpeg" alt="">
        </div>
        <div class="text">
            <h3>Tchep jaune au poisson thon</h3>
        </div>
    </div>
    <div class="box">
        <div class="imbox">
            <img src="img/menu1 (3).jpeg" alt="">
        </div>
        <div class="text">
            <h3>Tchep rouge au poisson carpe</h3>
        </div>
    </div>
    <div class="box">
        <div class="imbox">
            <img src="img/menu1 (4).jpeg" alt="">
        </div>
        <div class="text">
            <h3>Riz à la sauce arachide avec viande de mouton</h3>
        </div>
    </div>
    <div class="box">
        <div class="imbox">
            <img src="img/menu1 (5).jpeg" alt="">
        </div>
        <div class="text">
            <h3>Tchep au poulet</h3>
        </div>
    </div>
    <div class="box">
        <div class="imbox">
            <img src="img/menu6 (1).jpeg" alt="">
        </div>
        <div class="text">
            <h3>Riz à la salade</h3>
        </div>
    </div>
    <div class="box">
        <div class="imbox">
            <img src="./images/c7.jpg" alt="">
        </div>
        <div class="text">
            <h3>Viande de boeuf</h3>
        </div>
    </div>
    <div class="box">
        <div class="imbox">
            <img src="img/menu6 (2).jpeg" alt="">
        </div>
        <div class="text">
            <h3>Special salade</h3>
        </div>
    </div>
</div>
</div>
<div class="titre">

</div>
</section>
<section class="expert" id="expert">
    <div class="titre">
        <h2 class="titre-texte">Nos <span>E</span>xperts</h2>
        <p>De vrai cordon bleu passionné de la cuisine à votre satisfaction </p>
    </div>
    <div class="contenu">
        <div class="box">
            <div class="imbox">
                <img src="img/expert5.jpeg" alt="">
            </div>
            <div class="text">
                <h3>Aïcha Bakayoko</h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="img/expert1.jpeg" alt="">
            </div>
            <div class="text">
                <h3>Abass Diaby</h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="img/expert3.jpeg" alt="">
            </div>
            <div class="text">
                <h3>Aminata Yele</h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="img/expert6.jpeg" alt="">
            </div>
            <div class="text">
                <h3>Sanata Bakayoko</h3>
            </div>
        </div>
    </div>
 </div>
</section>
 <section class="temoignage" id="temoignage">
    <div class="titre blanc">
        <h2 class="titre-texte">Que Disent Nos <span>C</span>lients</h2>
        <p>Voisi quelques temoignage de nos clients </p>
    </div>
    <div class="contenu">
        <div class="box">
            <div class="imbox">
                <img src="img/bakus.jpg" alt="">
            </div>
            <div class="text">
                <p>Depuis la première fois que j'ai goûté à
                    votre Tchep j'en suis dévenu accro.
                    Chapeau à vous pour le travail que vous abattez.
                </p>
                <h3>Ibrahim Bakayoko</h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="img/behira (1).jpeg" alt="">
            </div>
            <div class="text">
                <p>En plus d'être des spécialiste vous investissez dans l'higiène
                    pour toujours nous fait plaisir vraiment merci.
                </p>
                <h3>Miezan Aka</h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="img/kenza.jpeg" alt="">
            </div>
            <div class="text">
                <p>On était de passage moi et ma mère et nous avons fait escale dans 
                    votre restaurant, depuis ce jours nous sommes toujours les premiers à commandez
                    des plats de chez vous.
                </p>
                <h3>Aïda Kenza</h3>
            </div>
        </div>
    </div>
 </section>
 
<section class="contact" id="contact">

    
        <div class="titre noir">
            <h2 class="titre-text"><span>C</span>ontact</h2>
            <p>Envoyez nous votre avis par mail</p>
        </div>
        <div class="contactform">
            <?php
            
            if (isset($_POST['envoyer'])) {
                if ((empty($_POST['nom'])) || (empty($_POST['mail'])) || (empty($_POST['message']))) {
                    echo '<div class="msg error">merci de bien vouloir remplir tout les champs</div>';
                    
                }else {
                    $nom = $_POST['nom'];
                    $mail = $_POST['mail'];
                    $message = $_POST['message'];
            
                    $desti = 'ibrahimbakayoko2991@gmail.com';
                    $sujet = 'message en provenance de votre sites SanaBouf';
                    $contenu = "ce message en provenance de votre site a été envoyer par : \n";
                    $contenu .= "NOM: $nom \n";
                    $contenu .= "Email: $mail \n";
                    $contenu .= "Message: $message ";
                    $entete = "FROM: $desti";
            
                    mail($desti,$sujet,$contenu,$entete);
            
                    echo '<div class="msg success">votre message a bien été envoyer</div>';
                
                }
            }
            
            
            
            ?>

            
            <form action="" method="POST">
                <h3>Envoyer un message</h3>
                <div class="inputboite">
                    <input type="text"  name="nom" placeholder="Nom">
                </div>
                <div class="inputboite">
                    <input type="email"  name="mail" placeholder="email">
                </div>
                <div class="inputboite">
                    <textarea placeholder="message"  name="message"></textarea>
                </div>
                
                <input type="submit" name="envoyer" value="envoyer">
                
            </form>
        </div>
    
</section>

 <div class="copyright">
     <p>site de restauration développer par <a href="#"> Bakayoko Ibrahim</a>, développeur full stack à contactez
        au 0554124567-0704514952.
    </p>
 </div>
 <script type="text/javascript">
     window.addEventListener('scroll', function(){
         const header =document.querySelector('header');
         header.classList.toggle("sticky", window.scrollY > 0 );
     });

     function toggleMenu(){
         const tmenuToggle = document.querySelector('.menuToggle');
         const navbar = document.querySelector('.navbar');
         navbar.classList.toggle('active');
         menuToggle.classList.toggle('active');
     }
     const invisible = document.querySelector('.invisible');
     const btn1 = document.querySelector('.actionApparaitre');
     btn1.addEventListener('click',()=>{invisible.classList.toggle('showtoggle')});
 </script>
</body>
</html>