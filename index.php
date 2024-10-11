<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio 22</title>
</head>
<body>
    <?php

        $video1 = array("title" => "Me at the zoo", "id" => "jNQXAC9IVRw");
        $video2 = array("title"=> "10 HOURS OF SPONGEBOB DANCING", "id" => "dMXJHw2z8s4");
        $video3 = array("title"=> "MINECRAFT SPEEDRUN WORLD RECORD (7:01)", "id"=> "E3t24Urba6Y");

        $myVideos = [$video1, $video2, $video3];

        function insertYTVideo($vid, $larPerc, $altPx) {
            $out_vid = "<h2> ". $vid["title"] ." </h2>";
            $out_vid .= "<iframe src='https://www.youtube.com/embed/".$vid["id"]."' style='width: {$larPerc}%; hight: {$altPx}px; border: none;' title='iframe_video' </iframe> ";
            return $out_vid;
        }

        $init_lar = 50;
        $init_alt = 250;
        foreach($myVideos as $v) {
            echo insertYTVideo($v, $init_lar, $init_alt);
            $init_lar +=25;
            $init_alt += 125;
        }

    ?>
</body>
</html>