<?php
    require_once('./db/dbhelper.php');
    $sql = "select * from product";

    $data = executeResult($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Packages</title>
    <link rel="stylesheet" href="asstes/css/style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.js"></script>

</head>
<body>
<div class="wrapper">
<header>
        <div class="inner__header container ">
            <a href="index.php"><img src="asstes/img/dai-ichi-life-logo.png" alt="" class="header__img"></a>
            <div>
                <ul id="main-menu">
                    <li class="menu__item"><a href="index.php" class="menu__link">Home</a></li>
                    <li class="menu__item"><a href="introduce.php" class="menu__link">Introduce</a></li>
                    <li class="menu__item">
                        <a href="packages.php" class="menu__link">Product Packages</a>
                        <div class="menu__child">
                            <ul class="footer__menu">

                                <li class="menu__child--item">
                                    <a href="famyli.php" class="menu__link--child">Insurance For The Whole Family</a>
                                </li>
                                <li class="menu__child--item">
                                    <a href="mother&baby.php" class="menu__link--child">Insurance For Mother And Baby</a>
                                </li>
                                <li class="menu__child--item">
                                    <a href="baby.php" class="menu__link--child">Health Care Insurancey</a>
                                </li>
                                
                                
                            </ul>
                        </div>
                    </li>
                    <li class="menu__item"><a href="customer.php" class="menu__link">Customer service</a></li>
                    <li class="menu__item"><a href="story.php" class="menu__link">Insurance Story</a></li>
                    <li class="menu__item"><a href="contact.php" class="menu__link">Contact</a></li>
                </ul> 
            </div>
       </div>

    
</header>



    
<main>
    <div class="container" id="banner">
        <img src="asstes/img/pakage.jpg" alt="" height="780px">
    </div>
    
    <div class="packages">
        <div class="packages__header container">
            <h2>Dai-ichi Life Insurance Packages</h2>
            <p>“Global Health Care Insurance” is an additional insurance product 
                included with the main product with reasonable fees and superior 
                benefits, helping to pay for medical expenses, protecting customers 
                at all times. and everywhere on the journey of life. The new product 
                includes the main benefit, the Inpatient Benefit and 2 optional benefits, 
                the Outpatient Benefit and the Dental Care Benefit. The biggest advantages 
                of the product can be mentioned as: Premium global health protection, 
                 benefits up to 1 billion VND for each illness/injury, Health care for 
                 the whole family on the same contract VND, Vietnam and international hospital 
                fee guarantee system, Long-term protection up to 75 years old.</p>
        </div>

        <div class="packages__main container">
            <?php
                foreach ($data as $index => $product) {
                    echo '<div class="packages__main--01">
                            <div class="packages__main--img">
                                <a href="'.$product['slug'].'"><img src="'.$product['thumbnail'].'" alt="" class="img__packages"></a>
                            </div>
                            <div class="packages__main--title">
                                <a href="'.$product['slug'].'"><h3>'.$product['title'].'</h3></a>
                                <p>'.$product['description'].'</p>
                            </div>
                            <div class="packages__button">
                                <a href="'.$product['slug'].'"><button class="btn__success">See details</button></a>
                            </div>
                        </div>';
                }
            ?>
        </div>
    </div>
</main>

<footer class="footers">
    <section class="footer">
        <div class="footer__contact">
           <div class="footer__header">
                <div class="footer__title">
                    <h1 class="">CONTACT</h1>
                </div>
                <div class="footer__contact">
                    <i class="uil uil-map-marker contact__icon"></i>
                    <span>285 Đội Cấn - Ba Đình -Hà Nội.</span>
                </div>

                <div class="footer__contacts">
                    <i class="uil uil-phone contact__icon"></i>
                    <span>0339202500</span>
                </div>

                <div class="footer__email">
                    <i class="uil uil-envelope-alt contact__icon"></i>
                    <a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox">viet04092002@gmail.com</a>
                </div>

                <div class="footer__support">
                    <i class="uil uil-hipchat contact__icon"></i>
                    <a href="index.php">Free Consultation 24/7</a>
                </div>
                
                <div class="footer__responsibility">
                    <i class="uil uil-hipchat contact__icon"></i>
                    <a href="index.php">Responsibility - Dedication - Professionalism</a>
                </div>
           </div>
        </div>

        <div class="footer__consultaion">
            <h1>FREE CONSULTATION</h1>
            <form action="" method="post" class="footer__form">
                <div class="contact__footer--phone">
                    <span class="span__icon"><i class="uil uil-user contact__icon"></i></span>
                    <input type="text" class="contact__footer--phoneNo" placeholder="Full Name" required>
                </div>
                 
                <div class="contact__footer--phone">
                    <i class="uil uil-phone contact__icon"></i>
                    <input type="text" class="contact__footer--phoneNo" placeholder="Phone number" required>
                </div>

                <div>
                    <button class="btn__success">
                        Sign Up Now
                    </button>
                </div>
                
            </form>
        </div>

        <div class="footer__categories">
            <h1>CATEGORIES</h1>
            <ul class="footer__categories--menu">
                <li class="footer__categories--item">
                    <a href="index.php" class="footer__categories--link">Home</a>
                </li>
                <li class="footer__categories--item">
                    <a href="introduce.php" class="footer__categories--link">Introduce</a>
                </li>
                <li class="footer__categories--item">
                    <a href="packages.php" class="footer__categories--link">Product Packages</a>
                </li>
                <li class="footer__categories--item">
                    <a href="customer.php" class="footer__categories--link">Customer service</a>
                </li>
                <li class="footer__categories--item">
                    <a href="story.php" class="footer__categories--link">Insurance Story</a>
                </li>
                <li class="footer__categories--item">
                    <a href="contact.php" class="footer__categories--link">Contact</a>
                </li>
            </ul>
        </div>
    </section>
</footer>



</div>  

<script src="asstes/js/main.js"></script>


</body>
</html>