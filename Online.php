<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobilenumber = $_POST['mobilenumber'];
  $occasion = $_POST['occasion'];
  $arrivaldate = $_POST['arrivaldate'];
  $departuredate = $_POST['departuredate'];
  $destination = $_POST['destination'];
  $eventbudget = $_POST['eventbudget'];
  $totalguest = $_POST['totalguest'];
  $specificneeds = $_POST['specificneeds'];

  if (!empty($name) || !empty($email) || !empty($mobilenumber) || !empty($occasion) || !empty($arrivaldate) 
  || !empty($departuredate) ||!empty($destination) || !empty($eventbudget) || !empty($totalguest) || !empty($specificneeds))
   {
      $host = "localhost";
      $dbUsername = "root";
      $dbPassword = "";
      $dbname = "booking";
      //connection
      $conn = new mysqli ($host,$dbUsername,$dbPassword,$dbname);
      if(mysqli_connect_error()){
          die('Connection Error!('.mysqli_connect_errno().')'.mysqli_connect_error());
        }
      else{
          $SELECT = "SELECT email From information Where email = ? Limit 1";
          $INSERT = "INSERT Into information (name,email,mobilenumber,occasion,arrivaldate,departuredate,
          destination,eventbudget,totalguest,specificneeds) values (?,?,?,?,?,?,?,?,?,?)";
          //Prepare statement
          $pst = $conn->prepare($SELECT);
          $pst->bind_param("s",email);
          $pst->excute();
          $pst->bind_result($email);
          $pst->store_result();
          $rnum = $pst->num_row;

          if($rnum==0){
              $pst->close();
              $pst = $conn->prepare($INSERT);
              $Ppst->bind_param("ssssssssss",$name,$email,$mobilenumber,$occasion,$arrivaldate,$departuredate,
              $destination,$eventbudget,$totalguest,$specificneeds);
              $pst->excute;

              echo "Booking Has Been Confirmed! Thank-You.";
            }
            else{
                echo "The Email Already Exist!";
            }
            $pst->close();
            $conn->close();
        }

    }else{
        echo "All Fields Are Required";
        die();
    }
?>