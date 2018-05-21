<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<section class="home-our-car-park">
    <div class="wrapper clearfix">
        <div class="col-xs-12">
            <h2><?=$arResult["NAME"]?></h2>
            <div class="row">
                <? $i = 1; ?>
                <?foreach($arResult["ITEMS"] as $arItem):?>
                    <?
                    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                    ?>
                    <div class="col-xs-6" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                            <div class="car-info">
                                <div class="car-weight"><?=$arItem["CODE"]?></div>
                                <div class="car-all-info"><?=$arItem["NAME"]?></div>
                                <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>">
                            </div>
                    </div>
                    <?if($i % 2 == 0 && $i > 0):?>
                    </div>
                    <div class="row">
                    <?endif;?>
                    <?$i++;?>
                <?endforeach;?>
            </div>
        </div>
    </div>
</section>