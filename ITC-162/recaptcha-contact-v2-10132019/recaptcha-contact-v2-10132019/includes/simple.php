<link rel="stylesheet" href="css/forms.css" />
<?php
/**
 * simple.php is a postback application designed to provide a 
 * contact form for users to email our clients.  
 * 
 * simple.php provides a typical feedback form for a website
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 2 2019/10/13
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php  
 * @todo none
 */

#--------------END CONFIG AREA ------------------------#
?>
	<!-- START HTML FORM -->
	<form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">
	<link rel="stylesheet" href="css/forms.css" />
	<div class = "wrapper">
<h2 class="pageID">Contact Morgan</h2>

<form action="/action_page.php">
    
    <label for="name">Name:</label><br>
    
    <input type="text" id="name" name="name" autofocus placeholder="any name will do"><br>
    
    <label for="text">Email:</label><br>
    
    <input type="text" input pattern="/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/" name="email" placeholder="example@email.org"><br>
    
    <label for="text">Comment:</label>
    
    <div class="container">
        
        <div class="comment">
            
            <textarea class="textinput"  placeholder="comment"></textarea>
        
        </div>
    
    </div>
    
    <input type="submit" value="Submit">
</div>
	</div>	
    <div class="g-recaptcha" data-sitekey="<?=$siteKey;?>"></div> 
	<div>
		<input type="submit" value="submit" />
	</div>
    </form>
	<!-- END HTML FORM -->
