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
						<img src="images/profiles/meka.jpg" alt="Choosing a different path: meet Meka Williams" />
						<blockquote>
                        <h2>Choosing a different path: meet Meka Williams</h2>
						  <p>Student Meka Williams's fierce determination to succeed—along with help from campus and private support programs—diverted her from a potentially grim future.</p>
						  <footer><a href="articles/meetmeka-112013.php">Read More</a></footer>
						</blockquote>
					</div>
					<div class="cbp-qtcontent">
						<img src="images/profiles/konopelski.jpg" alt="Way beyond a job: Joe and Nancy Cox-Konopelski" />
						<blockquote>
                        <h2>Way beyond a job</h2>
						  <p>UCSC's unique and groundbreaking Academic Excellence program has supported thousands of students since it started in 1986.</p>
						  <footer><a href="articles/waybeyondajob-112013.php">Read More</a></footer>
						</blockquote>
					</div>
					<div class="cbp-qtcontent">
						<img src="images/profiles/rebeles.jpg" alt="Connecting science and justice: Patricia and Rowland Rebeles" />
						<blockquote>
                        <h2>Sparking a relationship between art and science</h2>
						  <p>With their $1 million kick-off gift, Patricia and Rowland Rebele are helping to make into reality the highly anticipated Institute of the Arts and Sciences.</p>
						  <footer><a href="articles/connecting-112013.php">Read More</a></footer>
						</blockquote>
					</div>
                    <div class="cbp-qtcontent">
						<img src="images/profiles/pehl.jpg" alt="Dorothy Everett" />
						<blockquote>
                        <h2>Honoring a 'quietly incredible woman'</h2>
						  <p>When alumnus Mark Headley and his wife, Christina Pehl, decided to make a gift establishing a new endowed chair at UCSC, they wanted to commemorate an extraordinary woman who worked tirelessly for four University of California presidents.</p>
						  <footer><a href="articles/incrediblewoman-112013.php">Read More</a></footer>
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

<?php include("includes/footer.php"); ?>