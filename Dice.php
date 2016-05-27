<?php

function  Dice1(){
    $im = @imagecreate(200, 200) or die("Cannot Initialize new GD image stream");
    $background_color = imagecolorallocate($im, 0, 0, 0);  // Black

    $white = imagecolorallocate($im, 255, 255, 255);        // white
    $stip1 = imagefilledellipse($im, 100, 100, 40, 40, $white);      //center

    imagepng($im,"image.png");
    imagedestroy($im);
}

function  Dice2(){
    $im = @imagecreate(200, 200) or die("Cannot Initialize new GD image stream");
    $background_color = imagecolorallocate($im, 0, 0, 0);  // Black

    $white = imagecolorallocate($im, 255, 255, 255);        // white
    $stip3 = imagefilledellipse($im, 150, 100, 40, 40, $white);      //middel right
    $stip6 = imagefilledellipse($im, 50, 100, 40, 40, $white);       //middel left

    imagepng($im,"image.png");
    imagedestroy($im);
}

function  Dice3(){
    $im = @imagecreate(200, 200) or die("Cannot Initialize new GD image stream");
    $background_color = imagecolorallocate($im, 0, 0, 0);  // Black

    $white = imagecolorallocate($im, 255, 255, 255);        // white
    $stip1 = imagefilledellipse($im, 100, 100, 40, 40, $white);      //center
    $stip2 = imagefilledellipse($im, 150, 150, 40, 40, $white);      //bottom right
    $stip7 = imagefilledellipse($im, 50, 50, 40, 40, $white);        //top left

    imagepng($im,"image.png");
    imagedestroy($im);
}

function  Dice4(){
    $im = @imagecreate(200, 200) or die("Cannot Initialize new GD image stream");
    $background_color = imagecolorallocate($im, 0, 0, 0);  // Black

    $white = imagecolorallocate($im, 255, 255, 255);        // white
    $stip2 = imagefilledellipse($im, 150, 150, 40, 40, $white);      //bottom right
    $stip4 = imagefilledellipse($im, 150, 50, 40, 40, $white);      //top right
    $stip5 = imagefilledellipse($im, 50, 150, 40, 40, $white);       //bottom left
    $stip7 = imagefilledellipse($im, 50, 50, 40, 40, $white);        //top left

    imagepng($im,"image.png");
    imagedestroy($im);
}

function  Dice5(){
    $im = @imagecreate(200, 200) or die("Cannot Initialize new GD image stream");
    $background_color = imagecolorallocate($im, 0, 0, 0);  // Black

    $white = imagecolorallocate($im, 255, 255, 255);        // white
    $stip1 = imagefilledellipse($im, 100, 100, 40, 40, $white);      //center
    $stip2 = imagefilledellipse($im, 150, 150, 40, 40, $white);      //bottom right
    $stip4 = imagefilledellipse($im, 150, 50, 40, 40, $white);      //top right
    $stip5 = imagefilledellipse($im, 50, 150, 40, 40, $white);       //bottom left
    $stip7 = imagefilledellipse($im, 50, 50, 40, 40, $white);        //top left

    imagepng($im,"image.png");
    imagedestroy($im);
}

function  Dice6(){
    $im = @imagecreate(200, 200) or die("Cannot Initialize new GD image stream");
    $background_color = imagecolorallocate($im, 0, 0, 0);  // Black

    $white = imagecolorallocate($im, 255, 255, 255);        // white
    $stip2 = imagefilledellipse($im, 150, 150, 40, 40, $white);      //bottom right
    $stip3 = imagefilledellipse($im, 150, 100, 40, 40, $white);      //middel right
    $stip4 = imagefilledellipse($im, 150, 50, 40, 40, $white);      //top right
    $stip5 = imagefilledellipse($im, 50, 150, 40, 40, $white);       //bottom left
    $stip6 = imagefilledellipse($im, 50, 100, 40, 40, $white);       //middel left
    $stip7 = imagefilledellipse($im, 50, 50, 40, 40, $white);        //top left

    imagepng($im,"image.png");
    imagedestroy($im);
}

function throwDice (){
    $worp = "Dice" . rand(1, 6) . "()";
    $worp;
    print "<img src=image.png?".date("U").">";
}

throwDice();
?>