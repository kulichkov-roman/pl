<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
        <title>Корпорация АН «Планета»: объекты</title>
        <?
        //-->
        // Для vk.com
        ?>
        <meta property="og:image" content="/img/logo.png" />
        <?
        //<--
        ?>
        <!-- other style -->
        <link href="/css/font-face.css" rel="stylesheet" type="text/css">
        <link href="/css/template_styles.css" type="text/css" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Cuprum:400,400italic,700,700italic&amp;subset=cyrillic,latin-ext,latin" rel="stylesheet" type="text/css">
        <link href="/css/colors.css" rel="stylesheet" type="text/css">
        <link href="/css/developers.css" rel="stylesheet" type="text/css">
        <!--[if lt IE 9]><script type="text/javascript" src="/js/html5shiv.js"></script><![endif]-->
        <script type="text/javascript" src="/js/jquery1.8.2-min.js"></script>
        <script type="text/javascript" src="/js/scripts.js"></script>
        <script type="text/javascript" src="//yandex.st/share/share.js" charset="utf-8"></script>
        <!--noindex-->
            <?include_once("../inc/zopim.php");?>
        <!--/noindex-->
        <!-- VK Widget -->
        <script type="text/javascript" src="//vk.com/js/api/openapi.js?105"></script>
        <script type="text/javascript">
            VK.init({apiId: 3529769, onlyWidgets: true});
            VK.Widgets.Like("vk_like", {type: "mini", pageTitle: "www.planetacorps.ru", height: 20, pageUrl: "http://www.planetacorps.ru" });
        </script>
        <!-- /VK Widget -->
        <!-- FB Widget -->
        <script>
            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1&appId=574843562535620";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        <!-- /FB Widget -->
    </head>
    <body class="theme-blue">
        <div id="container" class="main">
            <header>
                <div id="header-in">
                    <a id="logo" href="/">
                        <?include_once("../inc/logo.php");?> 
                    </a>
                    <nav id="top-menu">
                        <div style="clear:both">
                            <ul>
                                <li class="active"><a href="/construction/">Объекты</a></li>
                                <li><a href="/partners/">Партнеры</a></li>
                                <li><a href="/services/">Услуги</a></li>
                                <li><a href="/job/">Вакансии</a></li>
                                <li><a href="/contacts/">Контакты</a></li>
                            </ul>
                        </div>
                        <div style="clear:both; padding-top:35px; padding-right:20px; padding-left:10px">
                            <?include_once("../inc/like_top.php");?>
                        </div>
                    </nav>
                    <?include_once("../inc/header-contacts.php");?>
                </div>
            </header>
            <div id="container-in">
                <section>
                    <aside id="column-l">
                        <?include_once("../inc/event.php");?>
                    </aside>
                    <div id="content">
                        <div class="breadcrumb-navigation">
                            <a href="/">Главная</a> / <a href="/construction/">Объекты</a>
                        </div>
                        <h1>Объекты от застройщиков</h1>
                        <p>Дополнительную информацию по приобритению жилья у застройщиков, можно получить по телефонам: т. 331-15-24, +7 (903) 931-15-24 Сидоркин Вячеслав.</p>
                        <p>А также по адресу: ул. Крылова 36, офис 521б, вход со стороны ул. Семьи Шамшиных.</p>
                        <h3>Железнодорожный район</h3>
                        <img src="/img/developers/1j.jpg"/></br></br>
                        <img src="/img/developers/2j.jpg"/></br></br>
                        <img src="/img/developers/3j.jpg"/>
                        <h3>Дзержинский район</h3>
                        <img src="/img/developers/1d.jpg"/></br></br>
                        <img src="/img/developers/2d.jpg"/></br></br>
                        <img src="/img/developers/3d.jpg"/>
                        <?/*?>
                        <p>Агентство недвижимости «Планета» заключила договора со следующими застройщиками:</p>
                        <ul>
                            <li>ООО «АКД» жилой комплекс «Бавария» </li>
                            <li>ООО «АКД-Мета» Жилой комплекс «Оазис»</li>
                            <li>ГК "Стрижи" Жилой комплекс «Светлая роща»</li>
                            <li>ГК "Стрижи" Жилой комплекс «Кленовая аллея»</li>
                            <li>ООО «Приборкомплекс» г. Объ, ул. Большая 5</li>
                        </ul>
                        <?*/?>
                        <p class="sub-table_link">Дополнительную информацию по приобритению жилья у застройщиков, можно получить по телефонам: т. 331-15-24, +7 (903) 931-15-24 Сидоркин Вячеслав.</p>
                        <p>А также по адресу: ул. Крылова 36, офис 521б, вход со стороны ул. Семьи Шамшиных.</p>
                        <!--noindex-->
                            <?include_once("../inc/yandex-share.php");?>
                        <!--/noindex-->
                    </div>
                </section>
            </div>
            <footer>
                <div>
                    <nav id="footer-menu">
                        <?include_once("../inc/footer-menu.php");?>
                    </nav>
                <?include_once("../inc/copyright_footer.php");?>
                </div>
            </footer>
        </div>
        <!--noindex-->
            <?include_once("../inc/yandex-metrika.php");?>
        <!--/noindex-->
    </body>
</html>
