<?php ?>

<!DOCTYPE html>
<html lang="ru">   
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="New Automation Tool for Your Home">

    <title>New Automation Tool for Your Home</title>  
    
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">     
</head>


<body>
    <section class = "main-description">
        <?php
        include "header.php"
        ?>       

        <div class="main-container flex-start">
            <div class="main-container__left">
                <h1 class="main-container__heading">New Automation<br> Tool for Your Home</h1>

                <p class = "main-container__description">Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit. Faucibus tristique vulputate ultrices ut mauris tellus at.
                    Posuere sollicitudin odio tellus elit.
                </p>

                <a class="main-container__link" href = "about.php">See Our Project</a>
            </div>
            
            <div class="main-container__right">
                <figure class="main-container__image">
                    <img class = "main-container__bg" src = "img/ilustration_bg.png" alt = "Крутой фон для изображения">

                    <img class = "main-container__man" src = "img/man1.svg" alt = "Чувак с готовым сайтом">

                    <img class = "main-container__women" src = "img/women1.svg" alt = "Девушка с иконками соцсетей">
                </figure>                
            </div>
        </div>        
    </section>

    <main class="we-offer">
        <div class = "fixed-container flex-start-between">
            <div class="we-offer-left">
                <h2 class="we-offer-left__heading">
                    What we do to help our client grow in digital era,
                </h2>

                <article class="we-offer-article">
                    <figure class="we-offer-article__img">
                        <img src="img/make-business.svg" alt="Парень со своим бизнесом без бороды"> 
                    </figure>

                    <h3 class="we-offer-article__heading">
                        Make Your business To Be Better Famous In Internet
                    </h3>

                    <p class="we-offer-article__text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                         sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    </p>

                    <div class = "we-offer-article__links flex-center-start">
                        <a href="#" class="we-offer-article__link">Learn more</a>

                        <a href="#" class="we-offer-article__arrow"></a>
                    </div>
                </article>
            </div>

            <div class="we-offer-right">
                <article class="we-offer-article">
                    <figure class="we-offer-article__img img-cover">
                        <img src="img/bring-technology.svg" alt="Парень со своим бизнесом без бороды">
                        
                        <img class = "we-offer__icons" src="img/Group-bring.svg" alt="Социальные иконки у парня">
                    </figure>

                    <h3 class="we-offer-article__heading">
                        Make Your business To Be Better Famous In Internet
                    </h3>

                    <p class="we-offer-article__text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                         sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    </p>

                    <div class = "we-offer-article__links flex-center-start">
                        <a href="#" class="we-offer-article__link">Learn more</a>

                        <a href="#" class="we-offer-article__arrow"></a>
                    </div>
                </article>

                <article class="we-offer-article">
                    <figure class="we-offer-article__img">
                        <img src="img/build-your-digital.svg" alt="Парень со своим бизнесом без бороды"> 
                    </figure>

                    <h3 class="we-offer-article__heading">
                        Make Your business To Be Better Famous In Internet
                    </h3>

                    <p class="we-offer-article__text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                         sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    </p>

                    <div class = "we-offer-article__links flex-center-start">
                        <a href="#" class="we-offer-article__link">Learn more</a>

                        <a href="#" class="we-offer-article__arrow"></a>
                    </div>
                </article>
            </div>
        </div>
    </main>

    <section class="our-clients"> 
        <div class="our-clients__description flex-start">
            <h2 class="our-clients__heading">Our Beloved Client</h2>

            <p class = "our-clients__paragraph">Lorem ipsum dolor sit amet,
                consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam.
            </p>
        </div>

        <div class="clients-gallery">
            <div class="clients-gallery__section flex-start-between border-bottom">
                <figure class="clients-gallery__logo">logo client 1</figure>
                <figure class="clients-gallery__logo">logo client 2</figure>
                <figure class="clients-gallery__logo">logo client 3</figure>
                <figure class="clients-gallery__logo">logo client 4</figure>
            </div>

            <div class="clients-gallery__section flex-start-between">
                <figure class="clients-gallery__logo2">logo client 5</figure>
                <figure class="clients-gallery__logo2">logo client 6</figure>
                <figure class="clients-gallery__logo2">logo client 7</figure>
                <figure class="clients-gallery__button">
                    <a class = "clients-gallery__link" href = "#">More Client</a>
                </figure>
            </div>

            <div class="clients-gallery__more">                    
                <div class="clients-gallery__section flex-start-between">
                    <figure class="clients-gallery__logo">logo client 8</figure>
                    <figure class="clients-gallery__logo">logo client 9</figure>
                    <figure class="clients-gallery__logo">logo client 10</figure>
                    <figure class="clients-gallery__logo">logo client 11</figure>
                </div>

                <a href="#" class="clients-gallery__сlose">
                    <p class="clients-gallery__exit">>>&nbsp;close</p>
                </a>
            </div>                       
        </div>

        <?php
        include "footer.php"
        ?> 
    </section>      
</body>

</html>
<?php ?>