<?php

$xml = <<<XML
<zwierzeta>
<pies>
<imie id="1">reksio</imie>
<kolor>brązowy</kolor>
<rasa>beagle cross</rasa>
</pies>
<kot>
<imie id="2">bzik</imie>
<kolor>brązowy</kolor>
<rasa>tabby</rasa>
</kot>
<pies>
<imie id="3">azor</imie>
<kolor>czarny</kolor>
<rasa>lab cross</rasa>
</pies>
</zwierzeta>
XML;


$dom_xml = new DOMDocument();
$dom_xml->loadXML($xml);
$xpath = new DOMXPath($dom_xml);
$wyniki = $xpath->query("*/imie");

foreach ($wyniki as $element){
    
    print $element->nodeValue;

}