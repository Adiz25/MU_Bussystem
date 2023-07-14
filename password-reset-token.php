<?php
if(isset($_POST['password-reset-token']) && $_POST['user'])
{
    include 'connection.php';
     
    $emailId = $_POST['user'];
 
    $result = mysqli_query($db,"SELECT * FROM `admin` WHERE user='" . $emailId . "'");
 
    $row= mysqli_fetch_array($result);
 
  if($row)
  {
     
     $token = md5($emailId).rand(10,9999);
 
     $expFormat = mktime(
     date("H"), date("i"), date("s"), date("m") ,date("d")+1, date("Y")
     );
 
    $expDate = date("Y-m-d H:i:s",$expFormat);
 
    $update = mysqli_query($db,"UPDATE users set password='" . $password . "', reset_link_token='" . $token . "' ,exp_date='" . $expDate . "' WHERE user='" . $emailId . "'");
 
    $link = "<a href='www.mubus.com/reset-password.php?key=".$emailId."&token=".$token."'>Click To Reset password</a>";
 
    require_once('./phpmail/PHPMailerAutoload.php');
 
    $mail = new PHPMailer();
 
    $mail->CharSet =  "utf-8";
    $mail->IsSMTP();
    // enable SMTP authentication
    $mail->SMTPAuth = true;                  
    // GMAIL username
    $mail->Username = "infoscience901@gmail.com";
    // GMAIL password
    $mail->Password = "Infoscience@2021";
    $mail->SMTPSecure = "ssl";  
    // sets GMAIL as the SMTP server
    $mail->Host = "smtp.gmail.com";
    // set the SMTP port for the GMAIL server
    $mail->Port = "465";
    $mail->From='infoscience901@gmail.com';
    $mail->FromName='Admin';
    $mail->AddAddress('$emailId', 'ABC');
    $mail->Subject  =  'Reset MU BUS Password';
    $mail->IsHTML(true);
    $mail->Body    = 'Click On This Link to Reset Password '.$link.'';
    if($mail->Send())
    {
      echo "Check Your Email and Click on the link sent to your email";
    }
    else
    {
      echo "Mail Error - >".$mail->ErrorInfo;
    }
  }else{
    echo "Invalid Email Address. Go back";
  }
}
?>