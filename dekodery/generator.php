<?php

$psy_tablica = array(
    array("imie" => "reksio",
    "kolor" => "brązowy",
    "rasa" => "beagle cross"
    ),
    array("imie" => "azor",
    "kolor" => "czarny",
    "rasa" => "lab cross"
    ),
    );
    $koty_tablica = array(
    array("imie" => "bzik",
    "kolor" => "brązowy",
    "rasa" => "tabby"
    ),
    );


    $zwierzeta = new SimpleXMLElement('<zwierzeta/>');
    $koty_xml = $zwierzeta->addChild('koty');
    $psy_xml = $zwierzeta->addChild('psy');
    foreach ($koty_tablica as $k) {
    $kot = $koty_xml->addChild('kot');
    foreach ($k as $klucz => $wartosc) {
    $tmp = $kot->addChild($klucz);
    $tmp->{0} = $wartosc;
    }
}
foreach ($psy_tablica as $p) {
$pies = $psy_xml->addChild('pies');
foreach ($p as $klucz => $wartosc) {
$tmp = $pies->addChild($klucz);
$tmp->{0} = $wartosc;
}
}
var_dump($zwierzeta);
$zwierzeta->asXML('zwierzeta2.xml');
print '<br/><br/>';
//sprawdzenie nowego pliku
var_dump(simplexml_load_file('zwierzeta2.xml'));