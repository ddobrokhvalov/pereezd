<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

//delayed function must return a string
if(empty($arResult))
	return "";

if($arResult[count($arResult)-1]["LINK"]!="" && $arResult[count($arResult)-1]["LINK"]!=$GLOBALS["APPLICATION"]->GetCurPage(false))
	$arResult[] = Array("TITLE"=>$GLOBALS["APPLICATION"]->GetTitle());

$strReturn = '<div class="breadcrumb">';
for($index = 0, $itemSize = count($arResult); $index < $itemSize; $index++)
{
	$strReturn .= '<div class="breadcrumb-item" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">';
        if($index > 0) $strReturn .= '<span> &gt; </span>';

	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);
	if($arResult[$index]["LINK"] <> "" && $arResult[$index]["LINK"]!=$GLOBALS["APPLICATION"]->GetCurPage(false))
		$strReturn .= '<a href="'.$arResult[$index]["LINK"].'" title="'.$title.'" itemprop="url"><span itemprop="title">'.$title.'</span></a>';
	else
		$strReturn .= '<span>'.$title.'</span>';
        $strReturn .= '</div>';
}

$strReturn .= '</div>';
return $strReturn;
?>
