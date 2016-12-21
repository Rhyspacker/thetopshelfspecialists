


<?php
// Define variables for SEO
$pageTitle = 'Styleguide | The Top Shelf Specialists';

$cssPath = 'css/styles.css';

include('includes/header.php'); 

?>


<main>

		<h1 style="font-weight: bold; text-decoration: underline;">COLOURS</h1>

		<h3>$mainBg</h3>

		<div id="mainBg" class="colourBox">
		</div>

		<br>

		<h3>$secondBg</h3>

		<div id="secondBg" class="colourBox">
		</div>

		<br>

		<h3>$hoverColour</h3>

		<div id="hoverColour" class="colourBox">
		</div>

		<br>

		<h3>$linkColour</h3>

		<div id="linkColour" class="colourBox">
		</div>

		<br>

		<h3>$linkColourHover</h3>

		<div id="linkColourHover" class="colourBox">
		</div>

		<br>

		<h1 style="font-weight: bold; text-decoration: underline;">HEADINGS</h1>

		<br>

		<h1>Heading h1</h1>
		<p>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation.
		</p>

		<br>

		<h2>Heading h1</h2>
		<p>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation.
		</p>

		<br>

		<h3>Heading h1</h3>
		<p>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation.
		</p>

		<br>

		<h4>Heading h1</h4>
		<p>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation.
		</p>

		<br>

		<h5>Heading h1</h5>
		<p>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation.
		</p>

		<br>

		<h1 style="font-weight: bold; text-decoration: underline;">BUTTONS</h1>

		<br>

		<h3>Standard Button</h3>

		<button>
			BUTTON
		</button>

		<br>

		<h3>Input Type Submit</h3>

		<input type="submit" value="SUBMIT" title="submit your message" />

		<br>

		<h3>Call to Action Button</h3>

		<button class="calltoAction">
			BUTTON
		</button>

		<br>

		<h1 style="font-weight: bold; text-decoration: underline;">FORM</h1>

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


</main>

<?php include('includes/footer.php'); ?>

 