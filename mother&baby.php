<?php
session_start();

require_once('./db/dbhelper.php');

$sql = "select * from product where title ='Mother and Baby Insurance'";

$data = executeResult($sql, true);
$product_id = $data['id'];
$sql = "select * from content_title where product_id = '$product_id'";
$content_title = executeResult($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insurance For Mother And Baby</title>
    <link rel="stylesheet" href="asstes/css/style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
    <link rel="stylesheet" href="./asstes/css/container.css">

</head>
<body>
<div class="wrapper">
    <header>
        <div class="inner__header container ">
            <img src="asstes/img/dai-ichi-life-logo.png" alt="" class="header__img">
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

<div class="containers" id="banner" style="margin-top: 10px;">
    <img src="asstes/img/mevabe.png" alt="">
</div>

<main>

    <div class="family__border containers">
        <div class="family__header container">
            <h2>Mother and Baby Insurance</h2>
            
            <div class="mother__header">
                <div class="mother__title">
                    
                    <?php
                        foreach ($content_title as $index => $title) {
                            echo $title['content'];
                            echo '<br>';
                         }
                     ?>
                </div>
            </div>

            
        <div class="family__main containers">
            <div class="family__main--title">
                <h3>DETAILED INSURANCE PACKAGE 2 MOTHER AND CHILDREN 20 MILLION/YEAR</h3>
            </div>

            <div class="family__main--titles" style="margin-top: 15px;">
                <h3>DETAILS OF PROTECTION RIGHTS</h3>
            </div>

            <div class="family__titles">
                <span class="span__family-01" >US INSURANCE PRODUCTS</span>
                <span class="span__family-02" style="margin-left: 353px;"> PROTECTION RIGHTS</span>
            </div>

            <div class="family__main--titles">
                <span class="span__family-01">I. BENEFITS OF DEATH</span>
            </div>

            <div class="family__titles">
                <span class="span__family-01">Death/incapability to work completely not due to accident</span>
                <span class="span__family-02" style="margin-left: 175px;"> 1 billion (insurance face value)</span>
            </div>

            <div class="family__main--titles">
                <span class="span__family-01">Accidental death (living or traffic...) (5 - 65 years old)</span>
                <span class="span__family-02"  style="margin-left: 201px;">120% of face value + Accident insurance = 1.4 billion VND</span>
            </div>

            <div class="family__titles">
                <span class="span__family-01">Death from a special accident (5 - 65 years old)</span>
                <span class="span__family-02" style="margin-left: 245px;"> 150% face value + Accident insurance x2 = 1.9 billion VND</span>
            </div>

            <div class="family__main--titles">
                <span class="span__family-01">Death from cancer (5 - 65 years old))</span>
                <span class="span__family-02"  style="margin-left: 315px;">120% of par value = 1.2 billion VND</span>
            </div>

            <div class="family__titles">
                <span class="span__family-01">II . ADVANCED COMPREHENSIVE ACCIDENT INSURANCE</span>
            </div>

            <div class="family__main--titles" style="padding: 25px; display: flex;">
                <span class="span__family-01" style="width: 30%;">Temporary disability benefits</span>
                <span class="span__family-02"  style="margin-left: 417px;">Cash compensation according to the 
                    percentage of injury
                    Example: Fracture of femur 6% of KH is compensated:
                    6%*200 million = 12 million VND</span>
            </div>
            <div class="family__titles">
                <span class="span__family-01">III. COMPREHENSIVE PREMIUM Poverty INSURANCE</span>
            </div>
            <div class="family__main--titles">
                <span class="span__family-01">Serious illness with mild form</span>
                <span class="span__family-02"  style="margin-left: 354px;">50% of the insurance amount = 100 million VND</span>
            </div>
            <div class="family__titles">
                <span class="span__family-01">Serious illness</span>
                <span class="span__family-02" style="margin-left: 460px;"> 100% insurance amount = 200 million VND</span>
            </div>
            <div class="family__main--titles">
                <span class="span__family-01">IV. Health care benefits</span>
            </div>
            <div class="family__titles" style="display: flex;">
                <span class="span__family-01" style="width: 56%;">Benefits to pay medical expenses</span>
                <span class="span__family-02" style="margin-left: 305px; width: 100%;"> 2 Premium Daiichi life Care cards for families:
                    - 100% guarantee of hospital expenses
                    - Pay 100% of the cost of all hospitals from the district level upwards
                    - Hospitalization fund for each patient 1 BILLION/DISICTION
                    - Unlimited number of diseases</span>
            </div>
        </div>

        <div class="containers footer__baby-img">
            <img src="asstes/img/footer.png" alt="" style="width: 900px;">
        </div>

        <div class="footer__story--border containers">
            <div class="border__footer--child">
                <h2>Hotline: 0339202500</h2>
                <p>24/7 consultation - 21 day free trial</p>
            </div>
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