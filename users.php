<?
include("config.php");
echo "<h2>Онлайн</h2>";
$sql=$dbh->prepare("SELECT name FROM chatters");
$sql->execute();
while($r=$sql->fetch()){
    echo "<div class='user'>{$r['name']}</div>";
}
?>