<?php


if (isset($_POST['submit'])){
    
    $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
    $lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    $sql = "INSERT INTO users (firstName, lastName, email)
            VALUES ('$firstName', '$lastName', '$email')";

     //اخطار عن  ان الادخال فارغ
            if (empty($firstName)){
                echo 'Yoo! write your Name';

            }elseif(empty($lastName)){
                    echo 'Yoo! write your lastname';

                }elseif(empty($email)){
                        echo 'Yoo! write your email';   
     //تحقق من صحة الايميل
         
    } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo 'NOOOO! WRITE  YOUR EMAIL RIGHT';

    } else{

        //HERE WHERE SENDING DATA TO A DATABASE

    if (mysqli_query($conn, $sql)) {
        
      header('Location:  main.php');
    } else {
      echo " error !" . mysqli_error($conn);
    }
  }

}
