<?php

$cname = $_POST['cname'];
$team = $_POST['team'];
$datetime = $_POST['datetime'];
$typeinspection = $_POST['typeinspection'];
$inspectionteam = $_POST['inspectionteam'];
$q22_1How = $_POST['Q1_Rating'];
$q17_typeA17 = $_POST['Q2_Rating'];
$q18_typeA18 = $_POST['Q3_Rating'];
$q19_typeA19 = $_POST['Q4_Rating'];
$q21_typeA21 = $_POST['Q5_Rating'];
$q24_review = $_POST['Review'];
$q9_ifYou = $_POST['Comment 1'];
$q10_doYou = $_POST['Comment 2'];
$q24_review = $_POST['Review'];
$q30_date = $_POST['enddate'];

$mailheader = "From:".$name."<".$email.">\r\n";

$recipient = "eric.mohlaudi@tuv.com";

mail($recipient, $subject, $message, $mailheader) or die("Error!");

echo"Survey complete"

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submitted</title>
	 <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
  <script src="index.js"></script>

    <script
      type="text/javascript"
      src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"
    ></script>
    <script type="text/javascript">
      (function () {
        emailjs.init("J01QMSmqj93QY8gmJ");
      })();
    </script>
	<style>
		body {
		  background-image: url(https://karriereblog.tuv.com/wp-content/uploads/2020/02/TUEV-Rheinland-Fav.png);
		  background-blend-mode: normal;
      background-attachment:inherit;
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-position: center;
      background-size: 200px;
      text-align: center;
      
		}

  
    button{
        background-image: linear-gradient(-180deg, #0083bb 0%, #0083bb 100%);
        border-radius: 0%;
        box-sizing: border-box;
        color: #FFFFFF;
        position: relative;
        font-size: 20px;
        padding: 1rem 1.75rem;
        text-decoration: none;
        width: 40%;
        border: 0;
        cursor: pointer;
    }
    
  .msg{
      position: absolute;
      padding-bottom: 500px;
    }
	</style>
</head>
<body>
   
	<div class="submit" id="msg" style="text-align: center;">
      <h1>Thank you!</h1>
      <h3>Your submission has been received.</h3>   
    </div>
	

	<button onclick="sendMail()">Submit</button>
</body>
</html>




';


?>