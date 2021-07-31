<?php  include 'config.php';
    $success="";
    $email_err="";
    //$error=false;
$name=$email=$subject=$message=$phone="";
$name_err=$email_err=$subject_err=$message_err=$phone_err="";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["name"])){
        $name_err="Name is required";
        

    }
    else{
        $name=input_test($_POST["name"]);
    }
    if(empty($_POST["email"])){
        $email_err="Email is required";
        
    }

    else{
        $email=input_test($_POST["email"]);
        $check_email="SELECT email FROM contact WHERE email='$email'";
        $result=mysqli_query($connect,$check_email);
        $count=mysqli_num_rows($result);
        if($count > 0){
            echo "email already taken please input a new email";
            

            return false;
        } 
   
    }


    if(empty($_POST["subject"])){
        $subject_err="subject is required";
        

    }
    else{
        $subject=input_test($_POST["subject"]);
    }
    if(empty($_POST["message"])){
        $message_err="message is required";
        

    }
    else{
        $message=input_test($_POST["message"]);
    }
    if(empty($_POST["phone"])){
        $phone_err="tel is required";
        

    }
    else{
        $phone=input_test($_POST["phone"]);
    }


    if(empty($name_err)&& empty($email_err) && empty($subject_err)&& empty($message_err)&&empty($phone_err)){



        $sql='INSERT INTO contact (name,email,subject,message,phone)VALUES(?,?,?,?,?)';
        $stmt = $connect->prepare($sql);
    
       if($stmt=$connect->prepare($sql)){
        $stmt->bind_param('sssss',$name,$email,$subject,$message,$phone); 
        $stmt->execute();
        
     $stmt->close();
       echo "Information saved succesfully Ill get to you as soon as possible thank You!";
        
        }

    $connect->close();
}


}
function input_test($entry){
    $entry=trim($entry);
    $entry=stripslashes($entry);
    $entry=htmlspecialchars($entry);
    return $entry;
}

?>