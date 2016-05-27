<?php

if (isset($_GET['hello'])) {
    throwDobbelsteen();
}

function  createDobbelsteen($worp){
    $im = @imagecreate(200, 200) or die("Cannot Initialize new GD image stream");
    $background_color = imagecolorallocate($im, 0, 0, 0);  // Black
    $white = imagecolorallocate($im, 255, 255, 255);        // white

    if($worp == 4 OR $worp == 5 OR $worp == 6 OR $worp == 3 ){
        imagefilledellipse($im, 50, 50, 40, 40, $white);        //top left
        imagepng($im,"worp.png");
    }

    if($worp == 1 OR $worp == 3 OR $worp == 5){
        imagefilledellipse($im, 100, 100, 40, 40, $white);      //center
        imagepng($im,"worp.png");
    }

    if($worp == 2 OR $worp == 6){
        imagefilledellipse($im, 150, 100, 40, 40, $white);      //middel right
        imagepng($im,"worp.png");
    }

    if($worp == 4 OR $worp == 5 OR $worp == 6){
        imagefilledellipse($im, 50, 150, 40, 40, $white);       //bottom left
        imagepng($im,"worp.png");
    }

    if($worp == 3 OR $worp == 4 OR $worp == 5 OR $worp == 6){
        imagefilledellipse($im, 150, 150, 40, 40, $white);      //bottom right
        imagepng($im,"worp.png");
    }

    if($worp == 4 OR $worp == 5 OR $worp == 6){
        imagefilledellipse($im, 150, 50, 40, 40, $white);      //top right
        imagepng($im,"worp.png");
    }

    if($worp == 2 OR $worp == 6){
        imagefilledellipse($im, 50, 100, 40, 40, $white);       //middel left
        imagepng($im,"worp.png");
    }

    imagepng($im,$worp . ".png");
    imagedestroy($im);
}
?>

<?php

function throwDobbelsteen()
{
    for ($i = 0; $i < 5; $i++) {
        $worp = rand(1, 6);
        createDobbelsteen($worp, $i);
        print "<img src=" . $worp . "." . "png?" . date("U") . " >  ";
        //de complete worp is nodig in een array tbv score analyse
        //maak de array
        $aWorp[$i] = $worp;
    }

    echo "<br>";

    print_r($aWorp);
    $aScore = analyseWorp($aWorp);
    echo "<br>";
    rsort($aScore);
    print_r($aScore);

    if($aScore[0] == 2)
    {

        if($aScore[1] == 2)
        {
            ?><fieldset><div style="font-size: 2em;"><?php echo "you got Two Pair"; ?></div></fieldset><?php
        }
        else
        {
            ?><fieldset><div style="font-size: 2em;"><?php echo "you got One Pair"; ?></div></fieldset><?php
        }
    }

    if($aScore[0] == 3)
    {
        if($aScore[1] == 2)
        {
            ?><fieldset><div style="font-size: 2em;"><?php echo "you got a Full House"; ?></div></fieldset><?php
        }
        else
        {
            ?><fieldset><div style="font-size: 2em;"><?php echo "you got Three of a Kind"; ?></div></fieldset><?php
        }
    }

    if($aScore[0] == 4)
    {
        ?><fieldset><div style="font-size: 2em;"><?php echo "you got Carre"; ?></div></fieldset><?php
    }

    if($aScore[0] == 5)
    {
        ?><fieldset><div style="font-size: 2em;"><?php echo "you got Poker"; ?></div></fieldset><?php
    }

    if($aScore[0] == 1 AND $aScore[1] == 1 AND $aScore[2] == 1 AND $aScore[3] == 1 AND $aScore[4] == 1)
    {
        ?><fieldset><div style="font-size: 2em;"><?php echo "you got a Straight Flush"; ?></div></fieldset><?php
    }

    /*if($aScore[0] == 1 AND $aScore[1] == 1 AND $aScore[2] == 1 AND $aScore[3] == 1 AND $aScore[4] == 1 AND $aScore[5] == 0)
    {
        ?><fieldset><div style="font-size: 2em;"><?php echo "you got a Royal Straight Flush"; ?></div></fieldset><?php
    }*/
}

function analyseWorp($aWorp)
{
    $aScore = array (0,0,0,0,0,0,0);

    for ($i = 1 ; $i <= 6 ; $i++){//outer loop
        for ($j = 0 ; $j <5 ; $j++){//inner loop
            if ($aWorp[$j] == $i){
                $aScore[$i]++;
            }}}

    return $aScore;
}

?>

<html>
<br>
<br>
    <a href="Dice3.php?hello=true" style="text-decoration: none; color: white; background-color: black; padding: 3px 3px 3px 3px; margin-left: 40px;">Throw</a>
</html>
