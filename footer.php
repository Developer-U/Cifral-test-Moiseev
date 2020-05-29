<?php ?>

<body>
    <footer class="footer">
        <div class="footer-top flex-center-start">        
            <div class="footer-top__description">
                <h2 class="footer-top__heading">Intersted to woek with our team?</h2>

                <p class = "footer-top__paragraph">Lorem ipsum dolor sit amet,
                    consectetur adipisicing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam.
                </p>
            </div>

            <button class="our-clients__button" type="submit">Let’s Talk</button>       
        </div>

        <div class="footer-bottom flex-start">
            <address class = "footer-bottom__addresses">
                <div class="footer-logo-contain flex-center-start">
                    <a class="footer-bottom__logo">
                        <img src="img/logo-footer.svg" alt="Логотип A  в футере">
                    </a>

                    <p class="footer-bottom__name">Afrianska</p>
                </div>

                <p class="footer-bottom__address">Lorem ipsum dolor sit amet,
                    consectetur adipisicing elit.</p>

                <a class = "footer-bottom__phone" href="tel:+76281273134321">+62-812-7313-4321</a>

                <a class="footer-bottom__mail" href="mailto:hello.afrian@gmail.com">hello.afrian@gmail.com</a>
            </address>

            <nav class="footer-nav">
                <h3 class="footer-nav__heading">About US</h3>

                <ul class = "footer-nav__list list-reset">
                    <li class="footer-nav__item">                           
                        <a href="about.php" class="footer-nav__link">About</a>
                    </li>

                    <li class="footer-nav__item">                           
                        <a href="#" class="footer-nav__link">What We Do</a>
                    </li>

                    <li class="footer-nav__item">                           
                        <a href="#" class="footer-nav__link">Project</a>
                    </li> 
                    
                    <li class="footer-nav__item">                           
                        <a href="#" class="footer-nav__link">How It Work With Us</a>
                    </li>
                </ul>            
            </nav>

            <div class="footer-social">
                <h3 class="footer-nav__heading">Follow US</h3>

                <ul class = "footer-nav__list list-reset">
                    <li class="footer-nav__item">                           
                        <a href="#" class="footer-nav__link">Instagram</a>
                    </li>

                    <li class="footer-nav__item">                           
                        <a href="#" class="footer-nav__link">Facebook</a>
                    </li>

                    <li class="footer-nav__item">                           
                        <a href="#" class="footer-nav__link">LinkedIn</a>
                    </li> 
                    
                    <li class="footer-nav__item">                           
                        <a href="#" class="footer-nav__link">Youtube</a>
                    </li>
                </ul>            
            </div>
        </div> 

        <div class="footer-copyright">
            <p class="copyright">2019 © Afrianska. All rights reserved.</p>        
        </div>
    </footer>

    <div class="ContactFormPopup noteConnect" > 
        <a href="#" class="ContactFormClose">
            <span></span>
            <span></span>
        </a>     
        
        <div class="ok"></div>
            <form id="FormPopupConnect" method="POST" enctype="text/plain" action="mailing.php" autocomplete="on">
                <h2 class="ContactFormHeading">SEND US MESSAGE</h2>        

                <label for="nameFull"><p class = "form-label">Full Name</p></label>
                <input id="nameFull" size="80" required="required" type="text" name="first_name" placeholder="Your Name*">

                <label for="emailAddress"><p class = "form-label">Email</p></label>
                <input id="emailAddress" size="50" required="required" type="email" placeholder="Your Email*" name="email">

                <label for="message"><p class = "form-label">Message</p></label>
                <textarea id="message" cols="50" rows="5" maxlength="500" placeholder="Your Message" name="message"></textarea>        
                                
                <div class="buttonMain"><button class="buttonSend" type="submit">SUBMIT</button></div>
            </form>         
        <div class="note"></div>        
    </div>

<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/main.js"></script>   

</body>

<?php ?>