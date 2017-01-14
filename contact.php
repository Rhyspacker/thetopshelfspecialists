<?php

$pageTitle = 'Contact | The Top Shelf Specialists';
$pageDescription = 'Want to know more? please contact us for more information on services, availability or anything';
$pageKeywords = 'Contact us, message us, bar, bar consultancy, cocktails, top shelf, the top shelf specialists';
$pageUrl = 'http://thetopshelfspecialists.co.uk/Contact';

$cssPath = 'css/styles.css';

include('includes/header.php');

?>

<?php

	$to = 'rhys.pacs@yahoo.com';

	$subject = "New Message";

	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	$header = "From: $email - $name";

	$subject = "New message via thetopshelfspecialists.co.uk contact form";

	$feedback = "";

	$body = "
	Name: $name

	Email: $email

	Message: $message ";

	// Post email and change $feedback field based on if

	if($_POST) {
	 if($name == '' || $email == '' || $message == '') {
	     $feedback = "Please fill out all the fields.";
	 }
	      /* If e-mail is not valid show error message */
	 else if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
	 {
	 $feedback = "Incorrect email address.";
	 }

	 else {
	    mail($to, $subject, $body, $header);
		$feedback = "Thank you, your message has been sent.";
		$hidemydiv = "hide";

	 }
	}

?>



<div class="pageheader" role="heading">

	<p><a href="index.php">HOME</a> / CONTACT</p>
	<h1>CONTACT</h1>

</div>


<main class="flex-container">

	<div class="flex-item" >
		<h1>Lorem ipsum dolor sit</h1>

		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat.
		</p>

	</div>

	<div class="flex-item" >

		<form method="post">

			<div class="<?php echo $hidemydiv ?>">

				<div class="group">
					<input type="text" id="name" name="name" title="Enter your full name here">
					<label for="name">Name</label>
				</div>

				<div class="group">
					<input type="email" id="email" name="email" title="Enter your email address here">
					<label for="email">Email</label>
				</div>

				<div class="group">
					<textarea rows="5" id="message" name="message" title="Enter your message here"></textarea>
					<label for="message">Message</label>
				</div>

	  			<input type="submit" value="SUBMIT" title="Submit your message" />

  			</div>

  			<div class="feedback">

				<br>
				<p><?php echo $feedback; ?>	</p>

			</div>

		</form>

	</div>

</main>



<?php include('includes/footer.php'); ?>
