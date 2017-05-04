<?include("config.php");include("login.php");?>
<!DOCTYPE html>
<html>
<head>
	<script
		src="https://code.jquery.com/jquery-3.2.1.min.js"
		integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
		crossorigin="anonymous"></script>
	<script src="chat.js"></script>
	<link href="chat.css" rel="stylesheet"/>
	<title>Chat Test Work</title>
</head>
<body>
<div id="content" style="margin-top:10px;height:100%;">

	<div class="chat">
		<div class="users">
			<?include("users.php");?>
		</div>
		<div class="chatbox">
			<?
			if(isset($_SESSION['user'])){
				include("chatbox.php");
			}else{
				$display_case=true;
				include("login.php");
			}
			?>
		</div>
	</div>
</div>
</body>
</html>