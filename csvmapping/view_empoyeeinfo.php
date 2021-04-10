<?php
include("header.php");
?>
	<div class="container">
		<h2 class="statichead">Employee Details</h2>
		<div class="row">
			<div class="col-md-12">
				<?php
					include("config.php");
					$dbObj = new Database();
					$employee=$dbObj->displayRecord();


				?>
				<table class="table table-bordered table-hover table-striped">
					
					<tr>
						<th>Employee Code</th>
						<th>Employee Name</th>
						<th>Department</th>
						<th>Age</th>
						<th>Experience</th>
					</tr>
					<?php
foreach ($employee as  $value) {
	
					?>
					<tr>
					<td><?php echo $value['empcode']?></td>
					<td><?php echo $value['empname']?></td>
					<td><?php echo $value['department']?></td>
					<td><?php echo $value['age']?></td>
					<td><?php echo $value['experience']?></td>
				</tr>
				<?php
			}?>
				</table>
			</div>
		</div>
	</div>
</body>
</html>