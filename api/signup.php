<?php

     include("connect.php");

     $Firstname = $_POST['First name'];
     $Lastname = $_POST['Last name'];
     $Gender = $_POST['Gender'];
     $Email = $_POST['Email'];
     $Address = $_POST['Address'];
     $Course = $_POST['Course'];
     $section = $_POST['section'];
     $Enrollmentnumber = $_POST['Enrollment number'];
     $Password = $_POST['password'];
     $confirmPassword = $_POST['confirm Password'];
     $Phonenumber = $_POST['Phone number'];

     if($Password==$confirmPassword){
          $insert = mysqli_query($connect, "INSERT INTO signup (FirstName,LastName,Gender,Email,Address,
          Course,section,EnrollmentNumber,Password,confirmPassword,Phonenumber)VALUES 
          ('$Firstname','$Lastname','$Gender','$Email','$Address','$Course','$section',
          '$Enrollmentnumber','$Password','$confirmPassword','$Phonenumber')");
     
          if($insert){
               echo '
           <script>
             alert("Registration succesfull!");
             window.location = "../";
             </script>

          ';
          }
          else{
               echo '
           <script>
             alert("Some error occured!");
             window.location = "../routes/signup.html";
             </script>

          ';
              }

          
     }
     else{
          echo '
           <script>
             alert("Password and confirm password does not match!");
             window.location = "../routes/signup.html";
             </script>

          ';
     }




?>