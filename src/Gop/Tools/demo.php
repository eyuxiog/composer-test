<?php
    require_once './vendor/autoload.php';
    use Gop\Tools\Count;

    $res = Count::math(2323.231,'/', 234,3);
    var_dump($res);
