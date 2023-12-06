<?php
      
      $firstName = $_POST['first name'];
      $lastName = $_POST['last name'];
      $age = $_POST['age'];
      $gender= $_POST['gender'];
      $password  = $_POST['password'];
      $email = $_POST['email'];

      $conn = new mysqli('localhost','root','','test');
      if ($conn->connect_error) {
        die('connection failed'. $conn->connect_error);
      }
        else{
            $stmt = $conn->prepare("insert into registration(first name,last name,age,gender,password,email)
            values(?,?,?,?,?,?)");
            $stmt->bind_param('ssssss',$firstName,$lastName,$age,$gender,$password,$email);
            $stmt->execute();
            echo"registration successful";
            $stmt->close();
            $conn->close();


        }


?>