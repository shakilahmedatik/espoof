<?php
if (isset($_POST['ajax'])) {
$to = $_POST['to'];
$subject = $_POST['sub'];
$msg = $_POST['msg'];
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: ".$_POST['name']."<".$_POST['from'].">";

$send = mail($to,$subject,$msg,$headers);

if ($send) {
	echo "<p id='success'>✔️  $to</p>";
}else{
	echo "<p id='error'>❌  $to</p>";
}
exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto" rel="stylesheet">
	<title>Email Spoofer</title>
	<link href="style.css" rel="stylesheet">
</head>
<body>
<form action="" method="post">
<div class="main" style="margin-top: 100px;">
	<h1 id="title">Email Spoofer</h1>
	<div>
		<input type="text" name="from" id="from" placeholder="From Email">
		<input type="text" name="name" id="name" placeholder="From Name">
	</div><br>
	<div>
		<input type="text" name="sub" id="sub" placeholder="Subject">
	</div><br>
	<div>
		<textarea name="msg" id="msg" placeholder="Message Text or HTML code"></textarea>
		<textarea name="to" id="to" placeholder="Mail List"></textarea>
	</div>
	<div><br><br>
		<button id="btn" onclick="return false">SEND</button>
	</div>
	<div id="result"></div>
</div>
</form>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="app.js"></script>
</body>
</html>
