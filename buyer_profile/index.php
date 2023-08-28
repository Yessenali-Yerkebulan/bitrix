<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Личный кабинет покупателя");
?><?$APPLICATION->IncludeComponent(
	"bitrix:main.profile",
	"",
	Array(
		"CHECK_RIGHTS" => "N",
		"SEND_INFO" => "N",
		"SET_TITLE" => "Y",
		"USER_PROPERTY" => array(),
		"USER_PROPERTY_NAME" => ""
	)
);?><?$APPLICATION->IncludeComponent(
	"bitrix:subscribe.form",
	"",
	Array(
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"PAGE" => "#SITE_DIR#about/subscr_edit.php",
		"SHOW_HIDDEN" => "N",
		"USE_PERSONALIZATION" => "Y"
	)
);?><?$APPLICATION->IncludeComponent(
	"bitrix:forum.subscribe.list",
	"",
	Array(
		"DATE_TIME_FORMAT" => "d.m.Y H:i:s",
		"PAGE_NAVIGATION_TEMPLATE" => "",
		"PAGE_NAVIGATION_WINDOW" => "11",
		"SET_NAVIGATION" => "Y",
		"SET_TITLE" => "Y",
		"TOPICS_PER_PAGE" => "10",
		"UID" => $_REQUEST["UID"],
		"URL_TEMPLATES_LIST" => "list.php?FID=#FID#",
		"URL_TEMPLATES_MESSAGE" => "message.php?FID=#FID#&TID=#TID#&MID=#MID#",
		"URL_TEMPLATES_PROFILE_VIEW" => "profile_view.php?UID=#UID#",
		"URL_TEMPLATES_READ" => "read.php?FID=#FID#&TID=#TID#",
		"URL_TEMPLATES_SUBSCR_LIST" => "subscr_list.php"
	)
);?><?$APPLICATION->IncludeComponent(
	"bitrix:subscribe.index",
	"",
	Array(
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"PAGE" => "#SITE_DIR#about/subscr_edit.php",
		"SET_TITLE" => "Y",
		"SHOW_COUNT" => "N",
		"SHOW_HIDDEN" => "N"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>