<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>My Company</title>
</head>

<body>
	<div class="form1">
		<div class="header">
			<h1>Registration for Beneficiaries</h1>
		</div>

		<table>
			<form method="post" name="register">

				<tr>
					<td>
						<label>Full Name</label>
					</td>
					<td>
						<input type="text" name="benef_name" required>
					</td>
				</tr>
				<tr>
					<td><label>Email Id</label></td>
					<td><input type="email" name="benef_emailid" required></td>
				</tr>
				<tr>
					<td><label>Mobile Number</label></td>
					<td><input type="int" name="benef_mobilenumber" required></td>
				</tr>
				<tr>
					<td><label>Password</label></td>
					<td><input type="password" name="benef_password1" required></td>
				</tr>
				<tr>
					<td><label>Confirm Password</label></td>
					<td><input type="password" name="benef_password2" required></td>
				</tr>
				<tr>
					<td><label>Location</label></td>
					<td><input type="text" name="benef_location" required></td>
				</tr>
				<tr>
					<td><label>Category</label></td>
					<td>
						<select id="benef_category">
							<option value="" selected>None</option>
							<option value="farmwaste" selected>Farmwaste</option>
							<option value="handicraft" selected>Handicraft</option>
							<option value="farmproduce" selected>Farm Produce</option>
							<option value="pottery" selected>Pottery</option>
						</select>
					</td>
				</tr>
		</table>
		<div><button type="submit" class="btn btn1" name="submit_register_benef">REGISTER</button></div>

		<a href="benef_login.php">Already a member? Login</a>
		</form>

	</div>
</body>

</html>