<?
global $APPLICATION;
?>
<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/footer_info1.php"
                    )
                );?>
            </div>
            <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="row mb-5">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "",
                        Array(
                            "ALLOW_MULTI_SELECT" => "N",
                            "CHILD_MENU_TYPE" => "bottom",
                            "DELAY" => "N",
                            "MAX_LEVEL" => "4",
                            "MENU_CACHE_GET_VARS" => array(""),
                            "MENU_CACHE_TIME" => "3600",
                            "MENU_CACHE_TYPE" => "Y",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "ROOT_MENU_TYPE" => "bottom",
                            "USE_EXT" => "N"
                        )
                    );?>
                </div>


            </div>

            <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "inc",
                    "EDIT_TEMPLATE" => "",
                    "PATH" => "/include/footer_info2.php"
                )
            );?>

        </div>
        <div class="row pt-5 mt-5 text-center">
            <div class="col-md-12">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/footer_info3.php"
                    )
                );?>
            </div>

        </div>
    </div>
</footer>

</div>

<?
// для js-файлов
$APPLICATION->AddHeadScript('/bitrix/templates/.default/js/jquery-3.3.1.min.js');
$APPLICATION->AddHeadScript('/bitrix/templates/.default/js/jquery-migrate-3.0.1.min.js');
$APPLICATION->AddHeadScript('/bitrix/templates/.default/js/jquery-ui.js');
$APPLICATION->AddHeadScript('/bitrix/templates/.default/js/popper.min.js');
$APPLICATION->AddHeadScript('/bitrix/templates/.default/js/bootstrap.min.js');
$APPLICATION->AddHeadScript('/bitrix/templates/.default/js/owl.carousel.min.js');
$APPLICATION->AddHeadScript('/bitrix/templates/.default/js/mediaelement-and-player.min.js');
$APPLICATION->AddHeadScript('/bitrix/templates/.default/js/jquery.stellar.min.js');
$APPLICATION->AddHeadScript('/bitrix/templates/.default/js/jquery.countdown.min.js');
$APPLICATION->AddHeadScript('/bitrix/templates/.default/js/jquery.magnific-popup.min.js');
$APPLICATION->AddHeadScript('/bitrix/templates/.default/js/bootstrap-datepicker.min.js');
$APPLICATION->AddHeadScript('/bitrix/templates/.default/js/aos.js');
$APPLICATION->AddHeadScript('/bitrix/templates/.default/js/main.js');
?>
</body>

</html>