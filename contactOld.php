<!DOCTYPE html>
<html>
<head>
<title>Contact Us</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />

<script src="https://use.fontawesome.com/6a71565c22.js"></script>

<link rel="stylesheet" href="css/portal.css" />
<link rel="stylesheet" href="css/forms.css" />

</head>

<body>
<!-- START WRAPPER -->
<main class="wrapper">
<header>
  <h1><a href="index.php"><i class="logo fa fa-home"></i> Alexander Malloy SCC WEB120 Portal</a></h1>
  <nav>
    <ul class="topnav" id="myTopnav">
      <li><a href="IT162/index.php" class="selected">Welcome</a></li>
      <li><a href="IT162/big/index.php">Big</a></li>
      <li><a href="IT162/aia.php">AIA</a></li>
      <li><a href="IT162/flowchart.php">Flowchart/Layout</a></li>
      <li><a href="IT162/fp/index.php">Final Project</a></li>
      <li><a href="IT162/contact.php">Contact Alexander</a></li>
      <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
    </ul>
  </nav>
</header>
        
<p>Inside the source of this file, you can un-comment and test 
  2 different types of forms:
  <div class="indent">
      <ul>
          <li><b>loadContact('simple.php');</b> - a simple contact form with reCAPTCHA</li>
          <!--<li><b>loadContact('multiple.php');</b> - a complex form with reCAPTCHA</li> -->
      </ul>
  </div>    
</p>    
<?php
  /*
   * Below are 2 different forms to be re-used       
   * 
   * Only use one at a time, comment out the other!       
   *
   */

  include 'includes/contact_include.php'; #site keys & code here

  $toAddress = "bigmagoona@gmail.com";  //place your/your client's email address here
  $toName = "Lucas Gonczy"; //place your client's name here
  $website = "The Pint And Ladle";  //place NAME of your client's website

  echo loadContact('simple.php');#demonstrates a simple contact form
  //echo loadContact('multiple.php');#demonstrates multiple form elements

?>
 
<!-- START Footer -->
<footer>
  <p><small>&copy; 2018 - <?=date('Y')?> by <a href="contactme.php" target="_blank">Alexander</a>, All Rights Reserved ~ <a href="https://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="https://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
</footer>
<!-- END Footer --> 
</main>
<!-- END WRAPPER -->

    <!-- JavaScript associated with the W3Schools.com Top Navigation Response Exercise --> 
    <script>
/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
     </script>
</body>
<footer><small>&copy; <?php echo date("Y");?>, All Rights Reserved, <a href="https://validator.w3.org/check?uri=referer" target="_blank">Valid HTML</a> ~ <a href="https://jigsaw.w3.org/css-validator/check/referer" target="_blank">Valid CSS</a></small></footer>
</html>
