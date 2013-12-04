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
<p>Dear Friends of UC Santa Cruz,</p>
<p>I hope you are enjoying the changing of the seasons—at last, there's a chill in the air. This is the perfect time for me to thank you for your support of UC Santa Cruz and to share my excitement about UCSC's first-ever comprehensive fundraising campaign. </p>
<p>We launched the public phase of The Campaign for UC Santa Cruz in October with a lunch celebration on the lawn outside University House. That sweeping view of lower campus and the Monterey Bay always inspires, and it was a delight to announce that we are more than halfway to our goal of raising $300 million for the people, programs, and facilities that make UCSC unique.</p>
<p>I'm so grateful for your participation, your vision, and your enthusiasm. With your help, this campaign will enhance the experience of undergraduates, the quality of every academic division, and signature initiatives in genomics, coastal sustainability, data science, and the arts and sciences. We are raising support for undergraduate scholarships and graduate fellowships, as well as endowments for academic programs and faculty positions. And won't it be a great day when we can reopen our beloved Quarry Amphitheater?</p>
<p>The holiday season is upon us, and big things are on the horizon. In partnership with you, I'm confident we will achieve our goals. As we give thanks, I am more grateful than ever for your support. Thank you.</p>
<p>Sincerely,</p>
<p><img src="images/signature.png" alt="Chancellor's signature" /><br />
  George Blumenthal<br />
  Chancellor, UC Santa Cruz</p>
</div>
  <img src="images/george.jpg" width="940" height="529" alt="Chancellor George Blumenthal - Signature" />
  </div>
  <!-- END MESSAGE-->
<video id="example_video_1" class="video-js vjs-default-skin" controls preload="none" width="940" height="529"
      poster="images/video-image.png"data-setup="{}" style="border:0px solid #f2f0e4; -webkit-border-radius: 12px; -moz-border-radius: 12px; border-radius: 12px;" title="The Spirit of UCSC" alt="P3: Passion. Promise. Philanthropy. Stories of people who are making a difference at UC Santa Cruz. Watch our Thank You video.">
    <source src="http://mediafiles.ucsc.edu/annualreport/2012-13/thespiritucsc.mp4" type='video/mp4'/>
    <source src="http://mediafiles.ucsc.edu/annualreport/2012-13/thespiritucsc.webm" type='video/webm' />
    <source src="http://mediafiles.ucsc.edu/annualreport/thespiritucsc.theora.ogv" type='video/ogg' />
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