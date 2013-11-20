<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Home | 2012-13 Annual Report on Philanthropy</title>
<?php include("includes/header.php"); ?>
<div class="content">
<a href="#" class="show_hide"><img src="images/chancellors-message-v2.png" alt="View Chancellor's Message" border="0"/></a>
<!-- MESSAGE -->
<div class="slidingDiv">
<div class="message">
<h1>Chancellor's Message</h1>
<p>Dear friends of UC Santa Cruz,</p>
<p>Fall is nearly here, and as the days get shorter and the nights a little chillier, my thoughts turn to the season before us—a season of gratitude.</p>
<p>I'm grateful for you. You've been with us through thick and thin—and we honor and recognize you. This past year, your generosity helped UC Santa Cruz make great strides, reach new milestones, further traditions, and burnish a reputation that becomes more dazzling every day. I can't wait to see what we can accomplish together this year, and each year after that. </p>
<p>Because of people like you, UCSC has been able to improve facilities, recognize outstanding faculty and support their research, award scholarships to deserving students, and continue making progress in areas of inquiry that are important to humanity.</p>
<p>The future is bright for UC Santa Cruz. And you are a part of it. I could not be happier to have you as part of the UCSC family. Thank you.</p>
<p>Thank you.</p>
<p>Sincerely,</p>
<p><img src="images/signature.png" alt="Chancellor's signature" /><br />
  George Blumenthal<br />
  Chancellor, UC Santa Cruz</p>
</div>
  <img src="images/george.jpg" width="940" height="529" alt="Chancellor George Blumenthal - Signature" />
  </div>
  <!-- END MESSAGE-->
<video id="example_video_1" class="video-js vjs-default-skin" controls preload="none" width="940" height="529"
      poster="images/video-image.jpg"data-setup="{}" style="border:0px solid #f2f0e4; -webkit-border-radius: 12px; -moz-border-radius: 12px; border-radius: 12px;" title="P3: Passion. Promise. Philanthropy. Stories of people who are making a difference at UC Santa Cruz. Watch our Thank You video." alt="P3: Passion. Promise. Philanthropy. Stories of people who are making a difference at UC Santa Cruz. Watch our Thank You video.">
    <source src="http://mediafiles.ucsc.edu/annualreport/2012-13/make_it_happen.mp4" type='video/mp4'/>
    <source src="http://mediafiles.ucsc.edu/annualreport/2012-13/thank-you.webm" type='video/webm' />
    <source src="http://mediafiles.ucsc.edu/annualreport/make_it_happen.theora.ogv" type='video/ogg' />
  </video>
  <script type="text/javascript">
_V_("example_video_1", {}, function(){

this.addEvent("ended", function(){ 
this.posterImage.show(); 
});

});
</script>
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

<?php include("includes/footer.php"); ?>