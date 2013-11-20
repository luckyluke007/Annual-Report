<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>21st Century Club| UC Santa Cruz Summer 2013 Report on Philanthropy</title>
<?php include("includes/header.php"); ?>
<script type="text/javascript">
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
</script>
    <div class="content">
        <h1>21st Century Club</h1><div class="desc-century">The 21st Century Club consists of those who have made deferred gifts or provisions in their estates that will benefit UC Santa Cruz. We are grateful for their vision and confidence in our campus.</div>
        <div id="left">
       
            <form action="century_club_search.php">
            <label for="name">Search For</label>
            <select name="jumpMenu" id="jumpMenu" onchange="MM_jumpMenu('self',this,0)">
                     <option value="honor_roll_search.php" >Annual Giving</option>
                     <option value="benefactor_search.php">Lifetime Giving</option>
                     <option selected="selected">21st Century Club</option>
                </select>
                <div class="separator">
                    <label for="name">Search by Name</label><br/>
                    <input type="text" id="searchname" name="searchname" value="<?php echo $_GET['searchname']; ?>" size="30">
                </div>
                <input type="submit" name="csvsend" value="Find" class="button">
            </form>
            <span class="note">If both partners are alumni, their listing is followed by an *. UC Santa Cruz Foundation trustees are indicated by a † and former trustees by a ‡.</span>
        </div>
        <div id="right">
            <?php
                // Generate the content
                $content = NULL;

                if(($fh = fopen('http://mediafiles.ucsc.edu/annualreport/2012-13/centuryclub-2013.csv', 'r')) !== FALSE) {
                    $l = 0;
                    while($data = fgetcsv($fh, 2000)) {
                        if($l > 0) {
                            // Searching
                            $include = true;
                            if(!empty($_GET['name']) && !stristr($data[0], $_GET['name'])) $include = false;
                            else if(!empty($_GET['searchname']) && !stristr($data[1], $_GET['searchname'])) $include = false;
                            else if(!empty($_GET['club']) && !stristr($data[2], $_GET['club'])) $include = false;
                            
                            if($include) {
                                $content .= '</td><td>' . $data[0] .  '</td></tr>' . PHP_EOL;
                                
                            }
                        }
                        
                        $l++;
                    }
                    fclose($fh);
                }

                // If content could be loaded and parsed... show the table
                if($content){
                    echo '<table><thead><tr><th scope="col">Name</th></tr></thead><tbody>' . PHP_EOL;
                    echo $content;
                    echo '</tbody></table>' . PHP_EOL;
                } else {
                    echo '<p>No matches found.</p>';
                }
            ?>
        </div>
    </div>

<div class="clear"></div>
<?php include("includes/footer.php"); ?>\