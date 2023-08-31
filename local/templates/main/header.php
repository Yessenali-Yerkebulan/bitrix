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
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "",
                        Array(
                            "ALLOW_MULTI_SELECT" => "N",
                            "CHILD_MENU_TYPE" => "top",
                            "DELAY" => "N",
                            "MAX_LEVEL" => "4",
                            "MENU_CACHE_GET_VARS" => array(""),
                            "MENU_CACHE_TIME" => "3600",
                            "MENU_CACHE_TYPE" => "Y",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "ROOT_MENU_TYPE" => "top",
                            "USE_EXT" => "N"
                        )
                    );?>
                </div>


            </div>
        </div>
    </div>
</div>