<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<meta name="description" content="Benchmark Analysis of Algorithms for Determining and Quantifying Full-length mRNA Splice Forms from RNA-Seq Data" />

<meta name="keywords" content="RNA-Seq" />

<meta name="author" content="Katharina Hayer" />

<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">

<title>BP2</title>

</head>

<body>


<div id="wrapper">

<?php include('includes/header.php'); ?>
<?php include('includes/nav.php'); ?>


<div id="content">

<h2>Contact</h2>

<p>
<?php
// display form if user has not clicked submit
if (!isset($_POST["submit"])) {
  ?>
  <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>" id="contact-form">
  <label for="from">From:</label>       <input type="text" name="from" id="from"><br>
  <label for="email">E-mail:</label>    <input type="text" name="email" id="email"><br>
  <label for="subject">Subject:</label> <input type="text" name="subject" id="subject"><br>
  <label for="message">Message:</label> <textarea rows="10" cols="40" name="message" id="message"></textarea><br>
  <br class="clear" />

  <input type="submit" name="submit" value="Submit" id="submit">
  </form>
  <?php
} else {    // the user has submitted the form
  // Check if the "from" input field is filled out
  if (isset($_POST["from"])) {
    $from = $_POST["from"]; // sender
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    // message lines should not exceed 70 characters (PHP rule), so wrap it
    $message = wordwrap($message, 70);
    // send mail
    mail("hayer@upenn.edu","$subject $from",$message,"From: $email\n");
    echo "Thank you, your message has been sent.";
  }
}
?>



</p>


</div> <!-- end #content -->

<?php include('includes/footer.php'); ?>

</div> <!-- End #wrapper -->

  </body>

</html>
