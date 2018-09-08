<?php
	include 'db.php';

	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$username = $_POST['username'];
		if (empty($username)) {
			echo "<span class='text-warning'>Field can not be empty</span>";
		}else {
			$sql = "SELECT user_id FROM users WHERE username =  '$username' ";
			$result = mysqli_query($connection, $sql);

			$count = mysqli_num_rows($result);

			if ($count < 1 ){
				echo "<span class='text-white bg-success text-center form-control'><b>$username</b> is available</span>";
			}else {
				echo "<span class='bg-danger text-white text-center form-control'><b>$username</b> is not available</span>";
			}
		}
	}














?>