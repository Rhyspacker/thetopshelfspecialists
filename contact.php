<?php

$pageTitle = 'Contact | The Top Shelf Specialists';
$pageDescription = 'Want to know more? please contact us for more information on services, availability or anything';
$pageKeywords = 'Contact us, message us, bar, bar consultancy, cocktails, top shelf, the top shelf specialists';
$pageUrl = 'http://thetopshelfspecialists.co.uk/Contact';

$cssPath = 'css/styles.css';

include('includes/header.php'); 

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
		
		<form>

			<div class="group">
				<input type="text">
				<label>Name</label>
			</div>

			<div class="group">
				<input type="email">
				<label>Email</label>
			</div>

			<div class="group">
				<textarea rows="5" name="message" title="Enter your message here"></textarea>
				<label>Message</label>
			</div>

  			<input type="submit" value="SUBMIT" title="submit your message" />

		</form>
		
	</div>

</main>



<?php include('includes/footer.php'); ?>

 