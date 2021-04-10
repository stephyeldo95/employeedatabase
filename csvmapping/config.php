<?php
class Database 
	{
		private $servername = "localhost";
		private $username   = "root";
		private $password   = "";
		private $dbname = "testing";
		public $con;
		public $employeTable = "employee_info";

		public function __construct()
		{
			try {
				$this->con = new mysqli($this->servername, $this->username, $this->password, $this->dbname);	
			} catch (Exception $e) {
				echo $e->getMessage();
			}
		}

		// Insert customer data into customer table
		public function insertRecond($empcode, $empname, $department, $age,$exp)
		{
			$sql = "INSERT INTO $this->employeTable (empcode, empname, department, age,experience) VALUES('$empcode','$empname','$department','$age','$exp')";
			//echo $sql;
			$query = $this->con->query($sql);
			if ($query) {

				echo "<script>alert('Submitted Sucessfully');window.location.href='employee_details.php'</script>";
				//return true;
			}else{
				return false;
			}
		}
		public function displayRecord()
		{
			$sql = "SELECT * FROM $this->employeTable";
			$query = $this->con->query($sql);
			$data = array();
			if ($query->num_rows > 0) {
				while ($row = $query->fetch_assoc()) {
					$data[] = $row;
				}
				return $data;
			}else{
				return false;
			}
		}
}
?>