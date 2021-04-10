<?php

//import.php

if(isset($_POST["employe_name"]))
{
 $connect = new PDO("mysql:host=localhost; dbname=testing", "root", "");

 session_start();

 $file_data = $_SESSION['file_data'];

 unset($_SESSION['file_data']);

 foreach($file_data as $row)
 {
  $data[] = '("'.$row[$_POST["employe_name"]].'", "'.$row[$_POST["employe_code"]].'", "'.$row[$_POST["department"]].'","'.$row[$_POST["dob"]].'","'.$row[$_POST["joindate"]].'")';
 }

 if(isset($data))
 {
  $query = "
  INSERT INTO employe_csv_file_data 
  (employe_name, employe_code, department,dob,joindate) 
  VALUES ".implode(",", $data)."
  ";

  $statement = $connect->prepare($query);

  if($statement->execute())
  {
   echo 'Data Imported Successfully';
  }
 }
}



?>

