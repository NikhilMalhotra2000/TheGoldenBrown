<?php
// Create connection
$conn = mysqli_connect("localhost", "id13585954_system", "R!h[#DZj4-qdV]Wj", "id13585954_logininformation"); 

// Check connection
if (mysqli_connect_errno($conn))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  {
echo "It works!"; 
  }
?>