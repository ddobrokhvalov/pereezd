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
		"�������������� �� ������", 
		"/services/gruzoperevozki-po-rossii/", 
		Array(), 
		Array(), 
		"" 
	),
	Array(
		"���������� �������", 
		"/services/kvartirnyy-pereezd/", 
		Array(), 
		Array(), 
		"" 
	),
	Array(
		"������� �������", 
		"/services/ofisnyy-pereezd/", 
		Array(), 
		Array(), 
		"" 
	),
	Array(
		"������ �������", 
		"/services/dachnyy-pereezd/", 
		Array(), 
		Array(), 
		"" 
	)
);*/
?>