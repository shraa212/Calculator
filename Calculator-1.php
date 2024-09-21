<html>
	<style>
		div{
			padding: 30px;
			background-color: #C0C0C0;
			margin-left: 610px;
			border-radius: 45px;
			box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;
			width: 235px;
			height: 255px;
			text-align: center;
		 }
		input[type=number]{
			padding: 7px;
			background-color: #00FFFF;
			border: 3px;
			box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;
			border-radius: 20px;
			text-align: center;
			width: 100px;
			height: 40px;
			margin-top: 10px;
		}
		input[type=submit]{
			padding: 7px;
			background-color: #FFA500;
			border: 3px;
			box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;
			border-radius:20px;
			text-align: center;
			width: 50px;
			height: 40px;
			margin-top: 7px;
		}
	</style>
	<head>
		<title>Calculator</title>
	</head>
	<?php
		if(isset($_POST['+']))
		{
			$a=$_POST['op1'];
			$b=$_POST['op2'];
			$c= $a + $b;
		}
		if(isset($_POST['-']))
		{
			$a=$_POST['op1'];
			$b=$_POST['op2'];
			$c= $a - $b;
		}
		if(isset($_POST['*']))
		{
			$a=$_POST['op1'];
			$b=$_POST['op2'];
			$c= $a * $b;
		}
		if(isset($_POST['/']))
		{
			$a=$_POST['op1'];
			$b=$_POST['op2'];
			$c= $a / $b;
		}
	?>
	<body>
		<br><center><h1><u>Arithmetic Calculator</u></h1></center>
		<div>
		<form method="POST">
			<input type="number" name="op1" id="op1">
			&nbsp; &nbsp; &nbsp;
			<input type="number" name="op2" id="op2">
			<br><br>
			<input type="submit" name="+" id="+" value="+">
			&nbsp; &nbsp;
			<input type="submit" name="-" id="-" value="-">
			<br><br>
			<input type="submit" name="*" id="*" value="*">
			&nbsp; &nbsp;
			<input type="submit" name="/" id="/" value="/">
			<br><br>
			<input type="number" name="result" id="result" value="<?php echo $c; ?>">
		</form>
		</div>
	</body>
</html>