<!DOCTYPE html>
<html>
<head>
		<title>Easy Accomodation</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body>

	<header>
	<div class="logo_menu">
	<div class="logo">

          <img src="logo.jpg">
    </div>

    <div class="my_menu">


        <ul>
			<li class="active"> <a href="index.php">Home</a></li>
			<li><a href="">Profile</a></li>
			<li><a href="#">Select Location</a>
				<ul>
					<li><a href="#">Uttara</a></li>
					<li><a href="#">Mirpur</a></li>
					<li><a href="#">Bashundhara</a></li>
					<li><a href="#">Shantinagar</a></li>
					<li><a href="#">Khilgaon</a></li>
                </ul>
            </li>
			<li><a href="#">Sign Out</a></li>
        </ul>


	</div>
	</div>

	<div class="container mt-5">
		<div class="row">
			<div class="col-md-12 pt-3">
				<div>
					<h1 class="h1ofProfile"><b><u>PROFILE<b></u></h1>
				</div>
				<div class="image-upload-wrap">
					<input class="file-upload-input" type="file" onchange="readURL(this);" accept="image/*"/>
					<div class="file-upload-content">
						<img class="file-upload-image" src="profile_pic.png" alt="your image"/>
						<div class="image-title-wrap">
						</div>
					</div>
				</div>

				<div>
					<p class="pro_info">Name: Anwar Shadaab</p>
					<p class="pro_info">Sex: Male</p>
					<p class="pro_info">Email Address: anwarshadaab96@gmail.com</p>
					<p class="pro_info">NID: $$$$$$$$$$$</p>
					<p class="pro_info">Address: Uttara</p>
					<p class="pro_info">Phone Number: 01784......</p>
					<p class="pro_info">Birthday: 26/12/....</p>

				</div>
			</div>
		</div>
	</div>

	</header>

</body>
</html>
