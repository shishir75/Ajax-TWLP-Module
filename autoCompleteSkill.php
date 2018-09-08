<?php
	include 'db.php';

	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$skill = $_POST['skill'];
		if (empty($skill)) {
			echo "<span class='text-white bg-danger text-center form-control'>Field can not be empty</span>";
		}else {
			$sql = "SELECT * FROM skills WHERE skill LIKE  '%$skill%' ";
			$result = mysqli_query($connection, $sql);

			$count = mysqli_num_rows($result);

			if ($count < 1 ){
				echo "<span class='text-white bg-info text-center form-control'>No Result Found</span>";
			}else {

			?>

			<div class="skill">
				<ul>
					<?php while ($rows = mysqli_fetch_assoc($result)): ?>
						<li><?php echo $rows['skill']; ?></li>
					<?php endwhile ?>
				</ul>
			</div>


			<?php


			}
		}
	}



?>

