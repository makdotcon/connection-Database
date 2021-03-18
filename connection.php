<?php
$server="localhost";
$user="root";
$password="";
$dbname="skill";

$conn= mysqli_connect($server,$user,$password,$dbname);

if(!$conn)
{
    die("Connection failed :". mysqli_connect_error());
}

else {
    echo "Sucessfully connected";
}


//$query="SELECT id,name,email from users";

//$result=mysqli_query($conn,$query);

//if(mysqli_num_rows($result)>0){
//while ($row=mysqli_fetch_assoc($result)) {

//echo "ID :".$row["id"],"Name :".$row["name"],"<br>";


//}

//}

//else {
  //  echo "No result";
//}



?>