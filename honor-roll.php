<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Honor Roll | 2012-13 Annual Report on Philanthropy</title>
<?php include("includes/header.php"); ?>
<!--[if IE 8]>
    <link rel="stylesheet" type="text/css" href="../2011-12/css/custom2-ie8.css">
<![endif]-->
<div class="content">
<h1>Honor Roll 2012-13</h1>
<link rel="stylesheet" type="text/css" href="../2011-12/css/buttons.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<div class="left-column-13">
<h3>download</h3>
Honor Roll list in PDF
<p><a href="documents/annualreport-12-13.pdf" class="a_button_one" onclick="_gaq.push(['_trackEvent', 'P3', 'Honor Roll', 'PDF 2012-13']);">Click to download</a></p>
</div>

<div class="right-column-13" onclick="location.href='honor_roll_search.php';">
<h3>search online</h3>
Search by name, year, affiliation, or gift society
<p><a href="honor_roll_search.php" class="a_button_one">Fiscal Year Giving</a> <a href="benefactor_search.php" class="a_button_one">Lifetime Giving</a> <a href="century_club_search.php" class="a_button_one">21st Century Club</a></p>
</div>


<div class="clear"></div>


<!--ROTATOR-->
<div class="rotator-container">
<div id="cbp-qtrotator" class="cbp-qtrotator">
					<div class="cbp-qtcontent">
						<img src="images/profiles/donka.jpg" alt="John Dizikes" />
						<blockquote>
                        <h2>Outstanding teaching in the humanities</h2>
						  <p>The Dizikes teaching award—named for professor emeritus of American studies John Dizikes—celebrates the Humanities faculty's commitment to excellence in teaching and its impact on undergraduate students.</p>
						  <footer>Read More</footer>
						</blockquote>
					</div>
					<div class="cbp-qtcontent">
						<img src="images/profiles/carson.jpg" alt="Carson Watts" />
						<blockquote>
                        <h2>Gabe Zimmerman's memory lives on in scholarship</h2>
						  <p>Student Carson Watts was the second winner of the Gabriel Zimmerman Memorial Scholarship, which supports students who are passionate about social issues and committed to public service.</p>
						  <footer>Read More</footer>
						</blockquote>
					</div>
					<div class="cbp-qtcontent">
						<img src="images/profiles/josh.jpg" alt="img03" />
						<blockquote>
                        <h2>Beyond the comfort zone</h2>
						  <p>With the help of an Irwin Project Grant, which funds student art projects on campus, art and psychology major Josh Katz launched a new trajectory of art-making.</p>
						  <footer>Read More</footer>
						</blockquote>
					</div>
					<div class="cbp-qtcontent">
						<img src="images/profiles/karen.jpg" alt="img04" />
						<blockquote>
                        <h2>Giving back by paying forward</h2>
						  <p>Karen Rhodes and her husband, fellow Slug Robert Weiner, have been consistent, reliable donors to UC Santa Cruz, providing valuable support for Cowell College, the History Department, scholarships, and more.</p>
						  <footer>Read More</footer>
						</blockquote>
					</div>
                    <div class="cbp-qtcontent">
						<img src="images/profiles/infant.jpg" alt="img04" />
						<blockquote>
                        <h2>Child's play = new research</h2>
						  <p>A $165,000 grant to UCSC's Early Education Services has enabled the program to extend childcare hours for students' children and provide an observation room for developmental psychology research.</p>
						  <footer>Read More</footer>
						</blockquote>
					</div>
				</div>
                </div>
<link rel="stylesheet" type="text/css" href="css/rotator.css" />
<script src="js/jquery.cbpQTRotator.min.js"></script>
<script>
			$( function() {
				/*
				- how to call the plugin:
				$( selector ).cbpQTRotator( [options] );
				
				{
					// default transition speed (ms)
					speed : 700,
					// default transition easing
					easing : 'ease',
					// rotator interval (ms)
					interval : 8000
				}
				- destroy:
				$( selector ).cbpQTRotator( 'destroy' );
				*/
				$( '#cbp-qtrotator' ).cbpQTRotator();

			} );
		</script>
        <script language="javascript">
			var divs = $("div.cbp-qtcontent").get().sort(function(){ 
 				return Math.round(Math.random())-0.5; //random so we get the right +/- combo
			    }).slice(0,4)
			$(divs).appendTo(divs[0].parentNode).show();
		</script>

<!--END ROTATOR-->
</div>

<div class="clear"></div>
<?php include("includes/footer.php"); ?>