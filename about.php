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
    <div class = "header-wrapper">
        <?php 
        include "header.php"
        ?>
    </div>

    <section class="trigger">
        <img class = "ellips1 effect" src = "img/icons/Ellipse.svg" alt = "Эллипс">

        <img class = "ellips2 effect" src = "img/icons/Ellipse.svg" alt = "Эллипс">

        <img class = "ellips3 effect" src = "img/icons/Ellipse.svg" alt = "Эллипс">

        <img class = "ellips4 effect" src = "img/icons/Ellipse.svg" alt = "Эллипс">

        <img class = "ellips5 effect" src = "img/icons/Ellipse.svg" alt = "Эллипс">

        <h1 class = "trigger__heading">Contact Us</h1>

        <p class = "trigger__text">Lorem ipsum dolor sit amet, consectetur
            adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.
        <p>
    </section>

    <section class="our-contacts">
        <div class = "fixed-container flex-start-between">
            <div class="our-contacts__left">
                <figure class="our-contacts__image">
                    <img src = "img/contacts-us-girl.svg" alt = "Девушка с гаджетами в кресле, рядом с горшком">                    
                </figure> 
                
                <div class="block-contacts">
                    <h2 class = "block-contacts__heading">ADDRESS</h2>

                    <p class = "block-contacts__text">Id convallis placerat sit sed
                         duis id amet volutpat quam a, pharetra.
                    <p>

                    <h2 class = "block-contacts__heading">PHONE</h2>

                    <a class = "block-contacts__phone" href="tel:+76281273134321">+62-812-7313-4321</a>

                    <a class = "block-contacts__phone" href="tel:+7628170001234">+62-817-000-1234</a>

                    <h2 class = "block-contacts__heading">ONLINE SERVICE</h2>

                    <a class = "block-contacts__www" href="https://www.afrianska.com/">www.afrianska.com</a>

                    <a class="block-contacts__mail" href="mailto:hello.afrian@gmail.com">hello.afrian@gmail.com</a>                   
                </div>
            </div>

            <div class="our-contacts__right">
                <div class="ok2"></div>
                    <form id="FormConnect" method="POST" enctype="text/plain" action="mailing.php" autocomplete="on">
                        <h2 class="ContactFormHeading">SEND US MESSAGE</h2>        

                        <label for="nameFull" class = "form-label">Full Name</label>
                        <input id="nameFull" size="80" required="required" type="text" name="first_name" placeholder="Your Name*">

                        <label for="emailAddress" class = "form-label">Email</label>
                        <input id="emailAddress" size="50" required="required" type="email" placeholder="Your Email*" name="email">

                        <label for="message" class = "form-label">Message</label>
                        <textarea id="message" cols="50" rows="5" maxlength="500" placeholder="Your Message" name="message"></textarea>        
                                        
                        <div class="buttonMain"><button class="buttonSend" type="submit">SUBMIT</button></div>
                    </form>         
                <div class="note2"></div>    
            </div>
        </div>
    </section>

    <section class="map">
        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A356b25f0c768b8c74c36bbb521a63e1325917bac60aba49a57dc804d563ccbd0&amp;width=100%25&amp;height=480&amp;lang=ru_RU&amp;scroll=true"></script>
    </section>


<?php
include "footer.php"
?> 
</body>

<?php ?>