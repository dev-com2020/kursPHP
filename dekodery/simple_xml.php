<?php
$simplexml = new SimpleXMLElement(
'<?xml version="1.0"?><concerts />');

$concert1 = $simplexml->addChild('concert');
$concert1->addChild("title1", "Czarodziejski flet");
$concert1->addChild("time", 1329636600);

$concert2 = $simplexml->addChild('concert');
$concert2->addChild("title1", "Cztery pory roku Vivaldiego");
$concert2->addChild("time", 1329291000);

$concert3 = $simplexml->addChild('concert');
$concert3->addChild("title1", "Requiem Mozarta");
$concert3->addChild("time", 1330196400);

echo $simplexml->asXML();