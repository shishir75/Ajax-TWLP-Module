<?php
	include 'db.php';

	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$username = $_POST['username'];
		if (!empty($username)) {

			$sql = "SELECT * FROM search WHERE username LIKE  '%$username%' ";
			$result = mysqli_query($connection, $sql);

			$count = mysqli_num_rows($result);

			if ($count > 0 ){

			?>

				<table class="table table-striped table-hover table-bordered">
					<thead>
						<tr>
							<td>Username</td>
							<td>Name</td>
							<td>Email</td>
						</tr>
					</thead>
					<tbody>

					<?php while ($rows = mysqli_fetch_assoc($result)): ?>
						<tr>
							<td><?php echo $rows['username']; ?></td>
							<td><?php echo $rows['name']; ?></td>
							<td><?php echo $rows['email']; ?></td>
						</tr>
					<?php endwhile ?>

					</tbody>
				</table>



				<?php
			}
		}
	}














?>