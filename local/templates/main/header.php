<?
global $APPLICATION;
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?$APPLICATION->ShowTitle()?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?$APPLICATION->ShowHead();?>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500">
    <?
    $APPLICATION->SetAdditionalCSS("/bitrix/templates/.default/fonts/icomoon/style.css");
    $APPLICATION->SetAdditionalCSS("/bitrix/templates/.default/css/magnific-popup.css");
    $APPLICATION->SetAdditionalCSS("/bitrix/templates/.default/css/bootstrap.min.css");
    $APPLICATION->SetAdditionalCSS("/bitrix/templates/.default/css/jquery-ui.css");
    $APPLICATION->SetAdditionalCSS("/bitrix/templates/.default/css/owl.carousel.min.css");
    $APPLICATION->SetAdditionalCSS("/bitrix/templates/.default/css/owl.theme.default.min.css");
    $APPLICATION->SetAdditionalCSS("/bitrix/templates/.default/css/bootstrap-datepicker.css");
    $APPLICATION->SetAdditionalCSS("/bitrix/templates/.default/css/mediaelementplayer.css");
    $APPLICATION->SetAdditionalCSS("/bitrix/templates/.default/css/animate.css");
    $APPLICATION->SetAdditionalCSS("/bitrix/templates/.default/css/bootstrap-datepicker.css");
    $APPLICATION->SetAdditionalCSS("/bitrix/templates/.default/fonts/flaticon/font/flaticon.css");
    $APPLICATION->SetAdditionalCSS("/bitrix/templates/.default/css/fl-bigmug-line.css");
    $APPLICATION->SetAdditionalCSS("/bitrix/templates/.default/css/aos.css");
    $APPLICATION->SetAdditionalCSS("/bitrix/templates/.default/css/style.css");
    ?>
</head>

<body>
<?$APPLICATION->ShowPanel();?>
<div class="site-loader"></div>

<div class="site-wrap">

    <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->

    <div class="border-bottom bg-white top-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6 col-md-6">
                    <p class="mb-0">
                        <a href="#" class="mr-3"><?$APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    Array(
                                        "AREA_FILE_SHOW" => "file",
                                        "AREA_FILE_SUFFIX" => "inc",
                                        "EDIT_TEMPLATE" => "",
                                        "PATH" => "/include/phone.php"
                                    )
                                );?></a>
                        <a href="#">
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => "/include/email.php"
                                )
                            );?>
                        </a>
                    </p>
                </div>
                <div class="col-6 col-md-6 text-right">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/social.php"
                    )
                );?>
                </div>
            </div>
        </div>

    </div>
    <div class="site-navbar">
        <div class="container py-1">
            <div class="row align-items-center">
                <div class="col-8 col-md-8 col-lg-4">
                    <h1 class="">
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/include/logo.php"
                            )
                        );?>
                    </h1>
                </div>
                <div class="col-4 col-md-4 col-lg-8">
                    <nav class="site-navigation text-right text-md-right" role="navigation">

                        <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#"
                                                                                      class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

                        <ul class="site-menu js-clone-nav d-none d-lg-block">
                            <li class="active">
                                <a href="index.html">Home</a>
                            </li>
                            <li class="has-children">
                                <a href="properties.html">Properties</a>
                                <ul class="dropdown">
                                    <li><a href="#">Buy</a></li>
                                    <li><a href="#">Rent</a></li>
                                    <li><a href="#">Lease</a></li>
                                    <li class="has-children">
                                        <a href="#">Menu</a>
                                        <ul class="dropdown">
                                            <li><a href="#">Menu One</a></li>
                                            <li><a href="#">Menu Two</a></li>
                                            <li><a href="#">Menu Three</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>


            </div>
        </div>
    </div>
</div>