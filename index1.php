<?php
//// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();
?>
<!DOCTYPE html>
<html lang="fr" xmlns="http://www.w3.org/1999/html">
<head>
    <audio autoplay src="../web/video/happy1.mp3"></audio>
    <title>Aux champs elysées </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!---------------------------------------------------------------------------------------------------------------------------------->
    <!---------------------------------------------------------------------------------------------------------------------------------->
    <link rel="stylesheet" type="text/css" href="web/css/styleC.css" />
    <script type="text/javascript" language="javascript" src="web/js/jqueryC.js"></script>
    <script type="text/javascript" language="javascript" src="web/js/scriptC.js"></script>
    <!---------------------------------------------------------------------------------------------------------------------------------->

    <!-----RECAPTCHA---------------------->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!--------------------------------->
    <script src="web/js/popup.js"></script>
    <link href="web/css/store.css" rel="stylesheet" type="text/css" media="all">
    <link href="web/css/popup.css" rel="stylesheet" type="text/css" media="all" />
    <link href='//fonts.googleapis.com/css?family=Signika:400,300,600,700' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="web/js/jquery-1.11.1.min.js"></script>
    <script>$(document).ready(function(c) {
            $('.alert-close').on('click', function(c){
                $('.message').fadeOut('slow', function(c){
                    $('.message').remove();
                });
            });
        });
    </script>
    <script>$(document).ready(function(c) {
            $('.alert-close1').on('click', function(c){
                $('.message1').fadeOut('slow', function(c){
                    $('.message1').remove();
                });
            });
        });
    </script>
    <script>$(document).ready(function(c) {
            $('.alert-close2').on('click', function(c){
                $('.message2').fadeOut('slow', function(c){
                    $('.message2').remove();
                });
            });
        });
    </script>
    <script>

        $ = function(id) {
            return document.getElementById(id);
        }

        var show = function(id) {
            $(id).style.display ='block';
        }
        var hide = function(id) {
            $(id).style.display ='none';
        }
    </script>
    <link href="web/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /> <!-- Bootstrap-Core-CSS -->
    <link href="web/css/style.css" rel="stylesheet" type="text/css" media="all" /> <!-- Style-CSS -->
    <link rel="stylesheet" href="web/css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
    <link rel="stylesheet" href="web/css/popups.css">
    <link rel="stylesheet" href="web/css/flexslider.css" type="text/css" media="screen" property="" /> <!-- Flexslider-CSS -->
    <link rel="stylesheet" href="web/css/team.css" type="text/css" media="screen" property="" /> <!-- Team-CSS -->
    <!-- <link rel="stylesheet" href="css/smoothbox.css" type='text/css' media="all" /> <!-- Smoothbox-CSS -->
    <link href="web/css/wickedpicker.css" rel="stylesheet" type='text/css' media="all" /> <!-- Time-script-CSS -->
    <link href="//fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Oleo+Script:400,700&amp;subset=latin-ext" rel="stylesheet">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="web/css/stylecard.css" rel='stylesheet' type='text/css' />
    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="web/js/js.min.js"></script>
    <script type="text/javascript" src="web/js/addtocart.js"></script>
    <script>$(document).ready(function(c) {
            $('.alert-close').on('click', function(c){
                $('.message').fadeOut('slow', function(c){
                    $('.message').remove();
                });
            });
        });
    </script>
    <script>$(document).ready(function(c) {
            $('.alert-close1').on('click', function(c){
                $('.message1').fadeOut('slow', function(c){
                    $('.message1').remove();
                });
            });
        });
    </script>
    <script>$(document).ready(function(c) {
            $('.alert-close2').on('click', function(c){
                $('.message2').fadeOut('slow', function(c){
                    $('.message2').remove();
                });
            });
        });
    </script>
    <script>

        function  ret()
        {
            location.href="#popup1";

        }

    </script>
</head>

<body>
<!--main-->
<!-- banner -->
<div class="mykhedmat">

    <div class="logo">
        <h1>
            <a href="index1.php">Aux Champs<span>Elysées</span>
            </a>
        </h1>
    </div>
    <div class="ns-TabNav" >
        <a href="index1.php" class="ns-TabNav_Link" ><span>Home</span></a>
        <?php

                if (!isset($_SESSION['email']) && !isset($_SESSION['password'])) {

        ?>
        <a href="#myModal2" data-toggle="modal" class="ns-TabNav_Link"  ><span>S'identifie</span></a>
        <a href="#myModal3" data-toggle="modal" class="ns-TabNav_Link"  ><span>Registre</span></a>
        <a href="views/store.php" class="ns-TabNav_Link"><span>Commande</span></a>
                    <?php
                }
                else
                {

                   ?>

                    <a href="views/logout.php" class="ns-TabNav_Link"><span>Deconnecter</span></a>
                    <a href="views/myAccount.php?id=<?php echo $_SESSION['id'];?>" data-toggle="modal" class="ns-TabNav_Link"><span>my profile</span></a>
                    <a href="views/store.php" class="ns-TabNav_Link"><span>Commander</span></a>
                    <a href="views/afiiche.php" class="ns-TabNav_Link"><span>Culture</span></a>


                    <?php
                }
                ?>

    </div>


    <div class="mobile-nav-button">
        <div class="mobile-nav-button__line"></div>
        <div class="mobile-nav-button__line"></div>
        <div class="mobile-nav-button__line"></div>
    </div>
</div>
<nav class="mobile-menu">
    <ul>
        <li class="active"><a href="index1.php">Reservation</a></li>
        <li class="active"><a  href="views/store.php" >Commande</a></li>
        <li class="active"><a  href="views/afiiche.php" >Culture</a></li>
        <li><a href="#services" class="scroll">Menu</a></li>
        <li class="active"><a href="views/salut.php" >Reclamation</a></li>
    </ul>
</nav>
<!-- banner -->
<div data-vide-bg="web/video/food">
    <div class="center-container">
        <div class="banner wthree">
            <div class="container">
                <div class="banner_top">
                </div>
                <div class="clearfix"> </div>
            </div>


                <!--Slider-->
                <div class="col-md-7 callbacks_container">
                    <ul class="rslides" id="slider3">
                        <li>
                            <div class="slider-info">
                                <h3>Bienvenue au Restaurant</h3>
                                <p>Cadre superbe avec ameublement contemporain , cuisine raffinée et fraiche </p>
                            </div>
                        </li>
                        <li>
                            <div class="slider-info">
                                <h3>Endroit avec une vue imprenable </h3>
                                <p>Restaurant bistronomique très raffiné pour les amateurs de la cuisine française .</p>
                            </div>
                        </li>
                        <li>
                            <div class="slider-info">
                                <h3>Restaurant bistronomique français</h3>
                                <p>des produits frais et locaux</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- //Slider -->
                <!-- form -->
            <!--------------------------------RESERVATION-------------------------------------------------->
            <div class="col-md-5 callbacks_container form-w3l-agil3">
                <?php

//                    if (isset($_SESSION['email']) && isset($_SESSION['password'])) {

                    ?>

                <div class="book-form">
                    <center>
                    <p>Reservation</p></center>
                    <form action="views/reservation.php" method="post">
                        <div id="popup1" class="overlay">
                            <div  class="popd">
                                <a class="close" href="#">&times;</a>
                                <div class="content">

                                    <div class="tables">
                                        <?php
                                        include "core/employeC.php";
                                        $ec = new EmployeC();
                                        $liste = $ec->afficher_table() ;
                                        foreach ($liste as $value) {

                                            ?>

                                            <div class="conto">
                                                <center><img src="web/images/table.png"></center>
                                                <table >
                                                    <tr><td colspan="2"><hr></td> </tr>
                                                    <tr><td align="center"> <input type="text" value="N°<?php echo $value['num'] ?>" style="text-align: center"></label> </td><td align ="center"><input type="text" style="text-align: center" value="<?php echo $value['nbrep'] ?>Pers"></label></td></tr>
                                                    <tr><td ><hr id="val" width="30%" style="background:<?php echo $value['etat'] ?>" ></td><td> <button type="submit" style="text-transform: capitalize;background: #eb422a;color: #FFFFFF;border: none;" name="book" value="<?php echo $value['num'] ?>" >Book a table</button></td> </tr>

                                                </table>
                                            </div>
                                        <?php } ?>

                                    </div>


                                </div>
                            </div>
                        </div>

                        <div class="form-date-w3-agileits">
                            <br><br>
                            <label><i class="fa fa-calendar" aria-hidden="true"></i> date :</label>

                            <input type="date" name="dates">
                        </div>
                        <div class="form-left-agileits-w3layouts">
                            <br><br>
                            <label><i class="fa fa-clock-o" aria-hidden="true"></i>temps :</label>

                            <input type="time" name="times">
                        </div>

                        <div class="form-left-agileits-w3layouts ">
                            <br><br>
                            <label><i class="fa fa-users" aria-hidden="true"></i> No.des personnes :</label>

                            <select name="nber" class="form-control">
                                <option value="1">1 Person</option>
                                <option  value="2">2 Person</option>
                                <option  value="3">3 Person</option>
                                <option  value="4">4 Person</option>
                                <option  value="5">5 Person</option>
                                <option  value="6">Plus</option>
                            </select>
                        </div>
                        <label><i class="fa fa-check-square" aria-hidden="true"></i> choisir votre table :</label>

                        <br><br><br><br><br>
                       <center> <input type="checkbox"  class="checkbox" onclick="ret()"></center>
                        <div class="form-left-agileits-submit">

                        </div>
                    </form>
                </div>

<!--                    --><?php

//                }else{
//                        include "core/employeC.php";
//
//                    }

                ?>
            </div>
            <!--------------------------------RESERVATION-------------------------------------------------->

            <div class="clearfix"> </div>
                <!-- //form -->
            </div>
        </div>
        <!-- ____________________LOGIN page__________________ -->
        <!-- modal -->
        <div class="modal about-modal w3-agileits fade" id="myModal2" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                        <div class="modal-body login-page ">
                             <div class="login-top sign-top">
                                 <div class="agileits-login">
                                     <h5>s'identifier ici</h5>
                                <!--formulaire login page -->
                                     <form action="views/login.php" method="post">

                                         <input type="email" class="email" name="email" placeholder="email"  id="f_email"  required />
                                         <div class="form-group">
                                             <input type="password" class="password" name="password" placeholder="mot de passe" required />
                                             <a href="views/forget.php">(j'ai oublie mon mot de passe)</a>
                                         </div>
                                         <div class="wthree-text">
                                            <ul>
                                                <li>
                                                     <label class="anim">
                                                    <input type="checkbox" class="checkbox" name="rememberme" value="rememberme">
                                                    <span> Souvenir de moi?</span>

                                                </label>
                                            </li>
                                        </ul>
                                        <div class="clearfix"> </div>
                                    </div>

                                    <div class="w3ls-submit">
                                        <input type="submit" value="s'identifier" onclick="checkuser();">
                                        <br>

                                    </div>
                                         <script type="text/javascript">
                                             function checkuser() {
                                                 var str = document.getElementById("f_email").value;
                                                 $.ajax({
                                                     url : "views/Usercheck.php" ,
                                                     type : 'get' ,
                                                     data: "str=" + str ,
                                                     success : function (data) {
                                                         console.log(data) ;
                                                         if (data == "1") {
                                                             alert("mail or password not valid ! try again Please ") ;
                                                         }
                                                     }
                                                 })
                                             }
                                         </script>
                                </form>
                                     <div class="w3ls-submit">
                                         <?php require_once('/Users/macbook/Desktop/untitled1/9-1/settings.php');
                                         ?>

                                         <a href="<?= 'https://accounts.google.com/o/oauth2/auth?scope=' . urlencode('https://www.googleapis.com/auth/userinfo.profile https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/plus.me') . '&redirect_uri=' . urlencode(CLIENT_REDIRECT_URL) . '&response_type=code&client_id=' . CLIENT_ID . '&access_type=online' ?>">Login with Google</a>

                                     </div>
                            </div>
                        </div>
                    </div>
                </div>
<!--                --><?php

//
//                if ( ISSET($_POST["bttlogin"]))
//                {
//                    echo '<script> alert("yay") </script>';
//                }
//
//
//                ?>
            </div>
        </div>

        <!-- //modal -->
        <!------------------------------------------- REGISTER---------------------------------------->
        <div class="modal about-modal w3-agileits fade" id="myModal3" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                         <div class="modal-body login-page ">
                            <div class="login-top sign-top">
                                <div class="agileits-login">
                                     <h5>registrer ici</h5>

                                        <form id=registration_form action="views/register.php" method="post">

                                            <tr><td>pseudo: </td><td><input name="nom" type="text" class="form_text" id="form_username"></td><td><span class="error_form" id="username_error_message"></span></td></tr>
                                            <br>
                                            <tr><td>sexe: </td><td> <select class="form-control" name="gender" required>
                                                                 <option>femmme</option>
                                                                <option>male</option>
                                                    </select>
                                                </td></tr>
                                            <br>
                                            <tr><td>Email: </td><td><input type="text" name="email" class="form_text" id="form_email" onkeyup="checkmail();"></td><td><span class="error_form" id="email_error_message"></span></td></tr>
                                            <br>
                                            <tr><td>adresse: </td><td><input name="adresse" type="text" required></td></tr>
                                            <br>
                                            <tr><td>Favoris: </td><td><input name="favoris" type="text" required></td></tr>
                                            <br>
                                            <tr><td>Telephone: </td><td><input name="telephone" type="text" class="form_text" id="form_telephone"></td><td><span class="error_form" id="telephone_error_message"></span></td></tr>

                                            <br>
                                            <tr><td>Mot de passe: </td><td><input type="password" name="password" class="form_text" id="form_password"></td><td><span class="error_form" id="password_error_message"></span></td></tr>
                                            <br>
                                            <tr><td>Confirmer mot de passe: </td><td><input type="password" class="form_text" id="form_retype_password"></td><td><span class="error_form" id="retype_password_error_message"></span></td></tr>
                                            <br>
                                            <tr><td> Ajouter votre photo<br/>
                                                    <input type="file" name="photo"><br/><br/></td></tr>
                                            <br>
                                            <script type="text/javascript">
                                                function checkmail() {
                                                    var str = document.getElementById("form_email").value;
                                                    $.ajax({
                                                        url : "views/mailcheck.php" ,
                                                        type : 'get' ,
                                                        data : "str=" + str ,
                                                        success : function (data) {
                                                            console.log(data) ;
                                                            if (data == "1") {
                                                                alert("mail exist already ") ;
                                                            }
                                                        }
                                                    })
                                                }
                                            </script>

                                            <div class="wthree-text">
                                                <ul>
                                                    <li>
                                                        <label class="anim">
                                                            <input type="checkbox" class="checkbox"  required>
                                                            <span> J'accepte les conditions d'utilisation</span>
                                                        </label>
                                                    </li>
                                                </ul>
                                                <div class="clearfix"> </div>
                                            </div>


                                            <br>
                                            <center>
                                                <tr><td></td><td><input type="submit" class="sbmt_btn" value="Create Account"  ></td><td></td></tr>
                                            </center>

                                    </form>
                                    <center>

                                    <form  method="POST" action="views/recaptcha.php" >
                                        <br/><br/><br/>
                                        <div class="g-recaptcha" data-sitekey="6LfbdU0UAAAAAJFBNNDeBEpwWUC_2pxEWU2TPDri" ></div><br/>
                                        <br/>
                                    </form>
                                    </center>
                                </div>
                             </div>
                          </div>
                     </div>
                  </div>
             </div>
          </div>
<!-- //banner -->
<!-- grids -->
<div class="about-agile">
    <div class="col-md-6 about-grids-w3l">
        <div class="about-first-w3">
            <div class="col-md-4 col-sm-4 col-xs-4 welcome-img">
                <img src="web/images/f1.jpg" class="img-responsive zoom-img" alt=""/>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4 welcome-img">
                <img src="web/images/f2.jpg" class="img-responsive zoom-img" alt=""/>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4 welcome-img">
                <img src="web/images/f3.jpg" class="img-responsive zoom-img" alt=""/>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="about-first-w3">
            <div class="col-md-4 col-sm-4 col-xs-4 welcome-img">
                <img src="web/images/f4.jpg" class="img-responsive zoom-img" alt=""/>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4 welcome-img">
                <img src="web/images/f5.jpg" class="img-responsive zoom-img" alt=""/>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4 welcome-img">
                <img src="web/images/f6.jpg" class="img-responsive zoom-img" alt=""/>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="about-agile">
        <div class="col-md-6 about-grids-w3l">
            <div class="about-first-w3">
                <div class="col-md-4 col-sm-4 col-xs-4 welcome-img">
                    <img src="web/images/f7.jpg" class="img-responsive zoom-img" alt=""/>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4 welcome-img">
                    <img src="web/images/f8.jpg" class="img-responsive zoom-img" alt=""/>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4 welcome-img">
                    <img src="web/images/f9.jpg" class="img-responsive zoom-img" alt=""/>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="about-first-w3">
                <div class="col-md-4 col-sm-4 col-xs-4 welcome-img">
                    <img src="web/images/f10.jpg" class="img-responsive zoom-img" alt=""/>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4 welcome-img">
                    <img src="web/images/f11.jpg" class="img-responsive zoom-img" alt=""/>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4 welcome-img">
                    <img src="web/images/f12.jpg" class="img-responsive zoom-img" alt=""/>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    <div class="clearfix"> </div>
</div>
<!-- //grids -->
<!--------------------------------------------------------EVENTS----------------------------------------->
<div class="agile-heading">
    <h3 class="w3l-title">Nos evenements</h3>
</div>
<div class="wthree-services-grids">

    <div class="wthree-services-grid">
        <div class="wthree-services-info">
            <i class="fa fa-cutlery" aria-hidden="true"></i>
            <?php
            $ec = new eventsC() ;
            $listevent = $ec->display();
            foreach ($listevent as $key =>$value ) {
                echo '<tr>';
                echo  '<h4>'. $value['eventname'] .'</h4>';
                echo '</tr>';
            }
            ?>
            <div class="w3ls-border"> </div>
        </div>
        <div class="wthree-services-captn">
            <h4>OFFRE</h4>
            <p>vous beneficiez de 20 points cadeaux dans vos cartes de fidelite   si vous prenez avec vous vos codebar  et nous visitez a chaque evenements public!!</p>
            <script type="text/javascript">var switchTo5x=true;</script>
            <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
            <script type="text/javascript">stLight.options({publisher: "ef8d1f47-6408-4556-ab6c-9e221d6dd140", doNotHash: false, doNotCopy: false, hashAddressBar: true});</script>
            <span class='st_facebook' displayText='Facebook'></span>
            <span class='st_twitter' displayText='Tweet'></span>
            <span class='st_googleplus' displayText='Google +'></span>
            <span class='st_email' displayText='Email'></span>
            <span class='st_' displayText=''></span>
        </div>
    </div>
</div>
<div class="wthree-services-grids services-grids1">
    <div class="clearfix"> </div>
</div>

</div>
<div class="services" id="services">
    <h3 class="w3l-title">NOTRE MENU</h3>
    <div >
        <?php
        echo '<nav>
            <ul class="nav nav-pills">';

        $db = config::getConnexion();
        $statement = $db->query('SELECT * FROM categories');
        $categories = $statement->fetchAll();
        foreach ($categories as $category)
        {
            if($category['id_c'] == '1')
                echo '<li role="presentation" class="btn-primary"><a href="#'. $category['id_c'] . '" data-toggle="tab">' . $category['name'] . '</a></li>';
            else
                echo '<li role="presentation"><a href="#'. $category['id_c'] . '" data-toggle="tab">' . $category['name'] . '</a></li>';
        }

        echo    '</ul>
                                                  </nav>';

        echo '<div class="tab-content">';

        foreach ($categories as $category)
        {
            if($category['id_c'] == '1')
                echo '<div class="tab-pane active" id="' . $category['id_c'] .'">';
            else
                echo '<div class="tab-pane" id="' . $category['id_c'] .'">';

            echo '<div class="row">';

            $statement = $db->prepare('SELECT * FROM items WHERE items.category = ?');
            $statement->execute(array($category['id_c']));

            while ($item = $statement->fetch())
            {
                $statement1=$db->prepare("SELECT price_promotion FROM items,promotions WHERE promotions.id_pro=?");
                $statement1->execute(array($item['id']));
                $count=$statement1->rowCount();



                echo '<div class="col-sm-6 col-md-4">
                                                            <div class="thumbnail">
                                                                <img src=" web/images/' . $item['image'] . '" alt="...">';

                if($count==0)
                {
                    echo'<p>';
                    echo number_format((float)$item['price'], 3, '.', ''). ' DT';
                    echo'</p>';
                }
                else
                {
                    echo'<div style="overflow:hidden">';

                    echo'<p style="text-decoration: line-through">';
                    echo number_format((float)$item['price'], 3, '.', ''). ' DT';
                    echo ' ';
                    echo'</p>';
                    echo' ';
                    echo'<p>';
                    echo'En Promotion: ';
                    echo number_format((float)$item['price_promotion'], 3, '.', ''). ' DT';
                    echo'</p>';
                    echo'</div>';
                }
                echo'
                                                                    <div class="caption">
                                                                        <h4>' . $item['name'] . '</h4>
                                                                        
                                                                        
                                                                        
                                                                        

                                                                        <p>' . $item['description'] . '</p>
                                                                       
                                                                        
                                                                    </div>
                                                            </div>
                                                        </div>';
            }

            echo    '</div>
                                                        </div>';
        }
        echo  '</div>';
        ?>
    </div>
</div>


<div class="cuisine-names">

    <div class="w3ls_cuisine_names_left">
<!--        <img src="web/images/pri.png" alt=" " class="img-responsive" />-->
    </div>

</div>
<div class="footer">
    <div class="container">
        <h3 class="w3l-title">Découvrez nos meilleurs plats français dans un cadre prestigieux et  chaleureux</h3>
        <div class="menu-w3l" id="menu">
            <br>
            <ul id="flexiselDemo1">
                <li>
                    <div class="w3layouts_banner_bottom_left">
                        <img src="web/images/restau1.jpg" alt=" " class="img-responsive" />
                        <h4> <span>Restaurant cantonnais</span></h4>
                    </div>
                </li>
                <li>
                    <div class="w3layouts_banner_bottom_left">
                        <img src="web/images/restau6.jpg" alt=" " class="img-responsive" />
                        <h4><span>Cuisine ouverte sur la salle très .</span></h4>
                    </div>
                </li>
                <li>
                    <div class="w3layouts_banner_bottom_left">
                        <img src="web/images/restau3.jpg" alt=" " class="img-responsive" />
                        <h4> <span> une très belle vue sur le lac</span></h4>
                    </div>
                </li>
                <li>
                    <div class="w3layouts_banner_bottom_left">
                        <img src="web/images/restau7.jpg" alt=" " class="img-responsive" />
                        <h4><span>Terrace</span></h4>
                    </div>
                </li>
                <li>
                    <div class="w3layouts_banner_bottom_left">
                        <img src="web/images/restaur1.png" alt=" " class="img-responsive" />
                        <h4><span></span></h4>
                    </div>
                </li>


            </ul>
        </div>
    </div>
</div>
<!--<div class="delicious_food" id="gallery">-->
<!--</div>-->
<div class="footer" id="contact">
    <div class="container">
        <div class="agile-footer-grids">
            <div class="col-md-3 col-sm-6 col-xs-6 w3-agile-footer-grid">
                <div class="logo-2">
                    <h2><a href="index1.php">Aux champs elysees<span>Restaurant</span></a></h2>
                </div>
                <ul>
                    <li>aux champs elysées centre flamingo aux berges du lac numero 1, Tunis 1059, Tunisie</li>
                    <li>Cuisine:</li>
                    <li> Française</li>
                    <li>Email:</li>
                    <li><a href="mailto:info@example.com">info@example.com</a></li>
                    <li>Phone Number:</li>
                    <li>+216 23 280 717</li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 w3-agile-footer-grid">
                <h3>JOURS D'OUVERTURE</h3>
                <div class="col-md-5 col-sm-5 col-xs-5 agile-opening">
                    <ul>
                        <li>Lundi </li>
                        <li>Mardi </li>
                        <li>Mercredi </li>
                        <li>Jeudi </li>
                        <li>Vendredi </li>
                        <li>Samedi </li>
                        <li>Dimanche </li>
                    </ul>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6 agile-opening">
                    <ul>
                        <li>8am-11pm</li>
                        <li>8am-11pm</li>
                        <li>8am-11pm</li>
                        <li>8am-11pm</li>
                        <li>8am-11pm</li>
                        <li>8am-11pm</li>
                        <li>8am-11pm</li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
                <br><br><br>

            </div>

            <div class="col-md-6 w3-agile-footer-grid grid-w3-1">
                <div class="contact-block-left">
                    <form action="#" method="post">
                        <input type="text" placeholder="Name" name="Name" required="">
                        <input type="email" class="email" placeholder="Email" name="Email" required="">
                        <textarea placeholder="Message" name="message" required=""></textarea>
                        <input type="submit" value="envoyer">
                    </form>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- copyright -->
    <center>

    <a href="https://www.instagram.com/aux_champs_elyse/" class="fa fa-instagram"></a>
    <a href="https://www.facebook.com/Restaurant-Aux-Champs-Elys%C3%A9es-1461168387484880/" class="fa fa-facebook"></a>
    <a href="#" class="fa fa-pinterest"></a>
    </center>
    <div class="copyright">
        <p>© 2018 CMD . All Rights Reserved | Design by <a href="#"> www.TeamCMD.com</a> </p>
    </div>
    <!-- //copyright -->
</div>

<script type="text/javascript" src="web/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="web/js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap -->
<!-- //js -->
<!-- responsiveslider -->
<script src="web/js/responsiveslides.min.js"></script>
<script>

    $(function () {
        // Slideshow 4
        $("#slider3").responsiveSlides({
            auto: true,
            pager:true,
            nav:false,
            speed: 500,
            namespace: "callbacks",
            before: function () {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
                $('.events').append("<li>after event fired.</li>");
            }
        });

    });
</script>
<script>
    $(document).ready(function () {
        $('.mobile-nav-button').on('click', function() {
            $( ".mobile-nav-button .mobile-nav-button__line:nth-of-type(1)" ).toggleClass( "mobile-nav-button__line--1");
            $( ".mobile-nav-button .mobile-nav-button__line:nth-of-type(2)" ).toggleClass( "mobile-nav-button__line--2");
            $( ".mobile-nav-button .mobile-nav-button__line:nth-of-type(3)" ).toggleClass( "mobile-nav-button__line--3");

            $('.mobile-menu').toggleClass('mobile-menu--open');
            return false;
        });
    });
</script>
<!-- //menu -->
<!-- flexSlider-for-grids-section -->
<script defer src="web/js/jquery.flexslider.js"></script>
<script type="text/javascript">
    $(window).load(function(){
        $('.flexslider').flexslider({
            animation: "slide",
            start: function(slider){
                $('body').removeClass('loading');
            }
        });
    });
</script>
<script type="text/javascript">
    $(window).load(function() {
        $("#flexiselDemo1").flexisel({
            visibleItems: 4,
            animationSpeed: 1000,
            autoPlay: true,
            autoPlaySpeed: 3000,
            pauseOnHover: true,
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: {
                portrait: {
                    changePoint:480,
                    visibleItems: 2
                },
                landscape: {
                    changePoint:640,
                    visibleItems:3
                },
                tablet: {
                    changePoint:768,
                    visibleItems: 4
                }
            }
        });

    });
</script>
<script type="text/javascript" src="web/js/jquery.flexisel.js"></script>
<script type="text/javascript" src="web/js/move-top.js"></script>
<script type="text/javascript" src="web/js/easing.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $().UItoTop({ easingType: 'easeOutQuart' });
    });
</script>
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //for-bottom-to-top smooth scrolling -->
<!-- Calendar -->
<link rel="stylesheet" href="web/css/jquery-ui.css" />
<script src="web/js/jquery-ui.js"></script>
<script>
    $(function() {
        $( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
    });
</script>
<script src="web/js/jquery.vide.min.js"></script>
<script type="text/javascript" src="web/js/wickedpicker.js"></script>
<script type="text/javascript">
    $('.timepicker').wickedpicker({twentyFour: false});
</script>
<!-- //Time -->

<!-- //js-scripts -->
</body>
</html>

