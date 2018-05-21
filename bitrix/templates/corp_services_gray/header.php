<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title><?$APPLICATION->ShowTitle()?></title>
	<link rel="shortcut icon" type="image/x-icon" href="<?=SITE_TEMPLATE_PATH?>/favicon.ico" />
        <?
        Bitrix\Main\Page\Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/fonts.css");
        Bitrix\Main\Page\Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/style.css");
        Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/jquery-2.2.3.min.js");
        Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/general.js?v06092017");
        ?>
	
	<?$APPLICATION->ShowHead();?>
	
	<!--[if lte IE 6]>
	<style type="text/css">
		
		#support-question { 
			background-image: none;
			filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='./images/question.png', sizingMethod = 'crop'); 
		}
		
		#support-question { left: -9px;}
		
		#banner-overlay {
			background-image: none;
			filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='./images/overlay.png', sizingMethod = 'crop');
		}
		
	</style>
	<![endif]-->

	<!--<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/colors.css" />-->
		
</head>
<body>
    <div class="bx_panel"><?$APPLICATION->ShowPanel();?></div>
    <div class="header-background">
    	<div class="hb--right-bottom" style="width: 50%;"></div>
    </div>
    <header class="wrapper">
        <div class="header-background">
            <div class="h-hb--left-top"></div>
            <div class="h-hb--right-bottom"></div>
        </div>
        <div class="clearfix">
            <div class="col-xs-4">
                <a href="<?=SITE_DIR?>" class="logo"></a>
            </div>
            <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/head_contacts.php"
                    )
            );?>
            <div class="col-xs-2">
                <div id="header-feedback" class="btn btn-brown popup-open" data-id-form="feedback-popup">Обратная связь</div>
            </div>
        </div>
        <div class="clearfix">
            <?$APPLICATION->IncludeComponent(
                    "bitrix:menu", 
                    "horizontal_multilevel2", 
                    array(
                            "ALLOW_MULTI_SELECT" => "N",
                            "CHILD_MENU_TYPE" => "left",
                            "DELAY" => "N",
                            "MAX_LEVEL" => "2",
                            "MENU_CACHE_GET_VARS" => array(
                            ),
                            "MENU_CACHE_TIME" => "3600",
                            "MENU_CACHE_TYPE" => "N",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "ROOT_MENU_TYPE" => "top",
                            "USE_EXT" => "N",
                            "COMPONENT_TEMPLATE" => "horizontal_multilevel2"
                    ),
                    false
            );?>
        </div>
    </header>
    <?if($APPLICATION->GetCurPage(false)==SITE_DIR):?>
        <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/main_banner.php"
                )
        );?>
        <?endif;?>
    <div id="wrapper">
        <div class="table-row">
            <?if($APPLICATION->GetCurPage(false)!=SITE_DIR):?>
                <section class="wrapper content clearfix">
                    <div class="col-xs-12">
                        <?$APPLICATION->IncludeComponent(
                                "bitrix:breadcrumb",
                                "",
                        Array()
                        );?>
                        
                        <div class="clearfix">
                            <h1><?$APPLICATION->ShowTitle()?></h1>
            <?endif;?>