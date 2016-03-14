<?php
/**
 * @file about.php
 * Displays the about section.
 */

// Replicate an image carousel database.
// Note: Please assure that the alt text matches the corresponding project title text in the project section.
$carousel = array(
	array(
		"image" => "simms.png",
		"alt" => "Simms Initiatives"
	),
	array(
		"image" => "southworth.png",
		"alt" => "E.D.E.N. Southworth Collection"
	),
	array(
		"image" => "american-heritage.png",
		"alt" => "American Heritage Vegetables"
	),
	array(
		"image" => "burning-of-columbia.png",
		"alt" => "The Burning of Columbia"
	),
	array(
		"image" => "pope-brown.png",
		"alt" => "The Ethelind Pope Brown Collection of South Carolina Natural History"
	),
	array(
		"image" => "civil-war.png",
		"alt" => "South Carolina and the Civil War"
	),
	array(
		"image" => "sphr.png",
		"alt" => "Southern Periodical Humor Repository"
	),
	array(
		"image" => "ravenel.png",
		"alt" => "Plants and Planters - Henry William Ravenel"
	)
);
?>
<section class="container-fluid" id="about">
	<div class="row">

		<div class="col-md-8 center-block" id="carousel">
			<?php
			foreach ($carousel as $image) {
				if (isset($image["image"]) && file_exists("img/carousel/" . $image["image"]) && $image["image"] != "") {
					print "<img src='img/carousel/" . $image["image"] . "' alt='" . $image["alt"] . "' class='img-responsive'>";
				} else if (!file_exists("img/carousel/" . $image["image"])) {
					print "<p class='text-danger'>There was an error finding the file named " . $image["image"] . ".</p>";
				}
			}
			?>
		</div>

	</div>

	<div class="row text-justify">
		<div class="col-md-10 center-block">
			<p>The goal of the Digital US South Initiative is to combine rigorous scholarship and new technologies in ways that will promote and enhance thoughtful engagement with the South’s history, cultures, and landscapes. These projects are designed with both scholar and non-scholar in mind and provide opportunities for classroom teaching, new scholarly production, and individual study and enjoyment. Currently, DUSS federates twelve projects, with topics as diverse as agriculture, 19th-century literature, natural history, the Civil War, and the Civil Rights Movement. These projects have benefited from the generous financial support of the University of South Carolina’s College of Arts and Sciences, University Libraries, USC's Center for Digital Humanities, the Watson-Brown Foundation, and the Humanities Council<sup>SC</sup>.</p>
		</div>
	</div>

	<i class="fa fa-3x fa-chevron-down"></i>
</section>
