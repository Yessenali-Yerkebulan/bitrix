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
                    <div class="col-md-12">
                        <h3 class="footer-heading mb-4">Navigations</h3>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <ul class="list-unstyled">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Buy</a></li>
                            <li><a href="#">Rent</a></li>
                            <li><a href="#">Properties</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <ul class="list-unstyled">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Terms</a></li>
                        </ul>
                    </div>
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