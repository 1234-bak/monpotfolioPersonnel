<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Personnel</title>
    <link rel="stylesheet" href="style.css">
     <!--=========pour les icons======-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<style>
@import url('https://fonts.googleapis.com/css2?family=Popins:wght@300;400;500;600;700;800&display=swap');

*{
    margin:0;
    padding: 0;
    box-sizing: border-box;
    text-decoration: none;
    border: none;
    outline:none;
    scroll-behavior: smooth;
    font-family: 'Poppins',sans-serif;
}
:root{
    --bg-color:#1f2420;
    --second-bg-color:#323946;
    --text-color:#fff;
    --main-color:#fb911f;
}

html{
    font-size: 62.5% ;
    overflow-x: hidden;
}

body{
    background: var(--bg-color);
    color:var(--text-color)
}
section{
    min-height: 100vh;
    padding: 10rem 9% 2rem;
}

.header{
    position:fixed;
    top:0;
    left: 0;
    width: 100%  ;
    padding:2rem 9% ;
    background: var(--bg-color);
    display: flex;
    justify-content: space-between;
    align-items: center;
    z-index: 100;
    
}


.logo{
    font-size: 2.5rem;
    color:var(--text-color);
    font-weight: 600;
    cursor: default;
}
.navbar a {
    font-size: 1.7rem;
    color:var(--text-color);
    margin-left: 4rem;
    transition:.3s;
}
nav a:hover {
    color: var(--main-color);
}
nav a.active{
    color: #fb911f;
}

#menu-icon{
    font-size: 3.6rem;
    color:var(--text-color);
    display: none;
}

.home{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
.image_content{
    width: 200px;
    height: 200px;
    padding: 10px;
    background-color: var(--second-bg-color);
    margin-bottom: 20px;
    border-radius: 50%;
}

.image_content img{
    width: 100%;
    height: 100%;
    border-radius: 50%;
}

.home-content h3:nth-of-type(2){
    margin-bottom: 2rem;
}
.home-content h3{
    font-size: 3.2rem;
    font-weight: 500;
}
span{
    color:var(--main-color);
}
.home-content h1{
    font-size: 4.6rem;
    font-weight: 600;
    line-height: 1.3;
}

.home-content p{
    font-size: 1.6rem;

}

.social-media{
    margin-left: 50px;
}

.social-media a{
    display: inline-flex;
    justify-content: center;
    align-items:center;
    width: 8rem;
    height: 8rem;
    background: transparent;
    border: .2rem solid var(--main-color);
    border-radius: 30% ;
    color: var(--main-color);
    margin: 3rem 1.5rem 3rem 0;
    transition:.5s ease;
}

.social-media a:hover{
    background: var(--main-color);
    color: var(--second-bg-color);
    box-shadow:0 0 1rem var(--main-color);
    
}
.btn{
    display: inline-block;
    padding:1rem 2.8rem;
    background: var(--main-color);
    border-radius: 4rem;
    box-shadow: 0 0 1rem var(--main-color);
    font-size: 1.6rem;
    color:var(--second-bg-color);
    letter-spacing: .1rem;
    font-weight: 600;
    transition:.5s ease;
    

}

.btn:hover{
    box-shadow: none;
    cursor: pointer;
}

.plus{
    visibility: hidden;
    height: 0;
    
}

.plus p span{
    fon-weight: 500;
    colcolor: var(--main-color);
}
.show{
    visibility: visible;
}

.about{
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 2rem;
    background: var(--bg-color);
    
}

.heading{
    text-align: center;
    font-size: 4.5rem;
}
.about-content h2{
    text-align: center;
    line-height: 1.2;
}
.about-content h3{
    font-size: 2.6rem;
}
.about-content p {
    font-size: 1.6rem;
    margin: 2rem 0 3rem;
}

/*--=========la partie du services ======--*/

.services h2{
    margin-bottom: 5rem;
    margin-top: 5rem;
}
.services-container{
   display: flex;
   justify-content: center;
   align-items: center;
   flex-wrap: wrap;
   gap: 2rem;
}
.services-container .services-box{
    flex: 1 1 30rem;
    background: var(--second-bg-color);
    padding: 3rem 2rem 4rem;
    border-radius: 2rem;
    text-align: center;
    border: .2rem solid var(--bg-color);
    transition: .5s ease;
}
.services-container .services-box:hover{
    border-color: var(--main-color);
    transform: scale(1.02);
}

.services-box i {
    font-size: 7rem;
    color: var(--main-color);
}
.services-box h3{
    font-size: 2.6rem;
}
.services-box p{
    font-size: 1.6rem;
    margin: 1rem 0 3rem;
}

#contact{
    text-align: center;

    
}
.contacter{
    display: flex;
    justify-content: space-between;
    margin-top: 50px;
}

.numero{
    margin-left: 50px;
    position: relative;
    top: 40px;
}

.telecharger{
    margin-top: 25px;
   
}



</style>
    <!--=========le header======-->
    <header class="header">
    <a href="#" class="logo"><span>Mon Portfolio <!--<img src="img/bakus.jpg" alt="">--></span></a>
        <i class='bx bx-menu' id="menu-icon"></i>

        <nav class="navbar">
            <a href="#accueil" class="active">Accueil</a>
            <a href="#propos">A propos</a>
            <a href="#services">Mes projets</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>
    

        <!--=========le debut du corps du site======-->
    <section class="home" id="accueil">
        <div class="image_content">
            <img src="img/bakus.jpg" alt="ma photo">
        </div>
        <div class="home-content">
            <h3>Salut ?? tous, Bienvenu sur ma page o?? je vous pr??sente mon parcour et mes projets r??alis??s.</h3><br>
            <h3>je reponds au nom de</h3>
            <h1>BAKAYOKO IBRAHIM, </h1>
            <h3>Etudiant informaticien autodidacte <span>D??veloppeur full stack</span>,
             J'ai eu a r??alis?? diff??rent projet li?? au domaine du digital au cours de ma formation</h3>
            <a href="img/monCV.pdf" target="blank" class="btn telecharger">T??l??charger mon cv</a>
            
        </div>
        
    </section>
                  <!--=========la partie du a propos ======-->
    <section class="about" id="propos">
        <div class="about-content">
            <h2 class="heading">A propos de moi</h2>
            <h3><span>Developpeur full stack</span></h3>
            <p>Titulaire d'un BAC C au Lyc??e Scientifique de yamoussoukro,
                Depuis mon int??gration ?? l'Ecole Sup??rieure Africaine des TIC (ESATIC) en septembre 2020, je poursuis la fili??re SRIT
                (Syst??me R??seaux Informatique et T??l??communications), fili??re ayant pour objectif
                de former des techniciens sup??rieurs dans les secteurs du d??veloppement WEB et multim??dia, des r??seaux
                informatiques et des r??seaux de t??l??communications.<br>
                Elle fournit ?? l?????tudiant de solides comp??tences scientifiques
                (math??matique/physique et aussi dans les domaines de
                l'informatique(algorithme, programmation orient??s objet, Base de Donn??es) et des r??seaux et T??l??coms) qui pr??parent les apprenants 
                aux ??tudes de Master et Doctorat dans les domaines du g??nie logiciel des T??l??communications/TIC.
            </p>

            <button class="btn button">Savoir plus</button>

            <div class="plus">
                <p>
                
                Pour tout savoir sur moi, Je suis un ??tudiant curieux, rigoureux passionn?? des programmes informatiques.
                Au cours de ma formation j'ai ??t?? initi?? par l'apprentissage par projet(APP), unit?? d'enseignement incluse dans le parcours
                licence donnant la possibilit?? au ??tudiant d'exprim?? leur talent
                et leur esprit de cr??ativit?? en r??alisant des projets par groupe
                constitu?? d'??tudiant de different fili??re leur permettant ainsi de d??velopper
                l'esprit d'??quipe. Ce type d'apprentissage m'a ??t?? b??n??fique car grace ?? cela j'ai r??aliser en groupe diff??rent projet portant sur:
                
                </p>
                <ul>
                    <li><h1><span>La digitalisation des parking dans la commune du plateau</span></h1></li>
                    <li><h1><span>Le tourisme 2.0</span></h1></li>
                    <li><h1><span>La mise d'un syst??me d'aide ?? la sant??</span></h1></li>
                </ul><br>
                <p>j'ai ainsi d??velopper l'esprit d'??quipe ce qui m'a permi en 2022 de remporter avec mon groupe l'Hackathon 
                    niveau 2 de mon ??cole portant sur la mise en place
                    d'un nouveau syst??me intelligent de paiement ??lectronique
                    en CI. <br>
                    Notre solution ??tait une application WEB de paiement en ligne
                    avec comme outil de validation la reconnaissance faciale.<br>
                    Cette solution m'a permi de me familiariser avec certains outils
                    comme <span>Github</span> qui est un service de cloud qui aide les D??veloppeur ?? stocker et gerer leur code et la bibliotheque d'int??lligence
                    Artificielle <span>Tensor Flow</span>.

                </p>
            </div>
            
        </div>
    </section>
             <!--=========la partie du services ======-->
    <section class="services" id="services">
        <h2 class="heading">Mes projets</h2>
        <div class="services-container">
            <div class="services-box">
                <i class='bx bx-code-alt'></i>
                <h3>PARK'IVOIR</h3>
                <p>Plateforme de gestion des baies de stationnement dans la commune du plateau</p>
                <a href="appElitech/" target="blank" class="btn">Voir le site</a>
            </div>
            <div class="services-box">
                <i class='bx bx-code-alt'></i>
                <h3>SanaBouf</h3>
                <p>site web de reservation de d??licieuse plat ivoirienne  </p>
                <a href="restaurant/" target="blank" class="btn">Voir le site</a>
            </div>
           
        </div>
    </section>
        <h2 class="heading" id="contact">Me contacter</h2>
        <div class="contacter">
            <div class="left">
                <br>
                <h2 class="numero"><span>0704514952 - 0554124567<span/></h2>
            </div>
            <div class="social-media">
                        <a href="#"><i class='bx bxl-facebook'></i></a>
                        <a href="#"><i class='bx bxl-whatsapp'></i></a>
                        <a href="#"><i class='bx bxl-linkedin'></i></a>
                        <a href="#"><i class='bx bxl-instagram'></i></a>
        
            </div>
        </div>
    
    <!--=========le portfolio======-->
<script>
    const btn = document.querySelector('.button');
    const plus = document.querySelector('.plus');

    btn.addEventListener('click',()=>{plus.classList.toggle('show')});

</script>
</body>
</html>