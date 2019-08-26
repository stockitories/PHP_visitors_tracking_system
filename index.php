<?php

include 'src/VisitorTracking.php';

# bad IP
$visitor = new VisitorTracking(function ($error) {
    var_dump($error);
}, '88.163.1sd83.16');


$visitor = new VisitorTracking(function ($error) {
    var_dump($error);
}, '76.185.141.126');

var_dump($visitor->city . ' ' . $visitor->country, $visitor->__toArray());
