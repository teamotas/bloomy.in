<?php
include_once('db.php');
ob_start();

//1st form without mail (top)

if(isset($_POST['txtname']) )
{
if($_POST['txtname']=="" && $_POST['txtemailid']=="" && $_POST['txtmobile2']==""){
		$err_msg = "Please Fill All Fields";
		header("Location:index.html");
        exit();
	}else{

if(isset($_POST['txtname'])) $fname=addslashes($_POST['txtname']);
if(isset($_POST['txtmobile2'])) $phone=addslashes($_POST['txtmobile2']);
if(isset($_POST['txtemailid'])) $emailid=addslashes($_POST['txtemailid']);
if(isset($_POST['city2'])) $city=addslashes($_POST['city2']);

################################
$to=' Makoons. <shvmgupt16@gmail.com>';
$to=' Makoons. <info@makoons.com>';
$body='<p>Enquiry details</p>'.
      '<table>'.
      '<tr><td>Name:</td><td>'.$fname.'</td></tr>'.
      '<tr><td>Phone:</td><td>'.$phone.'</td></tr>'.
      '<tr><td>City:</td><td>'.$city.'</td></tr>'.
      '</table>'.
      '<p>Thanks</p>';
//$subject='You got a online enquiry';
$subject='Enquiry from ('.$fname.')';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: Makoons. <info@makoons.com>' . "\r\n";
//$headers .= 'Bcc: linkmkverma@gmail.com' . "\r\n";
$headers .= 'Cc: info@makoons.com, adword@webiantdigital.in ' . "\r\n";
mail($to, $subject, $body, $headers);

//Sender Reply
$to=$emailid;
$subject='Enquiry from ('.$fname.')';
$body='<p>Enquiry details</p>'.      
      '<p>Thanks for Enquiry. Our Representtaive will get in touch with you shortly</p>';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: Makoons. <info@makoons.com>' . "\r\n";
$headers .= 'Cc: info@makoons.com, adword@webiantdigital.in ' . "\r\n";
mail($to, $subject, $body, $headers);


############################################
mysqli_query($conn,"insert into makoonsmalviyanagar_enquiries(name, email, mobile_number,city,submitted_at) values ('$fname', '$emailid','$phone','$city','".date("Y-m-d H:i:s")."')") or die(mysqli_query($conn));
header('Location: thankyou.html');
	}
}


//2nd form (top)

if(isset($_POST['txtname2']) )
{
if($_POST['txtname2']=="" && $_POST['txtemailid2']=="" && $_POST['txtmobile2']==""){
		$err_msg = "Please Fill All Fields";
		header("Location:index.html");
        exit();
	}else{
if(isset($_POST['txtname2'])) $fname2=addslashes($_POST['txtname2']);
if(isset($_POST['txtmobile2'])) $phone2=addslashes($_POST['txtmobile2']);
if(isset($_POST['txtemailid2'])) $emailid2=addslashes($_POST['txtemailid2']);
if(isset($_POST['city2'])) $city2=addslashes($_POST['city2']);


###############################
$to=' Makoons. <info@abmloans.co.in>';
$to2=' Makoons. <info@makoons.com>';
$body2='<p>Enquiry details</p>'.
      '<table>'.
      '<tr><td>Name:</td><td>'.$fname2.'</td></tr>'.
      '<tr><td>Email:</td><td>'.$emailid2.'</td></tr>'.
      '<tr><td>Phone:</td><td>'.$phone2.'</td></tr>'.
	    '<tr><td>City:</td><td>'.$city2.'</td></tr>'.
      '</table>'.
      '<p>Thanks</p>';
//$subject='You got a online enquiry';
$subject2='Enquiry from ('.$fname2.')';
$headers2  = 'MIME-Version: 1.0' . "\r\n";
$headers2 .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers2 .= 'From: Makoons. <info@makoons.com>' . "\r\n";
//$headers2 .= 'Bcc: linkmkverma@gmail.com' . "\r\n";
$headers2 .= 'Cc: info@makoons.com, adword@webiantdigital.in ' . "\r\n";
mail($to2, $subject2, $body2, $headers2);

//Sender Reply
$to2=$emailid2;
$subject2='Enquiry from ('.$fname2.')';
$body2='<p>Enquiry details</p>'.      
      '<p>Thanks for Enquiry. Our Representtaive will get in touch with you shortly</p>';
$headers2  = 'MIME-Version: 1.0' . "\r\n";
$headers2 .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers2 .= 'From: Makoons. <info@makoons.com>' . "\r\n";
$headers .= 'Cc: info@makoons.com, adword@webiantdigital.in ' . "\r\n";
mail($to2, $subject2, $body2, $headers2);


############################################
mysqli_query($conn,"insert into makoonsmalviyanagar_enquiries(name, email, mobile_number,city,submitted_at) values ('$fname2', '$emailid2', '$phone2','$city2','".date("Y-m-d H:i:s")."')") or die(mysqli_query($conn));
header('Location: thankyou.html');
	}
}


//3rd form (Side)

if(isset($_POST['txtname3']) )
{
if($_POST['txtname3']=="" && $_POST['txtemailid3']=="" && $_POST['txtmobile3']==""){
		$err_msg = "Please Fill All Fields";
		header("Location:index.html");
        exit();
	}else{
if(isset($_POST['txtname3'])) $fname3=addslashes($_POST['txtname3']);
if(isset($_POST['txtmobile3'])) $phone3=addslashes($_POST['txtmobile3']);
if(isset($_POST['txtemailid3'])) $emailid3=addslashes($_POST['txtemailid3']);
if(isset($_POST['city3'])) $city3=addslashes($_POST['city3']);



################################
$to=' Makoons. <info@abmloans.co.in>';
$to3=' Makoons. <info@makoons.com>';
$body3='<p>Enquiry details</p>'.
      '<table>'.
      '<tr><td>Name:</td><td>'.$fname3.'</td></tr>'.
      '<tr><td>Email:</td><td>'.$emailid3.'</td></tr>'.
      '<tr><td>Phone:</td><td>'.$phone3.'</td></tr>'.
	     '<tr><td>City:</td><td>'.$city3.'</td></tr>'.
      '</table>'.
      '<p>Thanks</p>';
//$subject='You got a online enquiry';
$subject3='Enquiry from ('.$fname3.')';
$headers3  = 'MIME-Version: 1.0' . "\r\n";
$headers3 .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers3 .= 'From: Makoons. <info@makoons.com>' . "\r\n";
//$headers3 .= 'Bcc: linkmkverma@gmail.com' . "\r\n";
$headers .= 'Cc: info@makoons.com, adword@webiantdigital.in ' . "\r\n";
mail($to3, $subject3, $body3, $headers3);

//Sender Reply
$to3=$emailid3;
$subject3='Enquiry from ('.$fname3.')';
$body3='<p>Enquiry details</p>'.      
      '<p>Thanks for Enquiry. Our Representtaive will get in touch with you shortly</p>';
$headers3  = 'MIME-Version: 1.0' . "\r\n";
$headers3 .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers3 .= 'From: Makoons. <info@makoons.com>' . "\r\n";
$headers .= 'Cc: info@makoons.com, adword@webiantdigital.in ' . "\r\n";
mail($to3, $subject3, $body3, $headers3);


mysqli_query($conn,"insert into makoonsmalviyanagar_enquiries(name, email, mobile_number,city,submitted_at) values ('$fname3', '$emailid3', '$phone3','$city3','".date("Y-m-d H:i:s")."')") or die(mysqli_query($conn));
header('Location: thankyou.html');
	}
}


//4th form (Within page)

if(isset($_POST['txtname4']) )
{
if($_POST['txtname4']=="" && $_POST['txtemailid4']=="" && $_POST['txtmobile4']==""){
		$err_msg = "Please Fill All Fields";
		header("Location:index.html");
        exit();
	}else{
if(isset($_POST['txtname4'])) $fname4=addslashes($_POST['txtname4']);
if(isset($_POST['txtmobile4'])) $phone4=addslashes($_POST['txtmobile4']);
if(isset($_POST['txtemailid4'])) $emailid4=addslashes($_POST['txtemailid4']);
if(isset($_POST['city4'])) $city4=addslashes($_POST['city4']);


################################
$to=' Makoons. <info@abmloans.co.in>';
$to4=' Makoons. <info@makoons.com>';
$body4='<p>Enquiry details</p>'.
      '<table>'.
      '<tr><td>Name:</td><td>'.$fname4.'</td></tr>'.
      '<tr><td>Email:</td><td>'.$emailid4.'</td></tr>'.
      '<tr><td>Phone:</td><td>'.$phone4.'</td></tr>'.
	    '<tr><td>City:</td><td>'.$city4.'</td></tr>'.
      '</table>'.
      '<p>Thanks</p>';
//$subject='You got a online enquiry';
$subject4='Enquiry from ('.$fname4.')';
$headers4  = 'MIME-Version: 1.0' . "\r\n";
$headers4 .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers4 .= 'From: Makoons. <info@makoons.com>' . "\r\n";
//$headers4 .= 'Bcc: linkmkverma@gmail.com' . "\r\n";
$headers .= 'Cc: info@makoons.com, adword@webiantdigital.in ' . "\r\n";
mail($to4, $subject4, $body4, $headers4);

//Sender Reply
$to4=$emailid4;
$subject4='Enquiry from ('.$fname4.')';
$body4='<p>Enquiry details</p>'.      
      '<p>Thanks for Enquiry. Our Representtaive will get in touch with you shortly</p>';
$headers4  = 'MIME-Version: 1.0' . "\r\n";
$headers4 .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers4 .= 'From: Makoons. <info@makoons.com>' . "\r\n";
$headers .= 'Cc: info@makoons.com, adword@webiantdigital.in ' . "\r\n";
mail($to4, $subject4, $body4, $headers4);

############################################
mysqli_query($conn,"insert into makoonsmalviyanagar_enquiries(name, email, mobile_number,citysubmitted_at) values ('$fname4', '$emailid4', '$phone4','$city4','".date("Y-m-d H:i:s")."')") or die(mysqli_query($conn));
header('Location: thankyou.html');
	}
}



?>