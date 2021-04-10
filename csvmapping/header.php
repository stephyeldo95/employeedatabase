<!DOCTYPE html>
<html>
   <head>
     <title>Empoyee Databse</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src="http://code.jquery.com/jquery.js"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
     <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
      <style>
      .table tbody tr th
      {
        min-width: 200px;
      }

      .table tbody tr td
      {
        min-width: 200px;
      }
u#mnv,li{list-style: none;float: right;}
ul#mnv>li{float: left}
ul#mnv>li>a{display: block;padding: 10px 15px;color: #fff;background: blue;margin-left:10px;}
      </style>
      <script type="text/javascript">
        
function validate()
{
var empname=$("#empname");
var empcode=$("#empcode");
var department=$("#department")
var age=$("#age");
var exp=$("#exp");

if(empcode.val()=="")
{
  alert('Enter Employee Code');
  return false;
}
else if(empname.val=="")
{
  alert('Enter  Name');
  return false;
  }
else if(department.val=="")
{

  alert('Enter  department');
  return false;
 
}

else if(age.val=="")
{

  alert('Enter  Age');
  return false;
 
}

else if(exp.val=="")
{
  alert('Enter  Experience');
  return false;
 
}


}
      </script>
   </head>
   <body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Employe Database</a>
    </div>
    <ul class="nav navbar-nav">
    
      <li><a href="employee_details.php">Add Employe Details</a></li>
              <li><a href="view_empoyeeinfo.php">View Employe Details</a></li>
              <li><a href="index.php">Upload csv</a></li>
    </ul>
  </div>
</nav>
  

