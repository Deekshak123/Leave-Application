<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="signup.css">
</head>
<body>
<nav>
	<div class="logo">
		<p>Online Leave Application</p>
	</div>
	<ul>
		<li><a href="home.php">Home</a></li>
	</ul>
</nav>
<div style="height: 100px;width: 100%;"></div>
<form action="php/signup.php" method="post" class="form" align="center">
<h1 >Registration Form</h1>
<input type="text" class="textbox" name="fullname">
<label class="form-label">Fullname</label>
<input type="text" class="textbox5" name="username" style="margin-top: -5px;">
<label class="form-label5">Username</label>
<input type="text" class="textbox1" name="email" style="margin-top: -5px;">
<label class="form-label1">Email</label>
<input type="text" class="textbox2" name="phoneno" style="margin-top: -5px;">
<label class="form-label2">Phone no.</label>
<input type="Password" class="textbox3" name="" style="margin-top: -5px;">
<label class="form-label3">Password</label>
<input type="Password" class="textbox4" name="password" style="margin-top: -5px;">
<label class="form-label4">Confirm Password</label>
<label style="margin-right: 150px;">Gender
<input type="radio" value="male" name="gender" style="margin-left: 30px;">Male
<input type="radio" value="female" name="gender" style="margin-left: 30px;">Female
<input type="radio" value="nottosay" name="gender" style="margin-left: 30px;">Prefer Not to say
</label>
<label style="margin-right: -20px;margin-top: 20px;">City
<select class="select" name="city">
	<option>Select</option>
	<option>Agra</option>
	<option>Akbarpur</option>
	<option>Aligarh</option>
	<option>Amroha</option>
	<option>Azamgarh</option>
	<option>Bahraich</option>
	<option>Ballia</option>
	<option>Banda</option>
	<option>Barabanki</option>
	<option>Baraut</option>
	<option>Bareilly</option>
	<option>Basti</option>
	<option>Budaun</option>
	<option>Bulandshahr</option>
	<option>Chandausi</option>
	<option>Deoria</option>
	<option>Etah</option>
	<option>Etawah</option>
	<option>Faizabad</option>
	<option>Farrukhabad</option>
	<option>Fatehpur</option>
	<option>Firozabad</option>
	<option>Ghaziabad</option>
	<option>Ghazipur</option>
	<option>Gonda</option>
	<option>Gorakhpur</option>
	<option>Hapur</option>
	<option>Hardoi</option>
	<option>Hathras</option>
	<option>Jaunpur</option>
	<option>Jhansi</option>
	<option>Kanpur</option>
	<option>Kasganj</option>
	<option>Khurja</option>
	<option>Lakhimpur</option>
	<option>Lalitpur</option>
	<option>Lucknow</option>
	<option>Mainpur</option>
	<option>Mathura</option>
	<option>Mau</option>
	<option>Meerut</option>
	<option>Mirzapur</option>
	<option>Modinagar</option>
	<option>Moradabad</option>
	<option>Muzzafarnagar</option>
	<option>Noida</option>
	<option>Orai</option>
	<option>Pilibhit</option>
	<option>Prayagraj</option>
	<option>Raebareli</option>
	<option>Rampur</option>
	<option>Renukoot</option>
	<option>Saharanpur</option>
	<option>Sambhal</option>
	<option>Shahjahanpur</option>
	<option>Shamli</option>
	<option>Shikohabad</option>
	<option>Sitapur</option>
	<option>Sultanpur</option>
	<option>Unnao</option>
	<option>Varanasi</option>
</select>
<label style="margin-left: 100px;">Department
<select class="select" name="department">
	<option>Select</option>
	<option>B.Pharma</option>
	<option>B.Tech</option>
	<option>BBA</option>
	<option>BCA</option>
	<option>MBA</option>
	<option>MCA</option>
	<option>Polytechnic</option>
</select>
</label>
</label>
<button class="submit" type="submit" name="submit">Submit</button>
</form>
</body>
</html>