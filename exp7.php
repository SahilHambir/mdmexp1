<?php

$con=mysqli_connect("localhost","root","","testdb");

if(!$con)
{
  echo("Connection failed".mysqli_connect_error());
}

else

{
  $sql="insert into student (roll,name) values(7,'Thala')";
  
  
  if(mysqli_query($con,$sql))
  {
    echo("inserted");
  }
  
  else 
  {
    echo("Error");
  }
}

?>