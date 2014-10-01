<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Form</title>
	</head>
	<body>

		<form action="index.php?module=feeder" method="post">
          <h2>This is will process</h2>
		  Username: <input type="text" name="username" value="" /><br />
		  Password: <input type="password" name="password" value="" /><br />
			<br />
          <input type="button" name="button1" value="This is button"/>
		  <input type="submit" name="submit" value="Submit" />
          <input type="submit" name="submit" value="Cancel" />
		</form>
        <form action="form_processing.php?process=0" method="post">
          <h2>This is will NOT process</h2>
          Username: <input type="text" name="username" value="" /><br />
          Password: <input type="password" name="password" value="" /><br />
          <br />
          <input type="submit" name="submit" value="Submit" />
        </form>

	</body>
</html>
