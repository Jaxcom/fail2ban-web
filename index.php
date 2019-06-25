<!DOCTYPE html>
<html>
<head>
	<title>Fail2ban Web Management System</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" type="text/css" href="style.css">
	  <script type="text/javascript">
		//auto expand textarea
		function adjust_textarea(h) {
		    h.style.height = "20px";
		    h.style.height = (h.scrollHeight)+"px";
		}
	  </script>
</head>
<body>
	<div class="container">
		<h2>LOG IN</h2>
		<div class="form-style-8">
				<form method="POST"  action="index.php">
					<input type="text" class="field1" placeholder="Username" name="username"><br>
					<input type="password" class="field2" placeholder="Password" name="password"><br>
					<input type="submit" class="button" name="submit">
				</form>
		</div>
	</div>
</body>
</html>
