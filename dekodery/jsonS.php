<?php

$array = [
    'name' => 'Jeff',
    'age' => 20,
    'active' => true,
    'colors' => ['red', 'blue'],
    'values' => [0=>'foo', 3=>'bar'],
];

// echo json_encode($array, JSON_PRETTY_PRINT);

$array2 = [
    'Jeff',
    20,
    true,
    ['red', 'blue']
];

// echo json_encode($array2,JSON_FORCE_OBJECT);


$array3 = ["tag"=>"<>", "amp"=>"&", "apos"=>"'", "quot"=>"\""];
// echo json_encode($array3, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT);

$array4 = ['23452', 23452];
// echo json_encode($array4,JSON_NUMERIC_CHECK);

$array5 = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4];
// echo json_encode($array5, JSON_PRETTY_PRINT);

$array6 = ['filename' => 'example.txt', 'path' => '/full/path/to/file/'];
// echo json_encode($array6, JSON_UNESCAPED_SLASHES);

$blues = ["english"=>"blue", "norwegian"=>"blå", "german"=>"blau"];
// echo json_encode($blues, JSON_UNESCAPED_UNICODE);

// $fp = fopen("foo.txt", "r");
// $array7 = ["file"=>$fp, "name"=>"foo.txt"];
// echo json_encode($array7, JSON_PARTIAL_OUTPUT_ON_ERROR);

$array8 = [5.0, 5.5];
// echo json_encode($array8, JSON_PRESERVE_ZERO_FRACTION);

$array9 = ["line"=>"\xe2\x80\xa8", "paragraph"=>"\xe2\x80\xa9"];
// echo json_encode($array9, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_LINE_TERMINATORS);


// $data = file_get_contents ("file.json");
//         $json = json_decode($data, true);
//         foreach ($json as $key => $value) {
//             if (!is_array($value)) {
//                 echo $key . '=>' . $value . '<br/>';
//             } else {
//                 foreach ($value as $key => $val) {
//                     echo $key . '=>' . $val . '<br/>';
//                 }
//             }
//         }



$data = file_get_contents ("file.json");
$json = json_decode($data, true);
echo $json['daily']['data'][0]['temperatureMax'];
echo '<pre>' . print_r($json, true) . '</pre>';
