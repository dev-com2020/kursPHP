<?php
error_reporting( E_ALL );
$mysliwi = array(
    'niedźwiedź', 'rekin', 'lew', 'tygrys',
    'orzeł', 'człowiek', 'kot', 'wilk'
);
$ofiary = array(
    'łosoś', 'foka', 'gazela', 'królik',
    'krowa', 'łoś', 'jeleń', 'indyk'
);
if ( isset( $_GET[ 'typ' ] ) ) {
    switch ( $_GET[ 'typ' ] ) {
        case 'mysliwy':
        print json_encode( $mysliwi[ array_rand( $mysliwi ) ] );
        break;
        case 'ofiara':
        print json_encode( $ofiary[ array_rand( $ofiary ) ] );
        break;
        default:
        print json_encode( 'brak' );
        break;
    }
}