<?php include 'head.php';?>
         <!-- SEO -->
        <title>TRRR Technology</title>
        <meta name="description" content="Лидер на рынке вторичного сырья в Казахстане.">
        <meta name="robots" content="index,follow">
        <link rel="canonical" href="https://trrr.kz/about"/>
        <!-- SEO -->

        <!-- Include All CSS here-->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
        <link rel="stylesheet" type="text/css" href="css/owl.carousel.css"/>
        <link rel="stylesheet" type="text/css" href="css/owl.theme.css"/>
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"/>
        <link rel="stylesheet" type="text/css" href="css/animate.css"/>
        <link rel="stylesheet" type="text/css" href="css/magnific-popup.css"/>
        <link rel="stylesheet" type="text/css" href="css/settings.css"/>
        <link rel="stylesheet" type="text/css" href="css/slick.css"/>
        <link rel="stylesheet" type="text/css" href="css/icons.css"/>
        <link rel="stylesheet" type="text/css" href="css/preset.css"/>
        <link rel="stylesheet" type="text/css" href="css/theme.css"/>
        <link rel="stylesheet" type="text/css" href="css/responsive.css"/>
        <link rel="stylesheet" type="text/css" href="css/presets/color1.css" id="colorChange"/>
        <link rel="stylesheet" type="text/css" href="css/site.addons.css">
        <!-- End Include All CSS -->

        <!-- Favicon Icon -->
        <link rel="icon"  type="image/png" href="images/favicon.png">
    </head>
    <body>
        <!-- Preloading -->
        <div class="preloader text-center">
            <div class="la-ball-circus la-2x">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <!-- Preloading -->
        <?php include 'menu.php';?>

        <!-- Search From -->
<!--         <div class="searchFixed popupBG">
            <div class="container-fluid">
                <a href="" id="sfCloser" class="sfCloser"></a>
                <div class="searchForms">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2">
                                <form method="post" action="#">
                                    <input type="text" name="s" class="searchField" placeholder="Search here..."/>
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Search From -->

        
        <!-- PopUP Menu -->
        <?php include 'pmenu.php';?>
        <!-- PopUP Menu -->

        <!-- Page Banner -->
        <section class="pageBanner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner_content text-center">
                           <!--  <h4><a href="#">home</a> - about</h4> -->
                            <h2>О компании</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Page Banner -->

        <!-- Agency Section -->
        <section class="commonSection">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-6 col-md-6">
                        <h4 class="sub_title">Наша компания</h4>
                        <h2 class="sec_title">была создана</h2>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6">
                        <div class="agency_img1">
                            <img src="images/about/1.jpg" alt=""/>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12">
                        <div class="agency_img2">
                            <img src="images/about/2.jpg" alt=""/>
                        </div>
                        <div class="compay_date">
                            <h5>в</h5>
                            <h2>1990 году</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Agency Section -->

        <!-- Testimonial 2 Section -->
        <section class="commonSection testimonial_2 bgblack">
            <div class="container">
                <div class="row">
                    <div id="tabs" class="testimoniTab">
                        <div class="col-lg-5 col-sm-5">
                            <h4 class="sub_title color_aaa">Руководство</h4>
                            <h2 class="sec_title white">компании</h2>
                            <ul class="slider_testimoial">
                                <li class="active control_item">
                                    <a href="#tab_1" data-toggle="tab">
                                        <span><img src="images/home_1/t1.jpg" alt=""/></span>
                                        <div class="author_detail">
                                            <h5>Руководитель 1</h5>
                                            <h6>Директор</h6>
                                        </div>
                                    </a>
                                </li>
                                <li class="control_item">
                                    <a href="#tab_2" data-toggle="tab">
                                        <span><img src="images/home_1/t2.jpg" alt=""/></span>
                                        <div class="author_detail">
                                           <h5>Руководитель 3</h5>
                                            <h6>Директор</h6>
                                        </div>
                                    </a>
                                </li>
                                <li class="control_item">
                                    <a href="#tab_3" data-toggle="tab">
                                        <span><img src="images/home_1/t3.jpg" alt=""/></span>
                                        <div class="author_detail">
                                           <h5>Руководитель 3</h5>
                                            <h6>Директор</h6>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-7 col-sm-7">
                            <div class="dots_owl"></div>
                            <div class="tab-content clearfix">
                                <div class="tab-pane fade in active testi_con" id="tab_1">
                                    <p>
                                        О руководителе
                                    </p>
                                    <span>25 нояб, 2020</span>
                                </div>
                                <div class="tab-pane fade testi_con" id="tab_2">
                                            <p>
                                        О руководителе 2
                                    </p>
                                    <span>25 нояб, 2020</span>
                                </div>
                                <div class="tab-pane fade testi_con" id="tab_3">
                                           <p>
                                        О руководителе 3
                                    </p>
                                    <span>25 нояб, 2020</span>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial 2 Section -->

        <!-- Team Section -->
 <!--        <section class="commonSection team">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h4 class="sub_title">Наша команда</h4>
                        <h2 class="sec_title">профессионалы в своем деле</h2>
                        <p class="sec_desc">
                            Описание
                        </p>
                    </div>
                </div>
            </div>
            <div class="team_slider">
                <div class="singleTM">
                    <div class="tm_img">
                        <img src="images/team/1.jpg" alt="">
                        <div class="tm_overlay">
                            <div class="team_social">
                                <a href="#"><span>Facebook</span></a>
                                <a href="#"><span>Twitter</span></a>
                                <a href="#"><span>Youtube</span></a>
                            </div> 
                            <a href="#" class="common_btn"><span>learn more</span></a> 
                        </div>
                    </div>
                    <div class="detail_TM">
                        <h5>Человек 1</h5>
                        <h6>должность</h6>
                    </div>
                </div>
           
        
        </section> -->
        <!-- Team Section -->

        <!-- Our Work Section -->
<!--         <section class="commonSection our_work">
            <div class="videoWrap_2">
                <img src="images/about/3.jpg" alt="">
                <div class="play_video">
                    <a class="video_popup" href="https://www.youtube.com/watch?v=A7ZkZazfvao"><i class="fa fa-play"></i></a>
                    <h2>Watch Video</h2>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-6">
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="ab_detail_wrap">
                            <h4 class="sub_title">the only design you need</h4>
                            <h2 class="sec_title">Make amazing websites without touching cod</h2>
                            <p class="sec_desc">
                                Tincidunt elit magnis nulla facilisis sagittis maecenas. Sapien nunc amet ultrices, 
                                dolores sit ipsum velit purus aliquet, massa fringilla leo orci. Lorem ipsum
                                dolors sit amet elit magnis amet ultrices purus aliquet.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- Our Work Section -->

        <!-- Why Choose Section -->
        <section class="commonSection chooseUs">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        
                        <h2 class="sub_title">Деятельности компании</h2>
                        <h4 class="sec_title">мы решаем ваш вопрос по утилизации</h4>
                        <p class="sec_desc">
                            Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Рекламных, до океана точках свой свое заглавных образ. Реторический предложения повстречался запятой! <br> Моей, жаренные запятой курсивных выйти подзаголовок оксмокс всеми.
                        </p>
                    </div>
                </div>
                <div id="tabs">
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="chooseUs_title">
                                <li><a href="#tes_tab_1" data-toggle="tab">Сбор</a></li>
                                <li class="active"><a href="#tes_tab_2" data-toggle="tab">транспортировка</a></li>
                                <li><a href="#tes_tab_3" data-toggle="tab">переработка</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="tab-content clearfix">
                            <div class="tab-pane fade" id="tes_tab_1">
                                <div class="col-lg-7 col-sm-7 col-md-7">
                                    <div class="wh_choose">
                                        <p>
                                          Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Рекламных, до океана точках свой свое заглавных образ. Реторический предложения повстречался запятой! <br> Моей, жаренные запятой курсивных выйти подзаголовок оксмокс всеми.
                                        </p>
                                        <ul>
                                            <li><i class="fa fa-check-square"></i>Пункт</li>
                                            <li><i class="fa fa-check-square"></i>Пункт</li>
                                            <li><i class="fa fa-check-square"></i>Пункт</li>
                                            <li><i class="fa fa-check-square"></i>Пункт</li>
                                            <li><i class="fa fa-check-square"></i>Пункт</li>
                                            <li><i class="fa fa-check-square"></i>Пункт</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-sm-5 col-md-5">
                                    <div class="chose_img">
                                        <img src="images/home_1/c1.jpg" alt=""/>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade in active" id="tes_tab_2">
                                <div class="col-lg-5 col-sm-5 col-md-5">
                                    <div class="chose_img">
                                        <img src="images/home_1/c2.jpg" alt=""/>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-sm-7 col-md-7">
                                    <div class="wh_choose">
                                       <p>
                                          Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Рекламных, до океана точках свой свое заглавных образ. Реторический предложения повстречался запятой! <br> Моей, жаренные запятой курсивных выйти подзаголовок оксмокс всеми.
                                        </p>
                                        <ul>
                                            <li><i class="fa fa-check-square"></i>Пункт</li>
                                            <li><i class="fa fa-check-square"></i>Пункт</li>
                                            <li><i class="fa fa-check-square"></i>Пункт</li>
                                            <li><i class="fa fa-check-square"></i>Пункт</li>
                                            <li><i class="fa fa-check-square"></i>Пункт</li>
                                            <li><i class="fa fa-check-square"></i>Пункт</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tes_tab_3">
                                <div class="col-lg-7 col-sm-7 col-md-7">
                                    <div class="wh_choose">
                                         <p>
                                          Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Рекламных, до океана точках свой свое заглавных образ. Реторический предложения повстречался запятой! <br> Моей, жаренные запятой курсивных выйти подзаголовок оксмокс всеми.
                                        </p>
                                        <ul>
                                            <li><i class="fa fa-check-square"></i>Пункт</li>
                                            <li><i class="fa fa-check-square"></i>Пункт</li>
                                            <li><i class="fa fa-check-square"></i>Пункт</li>
                                            <li><i class="fa fa-check-square"></i>Пункт</li>
                                            <li><i class="fa fa-check-square"></i>Пункт</li>
                                            <li><i class="fa fa-check-square"></i>Пункт</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-sm-5 col-md-5">
                                    <div class="chose_img">
                                        <img src="images/home_1/c3.jpg" alt=""/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Why Choose Section -->

        <!-- Ready Section -->
        <section class="commonSection ready">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-sm-8 col-md-9">
                        <h2 class="sec_title white">Свяжитесь с нами!</h2>
                    </div>
                    <div class="col-lg-3 col-sm-4 col-md-3 text-right">
                        <a class="common_btn" href="contacts"><span>Контакты</span></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Ready Section -->

  <?php include 'footer.php';?>
    </body>
</html>