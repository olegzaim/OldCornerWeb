<!DOCTYPE html>
<!--[if lt IE 7]><html lang="ru" class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html lang="ru" class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html lang="ru" class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="bg">
<!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <title>OldCorner</title>
    <meta name="description" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />                                              <!-- коректно отаброжает на всех устройствах -- >
	<!--<link rel="shortcut icon" href="favicon.png" />-->
    <link rel="stylesheet" href="libs/bootstrap/bootstrap-grid-3.3.1.min.css" />
    <link rel="stylesheet" href="libs/magnific-popup/magnific-popup.css" />
    <link rel="stylesheet" href="libs/font-awesome-4.2.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="libs/fancybox/jquery.fancybox.css" />
    <link rel="stylesheet" href="libs/owl-carousel/owl.carousel.css" />
    <link rel="stylesheet" href="libs/countdown/jquery.countdown.css" />
    <link rel="stylesheet" href="css/fonts.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/media.css" />
    <link rel="icon" href="img/book.png" type="image/x-icon">
</head>
<body>
<div>
    <header class="top_header">
        <div class="header_towline">

            <div class="container">
                <div class="col-md-12">
                    <div class="row">
                        <button class="auth-buttons"><i class="fa fa-user hidden-md hidden-lg" aria-hidden="true"></i></button>
                        <div class="top_links">
                            <a href="#">Влизане</a>
                            /
                            <a href="#register" class="link">Регистрация</a>
                        </div>
                        <div class="soc_buttons">
                            <a href="https://www.facebook.com/olejkazaim?ref=bookmarks" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a> <!-- ссылка из bootstrap -->
                            <a href="https://vk.com/olegzaim" target="_blank"><i class="fa fa-vk" aria-hidden="true"></i></a>
                            <a href="https://www.instagram.com/olejkazaim/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="container">
            <div class="col-md-12">
                <div class="row">
                    <a href="#" class="logo">OldCorner</a>
                    <nav class="main_mnu clearfix"><button class="main_mnu_button"><i class="fa fa-bars hidden-md hidden-lg " aria-hidden="true"></i></button>                                                                       <!-- ДОЧЕРНИЕ ЭЛЕМЕНТЫ РАСПЛЫВАЮТСЯ В РАЗНЫЕ СТОРОНЫ-->
                        <ul>
                            <li class="active"><a href="index.html">Главна</a> </li>
                            <li><a href="book.php">Книги</a> </li>
                            <li><a href="dilivery.php">Доставка</a> </li>
                            <li><a href="pay.php">Плащане</a> </li>
                            <li><a href="garanty.php">Гаранции</a> </li>
                            <li><a href="about.php">Мнения</a> </li>
                        </ul>
                        <div class="top_contacts"><i class="fa fa-phone" aria-hidden="true"></i>+359-87-86-81-019</div>
                    </nav>
                    <h1>Продажба на електронни произведения и книги от световна класика</h1>
                    <div class="slider_container">
                        <div class="next_button"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                        <div class="prev_button"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
                        <div class="carousel">
                            <div class="slider_item"><img src="https://78.media.tumblr.com/78c699a756feb2fee1eee96825f8d00d/tumblr_inline_o6x5pdOcOr1qmmqwv_1280.jpg" ></div>
                            <div class="slider_item"><img src="http://static4.businessinsider.com/image/558191f1ecad04217453bd28-1200-800/gettyimages-183691950.jpg" ></div>
                            <div class="slider_item"><img src="http://riakchr.ru/wp-content/uploads/2015/06/literaturnaya-igra-kniga.jpg" ></div>
                            <div class="slider_item"><img src="https://yarcube.ru/upload/iblock/f0a/knigi_dlya_tekh_kto_otchayalsya.jpg" ></div>
                            <div class="slider_item"><img src="https://hsto.org/getpro/geektimes/post_images/164/bc1/188/164bc118818a15f7d3cb7eafaf782c07.jpg" ></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="hidden">
        <div id="register" class="pop_register">
            <form action="#">
                <label>Име</label><input id="name" type="text" name="text" title="Вашето Име" required><span></span> <br>
                <label>Фамилия</label><input type="text" name="text" title="Вашето фамилно име" required><span></span> <br>
                <label>Град</label><input type="text" name="text" title="Вашият град" required><span></span> <br>
                <br>
                <label>Эл.почта</label><input type="email" name="email" title="Вашият email" required><span></span> <br>
                <label>Парола</label><input type="password" name="password" title="Вашето фамилно име"> <br>
                <label>Повторение</label><input type="password" name="password" title="Вашият град" required><span></span> <br>
                <p>CAPCHA 7+4=:</p>
                <br><input type="number" name="text" title="капча" required  ><span></span><br>
                <div class="form_button">
                    <button class="button" type="submit" >Регистрирайте се</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="footer">

</div>
<div class="top" title="На горе"><i class="fa fa-angle-double-up" aria-hidden="true"></i></div>

<!--[if lt IE 9]>
<script src="libs/html5shiv/es5-shim.min.js"></script>
<script src="libs/html5shiv/html5shiv.min.js"></script>
<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
<script src="libs/respond/respond.min.js"></script>
<![endif]-->
<script src="libs/jquery/jquery-1.11.1.min.js"></script>
<script src="libs/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="libs/fancybox/jquery.fancybox.pack.js"></script>
<script src="libs/jquery-mousewheel/jquery.mousewheel.min.js"></script>
<script src="libs/waypoints/waypoints-1.6.2.min.js"></script>
<script src="libs/scrollto/jquery.scrollTo.min.js"></script>
<script src="libs/owl-carousel/owl.carousel.min.js"></script>
<script src="libs/countdown/jquery.plugin.js"></script>
<script src="libs/countdown/jquery.countdown.min.js"></script>
<script src="libs/countdown/jquery.countdown-ru.js"></script>
<script src="libs/landing-nav/navigation.js"></script>
<script src="js/common.js"></script>

<!-- Yandex.Metrika counter --><!-- /Yandex.Metrika counter -->
<!-- Google Analytics counter --><!-- /Google Analytics counter -->

</body>
</html>