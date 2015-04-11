// Get values from the form
$name=$_POST['Name'];
$email=$_POST['Email'];
$subject=$_POST['Subject'];
$message=$_POST['Message'];
 
$to = "henryfjordan@gmail.com";


 
$from = "FutureTutorials";
$headers = "From:" . $name . "\r\n";
$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 
 
if(@mail($to,$subject,$message,$headers))
{
  print "<script>document.location.href='http://demo.ftutorials.com/html5-contact-form/success.html';</script>";
  // Created by Future Tutorials
}else{
  echo "Error! Please try again.";
}