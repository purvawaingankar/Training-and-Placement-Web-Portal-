<?php 
 require_once("config.php");
if(isset($_POST['subforgot'])){ 
$login=$_REQUEST['login_var'];
$query = "SELECT * from  admins where (username='$login' OR email = '$login')"; 
$res = mysqli_query($dbc,$query);
$count=mysqli_num_rows($res);
//echo $count;
if($count==1)
{
$findresult = mysqli_query($dbc, "SELECT * FROM admins WHERE (username='$login' OR email = '$login')");
if($res = mysqli_fetch_array($findresult))
{
$oldftemail = $res['email'];  
}
$token = bin2hex(random_bytes(50));
 $inresult = mysqli_query($dbc,"insert into pass_reset values('','$oldftemail','$token')"); 
 if ($inresult)  
 { 
$FromName="NHITM";
$FromEmail="no_reply@nhitm.com";
$ReplyTo="nhitm@gmail.com";
$credits="All rights are reserved | 1NHITM  "; 
$headers  = "MIME-Version: 1.0\n";
     $headers .= "Content-type: text/html; charset=iso-8859-1\n";
     $headers .= "From: ".$FromName." <".$FromEmail.">\n";
      $headers .= "Reply-To: ".$ReplyTo."\n";
      $headers .= "X-Sender: <".$FromEmail.">\n";
       $headers .= "X-Mailer: PHP\n"; 
       $headers .= "X-Priority: 1\n"; 
       $headers .= "Return-Path: <".$FromEmail.">\n"; 
         $subject="You have received password reset email"; 
     $msg="Your password reset link <br> http://localhost:8081/php/form/password-reset_admin.php?token=".$token." <br> Reset your password with this link .Click or open in new tab<br><br> <br> <br> <center>".$credits."</center>"; 
   if(@mail($oldftemail, $subject, $msg, $headers,'-f'.$FromEmail) ){
header("location:forgot-password_admin.php?sent=1"); 
$hide='1';
          
    } else {
        
    header("location:forgot-password_admin.php?servererr=1"); 
} 
      } 
      else 
      { 
          header("location:forgot-password_admin.php?something_wrong=1"); 
      }     
}
else  
{
header("location:forgot-password_admin.php?err=".$login); 
}
}
?>