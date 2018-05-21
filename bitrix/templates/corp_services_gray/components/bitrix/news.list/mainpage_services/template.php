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
<section class="home-our-services wrapper clearfix">
    <div class="col-xs-12">
        <h2><?=$arResult["NAME"]?></h2>
        <?if(isset($arResult["ITEM0"])):?>
            <?
            $this->AddEditAction($arResult["ITEM0"]['ID'], $arResult["ITEM0"]['EDIT_LINK'], CIBlock::GetArrayByID($arResult["ITEM0"]["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arResult["ITEM0"]['ID'], $arResult["ITEM0"]['DELETE_LINK'], CIBlock::GetArrayByID($arResult["ITEM0"]["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
            <div class="row" style="margin-top: -115px;">
                <div class="col-xs-4"></div>
                <div class="col-xs-8" id="<?=$this->GetEditAreaId($arResult["ITEM0"]['ID']);?>">
                            <a href="<?=$arResult["ITEM0"]["DETAIL_PAGE_URL"]?>">
                                <img src="<?=$arResult["ITEM0"]["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arResult["ITEM0"]["PREVIEW_PICTURE"]["ALT"]?>"
                                     style="width: 100%; height: auto">
                                <span class="triangle--green"><?=$arResult["ITEM0"]["NAME"]?></span>
                            </a>
                </div>
            </div>
        <?endif;?>
        <?if(count($arResult["ITEMS"])):?>
            <div class="row" style="margin-top: 15px; margin-bottom: 80px;">
                <?foreach($arResult["ITEMS"] as $arItem):?>
                    <?
                        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                    ?>
                    <div class="col-xs-4" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                        <a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
                            <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>">
                            <span class="triangle--green-min"><?=$arItem["NAME"]?></span>
                        </a>
                    </div>
                <?endforeach;?>
            </div>
        <?endif;?>
        <div class="row">
            <div class="col-xs-12">
                <?=$arResult['DESCRIPTION']?>
            </div>
        </div>
    </div>
</section>
