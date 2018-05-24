<?
CModule::IncludeModule("iblock");
$rsServices = CIBlockElement::GetList(array("SORT"=>"ASC"), array("IBLOCK_CODE"=>"services"));

$aMenuLinks = array();

while($arService = $rsServices->Fetch()){
	if($_GET["debug"]){
		print_r("<pre>");
		print_r($arService);
		print_r("</pre>");
	}
	$aMenuLinks[] = array(
		$arService["NAME"], 
		$arService["LANG_DIR"].$arService["IBLOCK_CODE"]."/".$arService["CODE"]."/", 
		array(), 
		array(), 
		"" 
	);
}

/*$aMenuLinks = Array(
	Array(
		"Грузоперевозки по России", 
		"/services/gruzoperevozki-po-rossii/", 
		Array(), 
		Array(), 
		"" 
	),
	Array(
		"Квартирный переезд", 
		"/services/kvartirnyy-pereezd/", 
		Array(), 
		Array(), 
		"" 
	),
	Array(
		"Офисный переезд", 
		"/services/ofisnyy-pereezd/", 
		Array(), 
		Array(), 
		"" 
	),
	Array(
		"Дачный переезд", 
		"/services/dachnyy-pereezd/", 
		Array(), 
		Array(), 
		"" 
	)
);*/
?>