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

<!-- INTRO SLIDER -->
<div class="container">
<div class="p1"><img src="../2011-12/images/purposeful.png" alt="Proud"/></div><div class="p2"><img src="../2011-12/images/profound.png" alt="Pathbreaking"/></div><div class="p3"><img src="../2011-12/images/p3.png" alt="Philanthropy"/></div>
                <ul class="bb-custom-grid" id="bb-custom-grid">
                    <li style="margin-right: 15px;">
                        <div class="bb-bookblock">
                            <div class="bb-item"><a href="articles/josh-katz.php"><img src="images/thumbs/image-3-thumb.jpg" alt="Beyond the comfort zone" border="0" title="Beyond the comfort zone - read more"/></a></div>
                            <div class="bb-item"><a href="articles/dizikes.php"><img src="images/thumbs/image-4-thumb.jpg" alt="Honoring outstanding teaching in the humanities" border="0" title="Honoring outstanding teaching in the humanities - read more"/></a></div>
                           
                        </div>
                        <nav>
                            <span class="bb-current" style="font-size: 10px; color: #00458c; padding-top: 2px;">1</span>
                            <span style="font-size: 10px; color: #00458c; padding-top: 2px;">2</span>
                           <!-- <span></span> -->
                            
                        </nav>
                    </li>
                    <li style="margin-right: 15px;">
                        
                        <div class="bb-bookblock">
                            <div class="bb-item"><a href="articles/watts-carson.php"><img src="images/thumbs/image-5-thumb.jpg" alt="Gabe Zimmerman's memory lives on in scholarship" border="0" title="Ready for the spotlight - read more"/></a></div>
                        </div>
                        <nav>
                            <span class="bb-current" style="font-size: 10px; color: #00458c; padding-top: 2px;">1</span>
                        </nav>
                    </li>
                    <li>
                        
                        <div class="bb-bookblock">
                            <div class="bb-item"><a href="articles/karen-rhodes.php"><img src="images/thumbs/image-2-thumb.jpg" alt="Giving back by paying forward" border="0" title="Giving back by paying forward - read more"/></a></div>
                            <div class="bb-item"><a href="articles/early-education.php"><img src="images/thumbs/image-1-thumb.jpg" alt="Child's play = new research" border="0" title="Child's play = new research - read more"/></a></div>
                           
                        
                        </div>
                        <nav>
                            <span class="bb-current" style="font-size: 12px; color: #00458c; padding-top: 2px;">1</span>
                            <span style="font-size: 10px; color: #00458c; padding-top: 2px;">2</span>
                             
                            
                        </nav>
                    </li>
                </ul>
</div>  
<!-- slider -->
<link rel="stylesheet" type="text/css" href="../2011-12/css/slider.css" />
<link rel="stylesheet" type="text/css" href="../2011-12/css/custom2.css" />            
<script type="text/javascript" src="../2011-12/js/jquerypp.custom.js"></script>
<script type="text/javascript" src="../2011-12/js/jquery.bookblock.js"></script>
<script type="text/javascript">
            $(function() {

                var Page = (function() {

                    var $grid = $( '#bb-custom-grid' );

                    return {

                        init : function() {

                            $grid.find( 'div.bb-bookblock' ).each( function( i ) {
                                
                                var $bookBlock =    $( this ),
                                        $nav =  $bookBlock.next().children( 'span' ),
                                        bb =    $bookBlock.bookblock( {
                                            perspective : 900,
                                            speed               : 600,
                                            shadows         : false
                                        } );
                                    
                                // add navigation events
                                $nav.each( function( i ) {
                                
                                    $( this ).on( 'click', function( event ) {
                                        
                                        var $dot = $( this );
                                        if( !bb.isActive() ) {
                                            $nav.removeClass( 'bb-current' );
                                            $dot.addClass( 'bb-current' );
                                        }
                                        bb.jump( i + 1 );
                                        return false;
                                    
                                    } );
                                    
                                } );
                                
                                // add swipe events
                                $bookBlock.children().on( {

                                    'swipeleft'     : function( event ) {
                                    
                                        bb.next();
                                        return false;

                                    },
                                    'swiperight'    : function( event ) {
                                    
                                        bb.prev();
                                        return false;
                                        
                                    }

                                } );
                                
                            } );

                        }
                    
                    };

                })();

                Page.init();

            });
        </script>
</div>

<div class="clear"></div>
<?php include("includes/footer.php"); ?>