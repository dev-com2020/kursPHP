<?php

$xml = '<concerts><concert><title1>Czarodziejski
flet</title1><time>1329636600</time></concert><concert><title1>Cztery pory roku
Vivaldiego</title1><time>1329291000</time></concert><concert><title1>Requiem
Mozarta</title1><time>1330196400</time></concert></concerts>';

$concert_list = simplexml_load_string($xml);
// print_r($concert_list);

echo "<table><br>";
foreach($concert_list as $concert){
    echo "<tr><br>";
    echo "<td>" . $concert->title1 ."</td><br>";
    echo "<td>" . date('g:i,jS M',(string)$concert->time) . "</td><br>";
    echo "</tr>";
}
echo "</table>";

echo "Koncert na życzenie: " . $concert_list->concert[1]->title1;


