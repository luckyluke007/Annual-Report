<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Lifetime Giving| 2012-13 Annual Report on Philanthropy</title>
<?php include("includes/header.php"); ?>
<script type="text/javascript">
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
</script>
    <div class="content">
        <h1>Lifetime Giving</h1><div class="desc-benefactor">University Benefactors are individuals, businesses, and other organizations that have made cumulative contributions of $50,000 or more  to UC Santa Cruz.</div>
        <div id="left">
            <form action="benefactor_search.php">
            <div class="separator">
            <label for="name">Search For</label>
            <select name="jumpMenu" id="jumpMenu" onchange="MM_jumpMenu('self',this,0)">
                     <option value="honor_roll_search.php" >Annual Giving</option>
                     <option selected="selected">Lifetime Giving</option>
                     <option value="century_club_search.php">21st Century Club</option>
                </select>
                </div>
                <div class="separator">
                    <label for="name">Search by Name</label><br/>
                    <input type="text" id="searchname" name="searchname" value="<?php echo $_GET['searchname']; ?>" size="30">
                    </div>
                    <div class="separator">
                    <label for="amount">Amount</label>
                    <select id="amount" name="amount" class="select">
                    <?php
                        $amounts = Array('', '$5,000,000 or more', '$1,000,000 to $4,999,999', '$500,000 to $999,999', '$250,000 to $499,999', '$100,000 to $249,999', '$50,000 to $99,999'); 

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

                if(($fh = fopen('http://mediafiles.ucsc.edu/annualreport/2012-13/benefactor-2013.csv', 'r')) !== FALSE) {
                    $l = 0;
                    while($data = fgetcsv($fh, 2000)) {
                        if($l > 0) {
                            // Searching
                            $include = true;
                            if(!empty($_GET['name']) && !stristr($data[0], $_GET['name'])) $include = false;
                            else if(!empty($_GET['searchname']) && !stristr($data[1], $_GET['searchname'])) $include = false;
                            else if(!empty($_GET['amount']) && !stristr($data[2], $_GET['amount'])) $include = false;
                            
                            if($include) {
                                $content .= '</td><td>' . $data[0] . '</td><td>' . $data[2] . '</td></tr>' . PHP_EOL;
                                
                            }
                        }
                        
                        $l++;
                    }
                    fclose($fh);
                }

                // If content could be loaded and parsed... show the table
                if($content){
                    echo '<table><thead><tr><th scope="col">Name</th><th scope="col">Amount</th></tr></thead><tbody>' . PHP_EOL;
                    echo $content;
                    echo '</tbody></table>' . PHP_EOL;
                } else {
                    echo '<p>No matches found.</p>';
                }
            ?>
        </div>
    </div>

<div class="clear"></div>
<?php include("includes/footer.php"); ?>