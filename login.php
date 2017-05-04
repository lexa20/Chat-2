<?
if(isset($_POST['name']) && !isset($display_case)){
    $name=htmlspecialchars($_POST['name']);
    if($name!=""){
        $sql=$dbh->prepare("SELECT name FROM chatters WHERE name=?");
        $sql->execute(array($name));
        if($sql->rowCount()!=0){
            $ermsg="<h2 class='error'>Имя уже существует. <a href='index.php'>Попробуйте другое.</a></h2>";
        }else{
            $sql=$dbh->prepare("INSERT INTO chatters (name,seen) VALUES (?,NOW())");
            $sql->execute(array($name));
            $_SESSION['user']=$name;
        }
    }else{
        $ermsg="<h2 class='error'><a href='index.php'>Введите имя.</a></h2>";
    }
}elseif(isset($display_case)){
    if(!isset($ermsg)){
        ?>
        <h2>Введите имя</h2>
        <br/><br/>
        <form action="index.php" method="POST">
            <div>Ваше имя : <input name="name" placeholder="Алексей"/></div>
            <button>Подтвердить</button>
        </form>
        <?
    }else{
        echo $ermsg;
    }
}
?>