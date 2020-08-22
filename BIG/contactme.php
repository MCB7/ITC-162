
<?php include "includes/header.php";?>
<head>
  <title>Contact Morgan</title>
  <meta name="viewport" content="width=device-width" />
  <meta name="robots" content="noindex,nofollow" />
  <meta charset="utf-8">
  <script src="https://use.fontawesome.com/6a71565c22.js"></script>
 
  <link rel="stylesheet" href="css/forms.css" />
</head>

<body>




<?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "morganbligh@icloud.com";  //place your/your client's email address here
        $toName = "Morgan"; //place your client's name here
        $website = "http://www.morganbligh.com/web162/contactme.php";  //place NAME of your client's website

        echo loadContact('simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
 








</body>

<?php include "includes/footer.php";?>