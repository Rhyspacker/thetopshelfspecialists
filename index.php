


<?php
// Define variables for SEO
$pageTitle = 'Home | The Top Shelf Specialists';
$pageDescription = 'We are an award winning bar consultancy agency based in Manchester...';
$pageKeywords = 'Manchester, Bar, Bar consultancy, cocktails, top shelf, the top shelf specialists';
$pageUrl = 'http://thetopshelfspecialists.co.uk';

$cssPath = 'css/styles.css';

include('includes/header.php');

?>

<div class="hero">

  <div id="particles-js"></div>

  	<h1 class="typewrite" data-period="3000" data-type='[ "Award winning cocktails by design.", "Manchester based." ]'>

	    <span class="wrap"></span>

	</h1>

</div>


<main>

  <h1 class="center">Partnerships</h1>

  <div class="partners-container" id="partners-container">

    <div class="flex-container">
      <img class="flex-item partner-item" src="img/partners/burleighs-gin.png" alt="">
      <img class="flex-item partner-item" src="img/partners/jimbeam.png" alt="">
      <img class="flex-item partner-item" src="img/partners/jameson.png" alt="">
    </div>
    <div class="flex-container">
      <img class="flex-item partner-item" src="img/partners/junkyard.png" alt="">
      <img class="flex-item partner-item" src="img/partners/monkey-shoulder.png" alt="">
      <img class="flex-item partner-item" src="img/partners/herbert-kilpin.png" alt="">
    </div>
    <div class="flex-container">
      <img class="flex-item partner-item" src="img/partners/reyka.png" alt="">
      <img class="flex-item partner-item" src="img/partners/rub-smokehouse.png" alt="">
      <img class="flex-item partner-item" src="img/partners/lacehouse.png" alt="">
    </div>

  </div>

  <button class="center" style="display: block;" id="partners-open" data-text-swap="Show Less">
  Show More
  </button>

  <div class="flex-container">

  	<div class="flex-item" >
  		<h1>Lorem ipsum dolor sit</h1>

  		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  		consequat.
  		</p>

  	</div>

  	<div class="flex-item" >
  		<h1>Lorem ipsum dolor sit</h1>

  		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  		consequat.
  		</p>

  	</div>

  </div>

</main>

<?php include('includes/footer.php'); ?>
