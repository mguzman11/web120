<?php include 'includes/header.php'?>
    
	<?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "melissa.guzman@seattlecentral.edu";  //place your/your client's email address here
        $toName = "Melissa Guzman"; //place your client's name here
        $website = "WEB 120 Contact Form";  //place NAME of your client's website

        echo loadContact('simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

    ?>
</body>
</html>

</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
 <h3>Contact Melissa</h3>
 <p>Please reach out with any questions or comments!</p>
</aside>
<!-- END RIGHT COL -->
 
<?php include 'includes/footer.php'?>