<html>
    <head>
    <style>
    /* FOOTER */
    
    .footer {
        margin-top: 250px;
        position: relative;
        width: 100%;
        background: #006d77;
        display: block;
        left: 0;
        bottom: 0;
    }
    
    .footer-bottom {
        padding: 1px;
        background: #006d77;
        color: #fff;
        font-size: 12px;
        text-align: center;
    }
    .inner-footer {
        width: 100%;
        padding: 30px 10px;
        display: flex;
        flex-wrap: wrap;
        box-sizing: border-box;
        justify-content: center;
    }
    
    .footer-items {
        width: 25%;
        padding: 10px 20px;
        box-sizing: border-box;
        color: #fff;
    }
    
    .footer-items p {
        font-size: 30px;
        text-align: justify;
        line-height: 25px;
        color: #e9c46a;
    }
    
    .footer-items h1 {
        color: #fff;
    }
    
    .border1 {
        height: 3px;
        width: 80px;
        background: #e9c46a;
        color: #e9c46a;
        background-color: #e9c46a;
        border: 0px;
    }
    
    ul {
        list-style: none;
        color: #fff;
        font-size: 15px;
        letter-spacing: 0.5px;
    }
    
    ul a {
        text-decoration: none;
        outline: none;
        color: #fff;
        transition: 0.3s;
    }
    
    ul a:hover {
        color: #e9c46a;
    }
    
    ul li {
        margin: 10px 0;
        height: 25px;
    }
    
    li i {
        margin-right: 20px;
    }
    
    .social-media {
        width: 100%;
        color: #fff;
        text-align: center;
        font-size: 20px;
    }
    
    .social-media a {
        text-decoration: none;
    }
    
    .social-media i {
        height: 25px;
        width: 25px;
        margin: 20px 10px;
        padding: 4px;
        color: #fff;
        transition: 0.5s;
    }
    
    .social-media i:hover {
        transform: scale(1.5);
    }
    
    
 
    /* for tablet mode view */
    
    @media screen and (max-width: 1275px) {
        .footer-items {
            width: 50%;
        }
    }
    /* for mobile screen view */
    
    @media screen and (max-width: 660px) {
        .footer-items {
            width: 100%;
        }
    }

    </style>
    </head>
    <body>
</body>
    
    <footer>
        <div class="footer">
            <div class="inner-footer">

                <!--  for company name and description -->
                <div class="footer-items">
                    <h1>MobHub</h1>
                    <p>Meet the future today.
                    </p>
                </div>

                <!--  for quick links  -->
                <div class="footer-items">
                    <h3>Quick Links</h3>
                    <div class="border1"></div>
                    <!--for the underline -->
                    <ul>
                        <a href="/crud11/index.php">
                            <li>Home</li>
                        </a>
                        <a href="/crud11/login/custsignup.php">
                            <li>Login</li>
                        </a>
                        <a href="/crud11/login/login.php">
                            <li>Sign up</li>
                        </a>
                        <a href="/crud11/products/product.php">
                            <li>Phones</li>
                        </a>
                    </ul>
                </div>



                <!--  for contact us info -->
                <div class="footer-items">
                    <h3>Contact us</h3>
                    <div class="border1"></div>
                    <ul>
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>221b baker st.</li>
                        <li><i class="fa fa-phone" aria-hidden="true"></i>+20 12345678</li>
                        <li><i class="fa fa-envelope" aria-hidden="true"></i>MobHub@gmail.com</li>
                    </ul>

                    <!--   for social links -->
                    <div class="social-media">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-google-plus-square"></i></a>
                    </div>
                </div>
            </div>

            <!--   Footer Bottom start  -->
            <div class="footer-bottom">

                &copy;Copyright 2019 - 2021 MobHub store. All Rights Reserved
            </div>
        </div>
    </footer>
    <?php include 'script.php';  ?>

</html>