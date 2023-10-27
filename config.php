<?php 
//mysqli_connect('localhost','root','');
//mysqli_select_db('db_belajar');

    $servername='localhost';
    $username='root';
    $password='';
    $dbname = "db_belajar";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:' . mysqli_connect_error());
        }


?>


