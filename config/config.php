<?php
// this php page dedicated for connection with mysql databse

   try{
    $host = "localhost";
    $dbname = "jobboard";
    $user = "root";
    $pass = "";


    // PDO -> PHP data objects
    // DSn -> Data Source Name
    $conn = new PDO("mysql:host=$host;dbname=$dbname" , $user, $pass);
    $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Data Base Connected successfully!";
   }catch(PDOException $e){
    echo "<script>alert('{$e->getMessage()}')</script>" ;
   }
    
   // if($conn == true ){
    //     echo"Database Connect Successfully1";
    // }else{
    //     echo "Error! Database Connection failed1";
    // }
?>