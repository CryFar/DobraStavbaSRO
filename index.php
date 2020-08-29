<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Rekonštrukcie domov, bytov.">
    <title>Dobrá Stavba</title>
    <link rel="stylesheet" href="Style/style.css">
    <link rel="stylesheet" href="Style/simplelightbox.css">
    <link rel="shortcut icon" href="Style/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;700&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="Scripts/simple-lightbox.js"></script>
    <script src="Scripts/menu.js"></script>
    <script>
        $(function(){
            var $gallery = $('.gallery a').simpleLightbox();
        });
    </script>
</head>
<body id="domov">
    <header>
        <div class="logo">
            <img src="Style/Logo Rectangle.svg" alt="logo">
        </div>
        <div class="contactinfo">
            Mobil: <b>+421910605977</b> E-mail: <b>davidulo123@gmail.com</b>
        </div>
        <div class="hamburger" id="menu">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <nav id="navbar">
            <a class="nav-button" href="#domov">Domov</a>
            <a class="nav-button" href="#o-nas">O Nás</a>
            <a class="nav-button" href="#ponuka">Ponuka</a>
            <a class="nav-button" href="#referencie">Referencie</a>
            <a class="nav-button" href="#kontakt">Kontakt</a>
        </nav>
    </header>
    <main>
        <div class="bcg">
            <script src="Scripts/jssor.slider-28.0.0.min.js" type="text/javascript"></script>
            <script type="text/javascript">
                window.jssor_1_slider_init = function() {
        
                    var jssor_1_options = {
                      $AutoPlay: 1,
                      $FillMode: 2,
                      $ArrowNavigatorOptions: {
                        $Class: $JssorArrowNavigator$
                      }
                    };
        
                    var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
        
                    /*#region responsive code begin*/
        
                    var MAX_WIDTH = 1200;
        
                    function ScaleSlider() {
                        var containerElement = jssor_1_slider.$Elmt.parentNode;
                        var containerWidth = containerElement.clientWidth;
        
                        if (containerWidth) {
        
                            var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);
        
                            jssor_1_slider.$ScaleWidth(expectedWidth);
                        }
                        else {
                            window.setTimeout(ScaleSlider, 30);
                        }
                    }
        
                    ScaleSlider();
        
                    $Jssor$.$AddEvent(window, "load", ScaleSlider);
                    $Jssor$.$AddEvent(window, "resize", ScaleSlider);
                    $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
                    /*#endregion responsive code end*/
                };
            </script>
            <style>
                /*jssor slider loading skin double-tail-spin css*/
                .jssorl-004-double-tail-spin img {
                    animation-name: jssorl-004-double-tail-spin;
                    animation-duration: 1.6s;
                    animation-iteration-count: infinite;
                    animation-timing-function: linear;
                }
        
                @keyframes jssorl-004-double-tail-spin {
                    from { transform: rotate(0deg); }
                    to { transform: rotate(360deg); }
                }
        
                /*jssor slider arrow skin 072 css*/
                .jssora072 {display:block;position:absolute;cursor:pointer;}
                .jssora072 .a {fill:#000;fill-opacity:.8;stroke:#fff;stroke-width:120;stroke-miterlimit:10;stroke-opacity:.5;}
                .jssora072:hover {opacity:.8;}
                .jssora072.jssora072dn {opacity:.4;}
                .jssora072.jssora072ds {opacity:.3;pointer-events:none;}
            </style>
            <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1200px;height:600px;overflow:hidden;visibility:hidden;border-radius:10px;">
                <!-- Loading Screen -->
                <div data-u="loading" class="jssorl-004-double-tail-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                    <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="Images/double-tail-spin.svg" />
                </div>
                <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1200px;height:600px;overflow:hidden;">
                    <div>
                        <img data-u="image" src="Images/img1.png" />
                    </div>
                    <div>
                        <img data-u="image" src="Images/img2.png" />
                    </div>
                    <div>
                        <img data-u="image" src="Images/img3.png" />
                    </div>
                    <div>
                        <img data-u="image" src="Images/img4.png" />
                    </div>
                    <div>
                        <img data-u="image" src="Images/img5.png" />
                    </div>
                    <div>
                        <img data-u="image" src="Images/img6.png" />
                    </div>
                </div><a data-scale="0" href="https://www.jssor.com" style="display:none;position:absolute;">html slider</a>
                <!-- Arrow Navigator -->
                <div data-u="arrowleft" class="jssora072" style="width:25px;height:25px;top:0px;left:20px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                    <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                        <path class="a" d="M4800,8000c0,192.6,70.4,359.3,211.1,500l4977.8,4977.8c140.7,140.7,307.4,211.1,500,211.1 c192.6,0,359.3-70.4,500-211.1c140.7-140.7,211.1-307.4,211.1-500V3022.2c0-192.6-70.4-359.2-211.1-500 c-140.7-140.8-307.4-211.1-500-211.1c-192.6,0-359.3,70.3-500,211.1L5011.1,7500C4870.4,7640.7,4800,7807.4,4800,8000L4800,8000z"></path>
                    </svg>
                </div>
                <div data-u="arrowright" class="jssora072" style="width:25px;height:25px;top:0px;right:20px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                    <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                        <path class="a" d="M11200,8000c0,192.6-70.4,359.3-211.1,500l-4977.8,4977.8c-140.7,140.7-307.4,211.1-500,211.1 s-359.3-70.4-500-211.1c-140.7-140.7-211.1-307.4-211.1-500V3022.2c0-192.6,70.4-359.2,211.1-500c140.7-140.8,307.4-211.1,500-211.1 s359.3,70.3,500,211.1L10988.9,7500C11129.6,7640.7,11200,7807.4,11200,8000L11200,8000z"></path>
                    </svg>
                </div>
            </div>
            <script type="text/javascript">jssor_1_slider_init();
            </script>
            <!-- #endregion Jssor Slider End -->
        </div>
        <section id="o-nas">
            <div class="heading">
                <h1>O nás</h1>
            </div>
            <div class="text-pool">
                <p>Predmetom činnosti firmy <b>Dobrá Stavba</b> je komplexná činnosť v oblasti stavebníctva.</p> 
                <p>Okrem stavby rodinných domov sa zameriava aj na rekonštrukcie bytových a nebytových priestorov. V súvislosti s dodávanými remeselnými prácami poskytuje aj bezplatné poradenstvo v oblasti statiky, dizajnu, či optimalizácie nákladov.</p>
                <p>Vzhľadom na množstvo realizovaných projektov je možné vytvoriť aj návrh dispozície podľa požiadaviek klientov. Firma <b>Dobrá Stavba</b> je schopná zabezpečiť nákup a dovoz všetkého potrebného materiálu, rovnako aj odvoz a likvidáciu stavebného odpadu.</p>
                <p>Výhodami spolupráce s firmou <b>Dobrá Stavba</b> nie sú iba komplexnosť ponúkaných služieb a dlhoročné skúsenosti jej majstrov, ale aj výrazné zľavy pri kúpe širokého sortimentu stavebných a inštalatérskych materiálov.</p>
            </div>
        </section>
        <section id="ponuka">
            <div class="heading">
                 <h1>Čo ponúkame ?</h1>
            </div>
            <div class="list">
                <div class="item">
                    <div class="icon">
                        <img src="Style/Icon01.svg" alt="">
                    </div>
                    <div class="heading">
                        <h2>Rekonštrukcie bytov</h2>
                    </div>
                    <div class="text">
                        <p>Jedným z hlavných predmetov činnosti firmy <b>Dobrá Stavba</b> je komplexná rekonštrukcia bytov a nebytových priestorov. Firma zabezpečuje všetky s tým spojené remeselné aj pomocné práce. Okrem toho je možné vytvoriť aj návrh dispozície podľa požiadaviek klientov.</p>
                    </div>
                    <div class="wrapper">
                        <a href="#kontakt" class="slide-button">
                            <h2>Kontakt</h2>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="icon">
                        <img src="Style/Icon01.svg" alt="">
                    </div>
                    <div class="heading">
                        <h2>Rekonštrukcia bytového jadra</h2>
                    </div>
                    <div class="text">
                        <p>Spoločnosť <b>Dobrá Stavba</b> uskutočňuje aj samostatné rekonštrukcie kúpeľní alebo celých bytových jadier. V súvislosti s týmito prácami je možné vyhotoviť aj grafický návrh týchto priestorov.</p>
                    </div>
                    <div class="wrapper">
                        <a href="#kontakt" class="slide-button">
                            <h2>Kontakt</h2>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="icon">
                        <img src="Style/Icon01.svg" alt="">
                    </div>
                    <div class="heading">
                        <h2>Murárske práce</h2>
                    </div>
                    <div class="text">
                        <p>V rámci svojej činnosti vykonáva spoločnosť <b>Dobrá Stavba</b> aj širokú paletu murárskych prác. Ide hlavne o murovanie priečok z rôznych materiálov, vymurovanie políc, vyrovnávanie stien, vyspravenie a vystuženie prasklín v stenách bytov, nanášanie všetkých druhov omietok, aplikácia poterov, betonárske práce atď.</p>
                    </div>
                    <div class="wrapper">
                        <a href="#kontakt" class="slide-button">
                            <h2>Kontakt</h2>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="icon">
                        <img src="Style/Icon01.svg" alt="">
                    </div>
                    <div class="heading">
                        <h2>Obkladanie</h2>
                    </div>
                    <div class="text">
                        <p>Spoločnosť <b>Dobrá Stavba</b> ponúka aj široké spektrum obkladačských prác.</p>
                    </div>
                    <div class="wrapper">
                        <a href="#kontakt" class="slide-button">
                            <h2>Kontakt</h2>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="icon">
                        <img src="Style/Icon01.svg" alt="">
                    </div>
                    <div class="heading">
                        <h2>Sadrokartónové systémy</h2>
                    </div>
                    <div class="text">
                        <p>Spoločnosť <b>Dobrá Stavba</b> poskytuje komplexné služby aj v oblasti sadrokartónových systémov.</p>
                    </div>
                    <div class="wrapper">
                        <a href="#kontakt" class="slide-button">
                            <h2>Kontakt</h2>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="icon">
                        <img src="Style/Icon01.svg" alt="">
                    </div>
                    <div class="heading">
                        <h2>Pokládka parkiet, montáž dverí</h2>
                    </div>
                    <div class="text">
                        <p>Súčasťou širokého spektra služieb ponúkaných spoločnosťou <b>Dobrá Stavba</b>  sú aj remeselné práce zamerané na podlahy a dvere. Firma zabezpečuje kompletnú pokládku všetkých druhov podláh a osadenie rôznych typov zárubní a dverí. Samozrejme, je možné zabezpečiť aj nákup a dovoz potrebného materiálu.</p>
                    </div>
                    <div class="wrapper">
                        <a href="#kontakt" class="slide-button">
                            <h2>Kontakt</h2>
                        </a>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </section>
        <section id="referencie">
            <div class="heading">
                <h1>Referencie</h1>
           </div>
            <div class="gallery">
                <a href="Images/img1.png"><img src="Images/img1.png" alt="" title="Stavba Niecoho :D"></a>
                <a href="Images/img2.png"><img src="Images/img2.png" alt="" title="Krb nejaky :D"></a>
                <a href="Images/img3.png"><img src="Images/img3.png" alt="" title="Stavba Niecoho :D"></a>
                <a href="Images/img4.png"><img src="Images/img4.png" alt="" title="Krb nejaky :D"></a>
                <a href="Images/img5.png"><img src="Images/img5.png" alt="" title="Stavba Niecoho :D"></a>
                <a href="Images/img6.png"><img src="Images/img6.png" alt="" title="Stavba Niecoho :D"></a>
                <a href="Images/img7.png"><img src="Images/img7.png" alt="" title="Krb nejaky :D"></a>
                <a href="Images/img8.png"><img src="Images/img8.png" alt="" title="Stavba Niecoho :D"></a>
                <div class="clear"></div>
            </div>
        </section>
        <section id="kontakt">
            <div class="heading">
                <h1>Kontakt</h1>
            </div>
            
            <div class="contact">
                <div>
                    <?php
                        error_reporting(0);

                        use PHPMailer\PHPMailer\PHPMailer;
                        use PHPMailer\PHPMailer\Exception;

                        require 'PHPMailer/src/Exception.php';
                        require 'PHPMailer/src/PHPMailer.php';
                        require 'PHPMailer/src/SMTP.php';

                        // Instantiation and passing `true` enables exceptions
                        $mail = new PHPMailer(true);
                        $mail->CharSet = "UTF-8";

                        try {
                            //Server settings                   // Enable verbose debug output
                            $mail->isSMTP();                                            // Send using SMTP
                            $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
                            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                            $mail->Username   = 'davidulo123@gmail.com';                     // SMTP username
                            $mail->Password   = 'kokot7788';                               // SMTP password
                            $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                            $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
                            $mail->SMTPOptions = array(
                                'ssl' => array(
                                    'verify_peer' => false,
                                    'verify_peer_name' => false,
                                    'allow_self_signed' => true
                                )
                            );

                            //Recipients
                            $mail->setFrom('davidulo123@gmail.com', 'Dobrá Stavba s.r.o.');
                            $mail->addAddress('davidulo123@gmail.com', 'Dávid Slačka');
                            $mail->addAddress($_POST['mail'], $_POST['name']);
                            $mail->addReplyTo($_POST['mail'], $_POST['name']);

                            // Content
                            $mail->isHTML(true);                                  // Set email format to HTML
                            $mail->Subject = 'Dobrá Stavba požiadavka s predmetom: '.$_POST['subject'];
                            $mail->Body    = 
                            'Dobrý deň '.$_POST['name'].', <br>
                            <br>'
                            .'Dostali sme od vás správu, ak chcete niečo pridať alebo upraviť vo vašej požiadavke odpíšte na tento e-mail. Za krátko vám odpíšeme. Vaša správa bola: <br>
                            <br>"'
                            .$_POST['message'].'"<br>
                            <br>
                            - Dobrá Stavba s.r.o.';

                            $mail->send();
                            echo '<h3>Správa bola <b>odoslaná</b>.</h3>';
                        } catch (Exception $e) {
                            echo "<h3 style='color: rgb(32, 35, 42);'>Error: {$mail->ErrorInfo}</h3>";
                        }
                    ?>
                </div>
                <form method="post" action="index.php#kontakt">
                    <input type="text" name="name" placeholder="Meno a Priezvisko">
                    <input type="text" name="mail" placeholder="E-mail">
                    <input type="text" name="subject" placeholder="Predmet">
                    <textarea name="message" placeholder="Požiadavka..."></textarea>
                    <button type="submit" name="submit">Poslať</button>
                </form>
            </div>
        </section>
        <div class="clear"></div>
        <footer>
            &copy; 2020 <b>Dobrá Stavba</b>
        </footer>
    </main>
</body>
</html>