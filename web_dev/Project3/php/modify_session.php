<!DOCTYPE html>
<html>

	<head>
		<title>Get/modify</title>
		<link rel="stylesheet" type="text/css" href="..//css/style.css">
		<?php 
			session_start();
		?>
	</head>

	<body>
		<div class="navbar">
			<a href="..//index.html">home</a>

			<div class="dropdown">
				<button class="dropbtn">form
					<i class="fa fa-caret-down"></i>
				</button>
				<div class="dropdown-content">
					<a href="get.html">Get</a>
				    <a href="post.html">Post</a>
			        <a href="file_upload.html">file upload</a>
				</div>
			</div>

			<div class="dropdown">
				<button class="dropbtn">cookies
					<i class="fa fa-caret-down"></i>
				</button>
				<div class="dropdown-content">
					<a href="enabled_disabled.html">enabled/disabled</a>
				    <a href="create_retrieve.html">create/retrieve</a>
			        <a href="modify_delete.html">modify/delete</a>
				</div>
			</div>

			<div class="dropdown">
				<button class="dropbtn">sessions
					<i class="fa fa-caret-down"></i>
				</button>
				<div class="dropdown-content">
					<a href="start.html">start</a>
				    <a href="get_modify.html">get/modify</a>
			        <a href="destroy.html">destroy</a>
				</div>
			</div>

			<div class="dropdown">
				<button class="dropbtn">date/time
					<i class="fa fa-caret-down"></i>
				</button>
				<div class="dropdown-content">
					<a href="today_is.html">today is</a>
				    <a href="timezone.html">timezone</a>
			        <a href="timestamp.html">timestamp</a>
				</div>
			</div>

			<div class="dropdown">
				<button class="dropbtn">database
					<i class="fa fa-caret-down"></i>
				</button>
				<div class="dropdown-content">
					<a href="../menu/connect.html">Connect</a>
					<a href="../menu/create_db.html">Create DataBase</a>
					<a href="../menu/create_table.html">Create table</a>
					<a href="../menu/create_data.html">Create data</a>
					<a href="../menu/read_data.html">Read data</a>
					<a href="../menu/update_data.html">Update data</a>
					<a href="../menu/delete_data.html">Delete data</a>
				</div>
				
			</div>

			<a href="phpinfo.html">Phpinfo</a>
		</div>

		<p style="color: white">
			<?php
				// to change a session variable, just overwrite it 
				$_SESSION["favcolor"] = "yellow";
				print_r($_SESSION);
			?>
		</p>

	</body>

</html>