<?php

if (preg_match('/^abcd$/','abcdabcdabcd'))
{
    echo "Wzorzec 'abc' pasuje do ciągu znaków abcdabcdabcd."
} else {
    echo "Błąd: Wzorzec nie pasuje do ciągu znaków."
}


if (preg_match('/Ka.ol/','OchKarol'))
if (preg_match('/^K.r./','Kura'))
if (preg_match('/Kar*ol/','Karrrrrrol'))
if (preg_match('/Ka+rol/','Kaaaaaarol'))
if (preg_match('/Ka?rol$/','xKrol'))

if (preg_match('/^(Ka)+rol$/','KaKarol'))
if (preg_match('/^(Ka)+(ro)?l$/','Karol'))
if (preg_match('/^[A-Z]+a?(rol)/','Karol'))
if (preg_match('/^Kar{3}ol$/','Karrrol'))
if (preg_match('/Och(Karol|Robert)$/','OchKarol'))
if (preg_match('/^K{1,2}arol$/','KKarol'))

// login ([a-z|A-Z|0-9]{4,20})
// serwer ([a-z|A-Z|0-9]{2,10})
// domeny (pl|gr|com)
// mail /^([a-z|A-Z|0-9]{4,20})@([a-z|A-Z|0-9]{2,10})\\.(pl|gr|com)$/
// 
// 
// 
if (isset($_GET['email']))
{
    $email = $_GET['email'];
    $wynik = preg_match('/^([a-z|A-Z|0-9]{4,20})@([a-z|A-Z|0-9]{2,10})\\.(pl|gr|com)$/', $email);
    
    if ($wynik)
    {
        echo "Wpisany adres jest poprawny! :)";
    }
    else echo "Błąd: proszę wpisać poprawny adres email!";

}

$string = 'XYZ';
if (eregi('z', $string)) {
    echo "'$string' zawiera a 'z' lub 'Z'!";
}

$password = "abc";
   
if (! eregi ("[[:alnum:]]{8,10}", $password))
{
   print "Invalid password! Passwords must be from 8 - 10 chars";
} else {
   print "Valid password";
}
