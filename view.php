<?php
$name = "";
if(empty($_GET["name"])){
    $name = "3playgames99";
} else {
    $name = $_GET["name"];
}

$url = "https://api.twitch.tv/kraken/channels/" . $name . "/follows?direction=DESC&limit=100&offset=0";
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $name ?></title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php
$rawJson = file_get_contents($url);
$json = json_decode($rawJson, true);
$followers = $json['follows'];
for($x = 0;$x < 100; $x++){
    $follower = $followers[$x]['user']['display_name'];
    if(is_null($follower)){
        break;
    }
    $imageURL = $followers[$x]['user']['logo'];
    if(is_null($imageURL)){
        $imageURL = "http://static-cdn.jtvnw.net/jtv_user_pictures/xarth/404_user_150x150.png";
    }
    echo "<div class='box'>";
        echo "<img src=" . $imageURL . " />";
        echo "<div class='name'>" . $follower . "</div>";
    echo "</div>";
    echo "&nbsp;";
}
?>
</body>
</html>
