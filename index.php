


<?php
// Define variables for SEO
$pageTitle = 'Home | The Top Shelf Specialists';
$pageDescription = 'We are an award winning bar consultancy agency based in Manchester - Staff training, spirit selection, cocktail menus and much more.';
$pageKeywords = 'Manchester, Bar, Bar consultancy, Manchester bar staff training, cocktails, top shelf, the top shelf specialists';
$pageUrl = 'http://thetopshelfspecialists.co.uk';

$cssPath = 'css/styles.css';

include('includes/header.php');

?>

<div class="hero">

  <div id="particles-js"></div>

  	<h1 class="typewrite" data-period="5000" data-type='[ "Award winning cocktails by design.", "Bar consultancy that helps your business grow.", "Manchester based." ]'>

	   <span class="wrap"></span>

	  </h1>

    <section class="center social social-hero">

  		<h2>Connect with us</h2>

  			<a href="#" title="">

  				<svg class="icon">
  	 				<use xlink:href="img/sprite.svg#facebook"></use>
  				</svg>

  			</a>

  			<a href="#" title="">

  				<svg class="icon">
  				  	<use xlink:href="img/sprite.svg#twitter"></use>
  				</svg>

  			</a>

  	</section>

</div>


<main role="main">

  <h1 class="center">Partnerships</h1>

  <div class="partners-container" id="partners-container">

    <div class="flex-container">
      <img class="flex-item partner-item" src="img/partners/jameson.png" alt="">
      <img class="flex-item partner-item" src="img/partners/burleighs-gin.png" alt="">
      <img class="flex-item partner-item" src="img/partners/jimbeam.png" alt="">
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

  <button class="center" style="display: block;" id="partners-open" data-text-swap="Show less">
  Show more
  </button>

  <div class="flex-container">

  	<div class="flex-item" >
  		<h1 class="center">What we're about</h1>

  		<p class="center paragraph-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  		consequat.
      <br>
      <a class="center spacing" style="display: inline-block" href="about.php" title="">
      View about
      </a>
  		</p>

  	</div>


  </div>

</main>

<?php include('includes/footer.php'); ?>
