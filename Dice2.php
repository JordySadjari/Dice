<?php

function  Dobbelsteen1($worp1){
    $im = @imagecreate(200, 200) or die("Cannot Initialize new GD image stream");
    $background_color = imagecolorallocate($im, 0, 0, 0);  // Black
    $white = imagecolorallocate($im, 255, 255, 255);        // white

    if($worp1 == 4 OR $worp1 == 5 OR $worp1 == 6 OR $worp1 == 3 ){
        imagefilledellipse($im, 50, 50, 40, 40, $white);        //top left
        imagepng($im,"image1.png");
    }

    if($worp1 == 1 OR $worp1 == 3 OR $worp1 == 5){
        imagefilledellipse($im, 100, 100, 40, 40, $white);      //center
        imagepng($im,"image1.png");
    }

    if($worp1 == 2 OR $worp1 == 6){
        imagefilledellipse($im, 150, 100, 40, 40, $white);      //middel right
        imagepng($im,"image1.png");
    }

    if($worp1 == 4 OR $worp1 == 5 OR $worp1 == 6){
        imagefilledellipse($im, 50, 150, 40, 40, $white);       //bottom left
        imagepng($im,"image1.png");
    }

    if($worp1 == 3 OR $worp1 == 4 OR $worp1 == 5 OR $worp1 == 6){
        imagefilledellipse($im, 150, 150, 40, 40, $white);      //bottom right
        imagepng($im,"image1.png");
    }

    if($worp1 == 4 OR $worp1 == 5 OR $worp1 == 6){
        imagefilledellipse($im, 150, 50, 40, 40, $white);      //top right
        imagepng($im,"image1.png");
    }

    if($worp1 == 2 OR $worp1 == 6){
        imagefilledellipse($im, 50, 100, 40, 40, $white);       //middel left
        imagepng($im,"image1.png");
    }

    imagepng($im,"image1.png");
    imagedestroy($im);
}

function  Dobbelsteen2($worp2){
    $im = @imagecreate(200, 200) or die("Cannot Initialize new GD image stream");
    $background_color = imagecolorallocate($im, 0, 0, 0);  // Black
    $white = imagecolorallocate($im, 255, 255, 255);        // white

    if($worp2 == 4 OR $worp2 == 5 OR $worp2 == 6 OR $worp2 == 3 ){
        imagefilledellipse($im, 50, 50, 40, 40, $white);        //top left
        imagepng($im,"image2.png");
    }

    if($worp2 == 1 OR $worp2 == 3 OR $worp2 == 5){
        imagefilledellipse($im, 100, 100, 40, 40, $white);      //center
        imagepng($im,"image2.png");
    }

    if($worp2 == 2 OR $worp2 == 6){
        imagefilledellipse($im, 150, 100, 40, 40, $white);      //middel right
        imagepng($im,"image2.png");
    }

    if($worp2 == 4 OR $worp2 == 5 OR $worp2 == 6){
        imagefilledellipse($im, 50, 150, 40, 40, $white);       //bottom left
        imagepng($im,"image2.png");
    }

    if($worp2 == 3 OR $worp2 == 4 OR $worp2 == 5 OR $worp2 == 6){
        imagefilledellipse($im, 150, 150, 40, 40, $white);      //bottom right
        imagepng($im,"image2.png");
    }

    if($worp2 == 4 OR $worp2 == 5 OR $worp2 == 6){
        imagefilledellipse($im, 150, 50, 40, 40, $white);      //top right
        imagepng($im,"image2.png");
    }

    if($worp2 == 2 OR $worp2 == 6){
        imagefilledellipse($im, 50, 100, 40, 40, $white);       //middel left
        imagepng($im,"image2.png");
    }

    imagepng($im,"image2.png");
    imagedestroy($im);
}

function  Dobbelsteen3($worp3){
    $im = @imagecreate(200, 200) or die("Cannot Initialize new GD image stream");
    $background_color = imagecolorallocate($im, 0, 0, 0);  // Black
    $white = imagecolorallocate($im, 255, 255, 255);        // white

    if($worp3 == 4 OR $worp3 == 5 OR $worp3 == 6 OR $worp3 == 3 ){
        imagefilledellipse($im, 50, 50, 40, 40, $white);        //top left
        imagepng($im,"image3.png");
    }

    if($worp3 == 1 OR $worp3 == 3 OR $worp3 == 5){
        imagefilledellipse($im, 100, 100, 40, 40, $white);      //center
        imagepng($im,"image3.png");
    }

    if($worp3 == 2 OR $worp3 == 6){
        imagefilledellipse($im, 150, 100, 40, 40, $white);      //middel right
        imagepng($im,"image3.png");
    }

    if($worp3 == 4 OR $worp3 == 5 OR $worp3 == 6){
        imagefilledellipse($im, 50, 150, 40, 40, $white);       //bottom left
        imagepng($im,"image3.png");
    }

    if($worp3 == 3 OR $worp3 == 4 OR $worp3 == 5 OR $worp3 == 6){
        imagefilledellipse($im, 150, 150, 40, 40, $white);      //bottom right
        imagepng($im,"image3.png");
    }

    if($worp3 == 4 OR $worp3 == 5 OR $worp3 == 6){
        imagefilledellipse($im, 150, 50, 40, 40, $white);      //top right
        imagepng($im,"image3.png");
    }

    if($worp3 == 2 OR $worp3 == 6){
        imagefilledellipse($im, 50, 100, 40, 40, $white);       //middel left
        imagepng($im,"image3.png");
    }

    imagepng($im,"image3.png");
    imagedestroy($im);
}

function  Dobbelsteen4($worp4){
    $im = @imagecreate(200, 200) or die("Cannot Initialize new GD image stream");
    $background_color = imagecolorallocate($im, 0, 0, 0);  // Black
    $white = imagecolorallocate($im, 255, 255, 255);        // white

    if($worp4 == 4 OR $worp4 == 5 OR $worp4 == 6 OR $worp4 == 3 ){
        imagefilledellipse($im, 50, 50, 40, 40, $white);        //top left
        imagepng($im,"image4.png");
    }

    if($worp4 == 1 OR $worp4 == 3 OR $worp4 == 5){
        imagefilledellipse($im, 100, 100, 40, 40, $white);      //center
        imagepng($im,"image4.png");
    }

    if($worp4 == 2 OR $worp4 == 6){
        imagefilledellipse($im, 150, 100, 40, 40, $white);      //middel right
        imagepng($im,"image4.png");
    }

    if($worp4 == 4 OR $worp4 == 5 OR $worp4 == 6){
        imagefilledellipse($im, 50, 150, 40, 40, $white);       //bottom left
        imagepng($im,"image4.png");
    }

    if($worp4 == 3 OR $worp4 == 4 OR $worp4 == 5 OR $worp4 == 6){
        imagefilledellipse($im, 150, 150, 40, 40, $white);      //bottom right
        imagepng($im,"image4.png");
    }

    if($worp4 == 4 OR $worp4 == 5 OR $worp4 == 6){
        imagefilledellipse($im, 150, 50, 40, 40, $white);      //top right
        imagepng($im,"image4.png");
    }

    if($worp4 == 2 OR $worp4 == 6){
        imagefilledellipse($im, 50, 100, 40, 40, $white);       //middel left
        imagepng($im,"image4.png");
    }

    imagepng($im,"image4.png");
    imagedestroy($im);
}

function  Dobbelsteen5($worp5){
    $im = @imagecreate(200, 200) or die("Cannot Initialize new GD image stream");
    $background_color = imagecolorallocate($im, 0, 0, 0);  // Black
    $white = imagecolorallocate($im, 255, 255, 255);        // white

    if($worp5 == 4 OR $worp5 == 5 OR $worp5 == 6 OR $worp5 == 3 ){
        imagefilledellipse($im, 50, 50, 40, 40, $white);        //top left
        imagepng($im,"image5.png");
    }

    if($worp5 == 1 OR $worp5 == 3 OR $worp5 == 5){
        imagefilledellipse($im, 100, 100, 40, 40, $white);      //center
        imagepng($im,"image5.png");
    }

    if($worp5 == 2 OR $worp5 == 6){
        imagefilledellipse($im, 150, 100, 40, 40, $white);      //middel right
        imagepng($im,"image5.png");
    }

    if($worp5 == 4 OR $worp5 == 5 OR $worp5 == 6){
        imagefilledellipse($im, 50, 150, 40, 40, $white);       //bottom left
        imagepng($im,"image5.png");
    }

    if($worp5 == 3 OR $worp5 == 4 OR $worp5 == 5 OR $worp5 == 6){
        imagefilledellipse($im, 150, 150, 40, 40, $white);      //bottom right
        imagepng($im,"image5.png");
    }

    if($worp5 == 4 OR $worp5 == 5 OR $worp5 == 6){
        imagefilledellipse($im, 150, 50, 40, 40, $white);      //top right
        imagepng($im,"image5.png");
    }

    if($worp5 == 2 OR $worp5 == 6){
        imagefilledellipse($im, 50, 100, 40, 40, $white);       //middel left
        imagepng($im,"image5.png");
    }

    imagepng($im,"image5.png");
    imagedestroy($im);
}


$worp1 = rand(1, 6);
Dobbelsteen1($worp1);
print "<img src=image1.png?".date("U").">";
echo "<br>";
echo "<br>";
$worp2 = rand(1, 6);
Dobbelsteen2($worp2);
print "<img src=image2.png?".date("U").">";
echo "<br>";
echo "<br>";
$worp3 = rand(1, 6);
Dobbelsteen3($worp3);
print "<img src=image3.png?".date("U").">";
echo "<br>";
echo "<br>";
$worp4 = rand(1, 6);
Dobbelsteen4($worp4);
print "<img src=image4.png?".date("U").">";
echo "<br>";
echo "<br>";
$worp5 = rand(1, 6);
Dobbelsteen5($worp5);
print "<img src=image5.png?".date("U").">";


?>