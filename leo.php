<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

$page = file_get_contents("alianz.xml");
//$xml      = simplexml_load_string($page);
$xml = new SimpleXMLElement($page);

$main = array();

$root = $xml->xpath("KOC_SIRKET/ACENTE/URUN_LIST/URUN/POLICE/ZEYIL");
foreach ($root as $itm) {
    $sub[] = $itm->POLICE_NO;
    $sub[] = $itm->ZEYIL_NO;
    $sub[] = $itm->KOMISYON;
    array_push($main, $sub);
}
echo "<pre>";
print_r($main);
echo "</pre>";
//$root = $xml->xpath("KOC_SIRKET/ACENTE/URUN_LIST/URUN/POLICE/ZEYIL/POLICE_NO");
/*$count = count($root);
print_r($root->POLICE_NO);
echo $count;*/

/*$dat["zeyno"] = $xml->xpath("KOC_SIRKET/ACENTE/URUN_LIST/URUN/POLICE/ZEYIL/ZEYIL_NO");
$dat["komm"] = $xml->xpath("KOC_SIRKET/ACENTE/URUN_LIST/URUN/POLICE/ZEYIL/KOMISYON");

$arr = array_push($data, $dat);

echo "<pre>";
print_r($arr);
echo "</pre>";*/
/*$products = $xml->xpath("/KOC_SIRKET/ACENTE/URUN_LIST/URUN/POLICE/ZEYIL");
print_r($products);*/

/*$doc = new DOMDocument;
$doc->loadxml("alianz.xml");

$xpath = new DOMXPath($doc);
$nset = $xpath->query('/KOC_SIRKET/ACENTE/URUN_LIST/URUN/POLICE/ZEYIL');*/
/*$page = file_get_contents("alianz.xml");
$doc = new DOMDocument();
$doc->loadXML($page);

$status = $doc->getElementsByTagName('ZEYIL');*/
//echo $status."\n";
