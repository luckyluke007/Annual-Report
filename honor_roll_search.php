<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Fiscal Year Giving | 2012-13 Annual Report on Philanthropy</title>
<?php include("includes/header.php"); ?>
<script type="text/javascript">
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
</script>
    <div class="content">
        <h1>Fiscal Year Giving</h1><div class="desc-honorroll-13">We deeply appreciate the contributions of the many alumni, parents, staff, faculty, businesses, foundations, and other friends who support UC Santa Cruz and are pleased to acknowledge our donors.</div>
        <div id="left">
            <form action="honor_roll_search.php">
             <div class="separator">
           <label for="name">Search For</label>
            <select name="jumpMenu" id="jumpMenu" onchange="MM_jumpMenu('self',this,0)">
                     <option value="" selected="selected">Fiscal Year Giving</option>
                     <option value="benefactor_search.php">Lifetime Giving</option>
                     <option value="century_club_search.php">21st Century Club</option>
                </select>
                </div>
                <div class="separator">
                    <label for="name">Search by Name</label><br/>
                    <input type="text" id="searchname" name="searchname" value="<?php echo $_GET['searchname']; ?>" size="30">
                </div>
                <div class="donor-check">
                <label for="name">Campus Relationships</label><br />
                    <input type="checkbox" name="alum" value="alumni" <?php if($_GET['alum']) echo "checked"; ?> class="alum-checkbox"/><label for="alum">Alumni</label><br />
                    <input type="checkbox" name="parent" value="parent" <?php if($_GET['parent']) echo "checked"; ?> class="parent-checkbox"/><label for="parent">Parent</label><br />
                    <input type="checkbox" name="staff" value="staff" <?php if($_GET['staff']) echo "checked"; ?> class="staff-checkbox"/><label for="staff">Staff & Faculty</label><br />
                    <input type="checkbox" name="student" value="student" <?php if($_GET['student']) echo "checked"; ?> class="student-checkbox"/><label for="student">Student</label><br />
                    <input type="checkbox" name="friend" value="friend" <?php if($_GET['friend']) echo "checked"; ?> class="friend-checkbox"/><label for="friend">Friends of the Campus</label><br />
                    <input type="checkbox" name="corp" value="corp" <?php if($_GET['corp']) echo "checked"; ?> class="individual-checkbox"/><label for="corp">Business</label><br />
                    <input type="checkbox" name="cassociates" value="cassociates" <?php if($_GET['cassociates']) echo "checked"; ?> class="associates-checkbox"/><label for="cassociates">Chancellor's Associates</label><br />
                </div>
                <div class="separator">
                    <label for="year">Search by Year</label><br/>
                    <input type="text" id="year" name="year" value="<?php echo $_GET['year']; ?>" size="30">
                </div>
                <div class="separator">
                    <label for="amount">Search by Gift Society</label> <a href="#" class="tip">List Guide 
                    <span><dl>
                            <dt>Fiat Lux</dt>
                                <dd>($1 million or more)</dd>
                             <dt>Sustainers</dt>
                                <dd>($500,000 - $999,999)</dd>
                              <dt>Stewards</dt>
                                <dd>($250,000 - $499,999)</dd>
                                <dt>Visionaries</dt>
                                <dd>($100,000 - $249,999)</dd>   
                                <dt>Bayview</dt>
                                <dd>($50,000 - $99,999)</dd> 
                                <dt>Redwood</dt>
                                <dd>($25,000 - $49,999)</dd> 
                                <dt>Manzanita</dt>
                                <dd>($10,000 - $24,999)</dd>
                                <dt>Quarry</dt>
                                <dd>($5,000 - $9,999)</dd> 
                                <dt>Blue & Gold</dt>
                                <dd>($1,000 - $4,999)</dd> 
                                <dt>Chinquapin</dt>
                                <dd>($500 - $999)</dd> 
                                <dt>Builders</dt>
                                <dd>($100 - $499)</dd> 
                            </dl>
                    </span>
                    </a><br/>
                    <select id="amount" name="amount" class="select">
                    <?php
                        $amounts = Array('', 'Fiat Lux', 'Sustainers', 'Stewards', 'Visionaries', 'Bayview', 'Redwood', 'Manzanita', 'Quarry', 'Blue & Gold', 'Chinquapin', 'Builders'); 

                        foreach($amounts as $amount) {
                            if($_GET['amount'] == $amount) $selected = ' selected';
                            else $selected = NULL;
                            echo '<option value="' . $amount . '"' . $selected . '>' . $amount . '</option>' . PHP_EOL;
                        }
                    ?>
                    </select>
                    
                </div>
                <input type="submit" name="csvsend" value="Find" class="button">
            </form>
            <span class="note">If both partners are alumni, their listing is followed by an *. UC Santa Cruz Foundation trustees are indicated by a † and former trustees by a ‡.</span>
        </div>
        <div id="right">
            <?php
                // Generate the content
                $content = NULL;
                 // http://www.scgstudio.com/ucsc/search/honorroll-2013.csv
                if(($fh = fopen('http://mediafiles.ucsc.edu/annualreport/2012-13/honorroll-2013.csv', 'r')) !== FALSE) {
                    $l = 0;
                    while($data = fgetcsv($fh, 10000)) {
                        if($l > 0) {
                            // Searching
                            $include = true;
                            if(!empty($_GET['name']) && !stristr($data[0], $_GET['name'])) $include = false;
                            else if(!empty($_GET['searchname']) && !stristr($data[1], $_GET['searchname'])) $include = false;
                            else if(!(empty($_GET['alum']) && empty($_GET['parent']) && empty($_GET['staff']) && empty($_GET['student']) && empty($_GET['friend']) && empty($_GET['corp']) && empty($_GET['cassociates']))
                                && !(!empty($_GET['alum']) && $data[2] == $_GET['alum']) 
                                && !(!empty($_GET['parent']) && $data[3] == $_GET['parent'])
                                && !(!empty($_GET['staff']) && $data[4] == $_GET['staff']) 
                                && !(!empty($_GET['student']) && $data[5] == $_GET['student'])
                                && !(!empty($_GET['friend']) && $data[6] == $_GET['friend'])
                                && !(!empty($_GET['corp']) && $data[7] == $_GET['corp'])
                                && !(!empty($_GET['cassociates']) && $data[8] == $_GET['cassociates'])) $include = false;
                            else if(!empty($_GET['year']) && !stristr($data[9], $_GET['year'])) $include = false;
                            else if(!empty($_GET['amount']) && $data[10] != $_GET['amount']) $include = false;
                            
                            if($include) {
                                $content .= '<tr><td>' . $data[0] . '</td><td>';
                                
                                if(!empty($data[2])) $content .= '<div class="alumni" title="Alumni"></div>';
                                if(!empty($data[3])) $content .= '<div class="parent" title="Parent"></div>';
                                if(!empty($data[4])) $content .= '<div class="staff" title="Faculty & Staff"></div>';
                                if(!empty($data[5])) $content .= '<div class="student" title="Student"></div>';
                                if(!empty($data[6])) $content .= '<div class="individual" title="Friends of the Campus"></div>';
                                if(!empty($data[7])) $content .= '<div class="corp" title="Business"></div>';
                                if(!empty($data[8])) $content .= '<div class="associates" title="Chancellor Associates"></div>';
                                
                                $content .= '</td><td>' . $data[9] . '</td><td>' . $data[10] .'</td></tr>' . PHP_EOL;
                            }
                        }
                        
                        $l++;
                    }
                    fclose($fh);
                }

                // If content could be loaded and parsed... show the table
                if($content){
                    echo '<table><thead><tr><th scope="col">Name</th><th scope="col">Campus Relationship</th><th scope="col">Year</th><th scope="col">Gift Society</th></tr></thead><tbody>' . PHP_EOL;
                    echo $content;
                    echo '</tbody></table>' . PHP_EOL;
                } else {
                    echo '<p>No matches found.</p>';
                }
            ?>
        </div>
    </div>
<script type="text/javascript">
    // position of the tooltip relative to the mouse in pixel //
var offsetx = 12;
var offsety =  8;

function newelement(newid)
{
    if(document.createElement)
    {
        var el = document.createElement('div');
        el.id = newid;
        with(el.style)
        {
            display = 'none';
            position = 'absolute';
        }
        el.innerHTML = '&nbsp;';
        document.body.appendChild(el);
    }
}
var ie5 = (document.getElementById && document.all);
var ns6 = (document.getElementById && !document.all);
var ua = navigator.userAgent.toLowerCase();
var isapple = (ua.indexOf('applewebkit') != -1 ? 1 : 0);
function getmouseposition(e)
{
    if(document.getElementById)
    {
        var iebody=(document.compatMode &&
            document.compatMode != 'BackCompat') ?
                document.documentElement : document.body;
        pagex = (isapple == 1 ? 0:(ie5)?iebody.scrollLeft:window.pageXOffset);
        pagey = (isapple == 1 ? 0:(ie5)?iebody.scrollTop:window.pageYOffset);
        mousex = (ie5)?event.x:(ns6)?clientX = e.clientX:false;
        mousey = (ie5)?event.y:(ns6)?clientY = e.clientY:false;

        var lixlpixel_tooltip = document.getElementById('tooltip');
        lixlpixel_tooltip.style.left = (mousex+pagex+offsetx) + 'px';
        lixlpixel_tooltip.style.top = (mousey+pagey+offsety) + 'px';
    }
}
function tooltip(tip)
{
    if(!document.getElementById('tooltip')) newelement('tooltip');
    var lixlpixel_tooltip = document.getElementById('tooltip');
    lixlpixel_tooltip.innerHTML = tip;
    lixlpixel_tooltip.style.display = 'block';
    document.onmousemove = getmouseposition;
}
function exit()
{
    document.getElementById('tooltip').style.display = 'none';
}
</script>
<div class="clear"></div>
<?php include("includes/footer.php"); ?>