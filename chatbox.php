<?
include("config.php");
if(isset($_SESSION['user'])){
    ?>
    <h2>Чат</h2>
    <a style="right: 20px;top: 20px;position: absolute;cursor: pointer;" href="logout.php">Выйти</a>
    <div class='msgs'>
        <?include("msgs.php");?>
    </div>
    <form id="msg_form">
        <input name="msg" size="30" type="text"/>
        <button>Send</button>
    </form>
    <?
}
?>