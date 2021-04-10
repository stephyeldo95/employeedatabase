<?php include("header.php");?>
	<div class="container">
		<form method="POST" action="action.php" onsubmit="return validate()">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="row">
					<div class="col-md-4">
						<span>Employee Code</span>
					</div>
					<div class="col-md-8">
						<div class="employeeform">
							<input type="text"id="empcode"  name="empcode" class="form-control form-group">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<span>Employee Name<span>
					</div>
					<div class="col-md-8">
						<div class="employeeform">
							<input type="text" name="empname" id="empname" class="form-control form-group">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<span>Department</span>
					</div>
					<div class="col-md-8">
						<div class="employeeform">
							<input type="text" id="department" name="department" class="form-control form-group">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<span>Age</span>
					</div>
					<div class="col-md-8">
						<div class="employeeform">
							<input type="number" id="age" name="age" class="form-control form-group">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<span>Experience in organization</span>
					</div>
					<div class="col-md-8">
						<div class="employeeform">
							<input type="text"id="exp" name="empexperience" class="form-control form-group">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						
					</div>
					<div class="co-md-8">
						<input type="submit" name="submit1" value="ADD" class="btn btn-primary">
					</div>
				</div>
				
			</div>
		</div>
		</form>
	</div>
</body>
</html>