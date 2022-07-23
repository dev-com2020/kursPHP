<?php

// $concerts = array(
//     array("title" => "Czarodziejski flet",
//     "time" => 1329636600),
//     array("title" => "Cztery pory roku Vivaldiego",
//     "time" => 1329291000),
//     array("title" => "Requiem Mozarta",
//     "time" => 1330196400)
//     );

//     echo json_encode($concerts);

// $jsonData = '[{"title":"Czarodziejski flet","time":1329636600},{"title":"Cztery pory roku Vivaldiego","time":1329291000},{"title":"Requiem Mozarta","time":1330196400}]';
// $concerts = json_decode($jsonData, true);
// print_r($concerts);


// [
//     { "dimensions": {
//     "width":800, "height":600
//     },
//     "format":"jpg",
//     "alpha_channel": false,
//     "filename":"clouds.jpg"
//     },
//     { "dimensions": {
//     "width":40, "height":40
//     },
//     "format":" png",
//     "alpha_channel":true,
//     "filename":"icon.jpg"
//     }
//     ]

//     { "red": [128,128,255,255,255,128,128,0,0],
//         "green": [0, 0, 0, 0, 0, 0, 0,0,0],
//         "blue": [128,128,255,255,255,128,128,0,0]
//         }

// $php_typy_danych = array(4.1, 3, NULL, true, false, "cześć", new StdClass(), array());
$ksiazki = array(
    array("autor" => "Lewis Carroll",
    "tytuł" => "Alicja w krainie czarów",
    "rok" => 1865),
    array("autor" => "Yann Martel",
    "tytuł" => "Życie Pi",
    "rok" => 2001),
    array("autor" =>"Junot Diaz",
    "tytuł" => "Krótki i niezwykły żywot Oscara Wao",
    "rok" => 2007),
    array("autor" => "Joseph Heller",
    "tytuł" => "Paragraf 22",
    "rok" => 1961),
    array("autor" => "Timothy Findley",
    "tytuł" => "Pielgrzym",
    "rok" => 1999),
    array("autor" => "Fiodor Dostojewski",
    "tytuł" => "Bracia Karamazow",
    "rok" => 1880),
    );
$json = json_encode($ksiazki);
$zdekodowane = json_decode($json, true);
?>
<p>Reprezentacja w JSON:<br/>
<pre>
    <?php var_dump($json);?>
</pre>
</p>
<p>Reprezentacja w PHP:<br/>
<pre>
    <?php var_dump($zdekodowane);?>
</pre>
</p>