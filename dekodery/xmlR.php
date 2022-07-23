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

$xml_obiekt = new XMLReader();
$xml_obiekt->XML($xml);
$pies_rodzic = false;
while ($xml_obiekt->read()){
    if ($xml_obiekt->nodeType == XMLREADER::ELEMENT){
        if ($xml_obiekt->name =="kot"){
            $pies_rodzic = false;
        } elseif ($xml_obiekt->name == "pies"){
            $pies_rodzic = true;
        } else
        if ($xml_obiekt->name == "imie" && $pies_rodzic){
            $xml_obiekt->read();
            if ($xml_obiekt->nodeType == XMLREADER::TEXT) {
                print $xml_obiekt->value . "<br>";
                $pies_rodzic = false;
            }
        }
    }
}