<?PHP 
/**
 * Social Like Content Locker
 *
 * @author      Muneeb <m4munib@hotmail.com>
 * @copyright   Muneeb <m4munib@hotmail.com>
 * @twitter     http://twitter.com/#!/muhammadmunib
 */
 
 $enabledpage = false;  //change this to true to re-enable the page
 
 if(!$enabledpage)
	header("Location: http://concordrecyclingcenter.com/?r=coupondisabled");
 
ob_start();
require_once "lib/clsSocialLikeLocker.php";

if(!isset($_GET['c']) || $_GET['c'] == '')
	$couponid = "free4all";
else
	$couponid = $_GET['c'];

 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Concord Recycling Center - Coupon</title>
<link href="styles.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" media="screen" href="js/jsstyle.css" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<meta name="description" content="CRV and Scrap Recycling Center" />
<meta name="keywords" content="recycling, CRV, bottles, cans, recycle" />
<!--below is the code to display the menu properly in ie6-->
<!--[if IE 6]>
<style type="text/css"> 
#header_contact{
margin:8px 25px 0px 0px; }/* you may need to change these margins if your contact info is larger, order is top, right, bottom, left*/
/*the 2 columns of white*/
#content_bg { 
	background-image:url(images/content_box_tile.gif);
	background-repeat:repeat-y;
}
</style>
<script type="text/javascript" src="js/hide-select.js"></script> 
<script type="text/javascript" src="js/main.js"></script>
<script defer type="text/javascript" src="js/pngfix.js"></script>
<![endif]-->
</head>
<body>
<div id="background_texture">
  <div id="leaf">
    <div id="wrapper">

<?php include 'header.php'; ?>
      
      <div class="top"><img src="images/content_box_top.png" width="940" height="10" alt="top" /></div>
      <div id="content_bg">
        <div id="left_column">
          <!--start main text-->
          <h1>Coupon: <?php echo $couponid; ?></h1>
          <p>
		  
		  
		  <script type="text/javascript" src="http://widgets.digg.com/buttons.js" /></script>
<script type="text/javascript" src="https://apis.google.com/js/plusone.js" /></script>
<script type="text/javascript" src="http://connect.facebook.net/en_US/all.js#xfbml=1" /></script>
<script type="text/javascript" src="http://platform.twitter.com/widgets.js" /></script>
<script type="text/javascript" src="js/events.js" /></script>

<?PHP
$oLocker = new clsSocialLikeLocker();
$share_url = clsSocialLikeLocker::getCurrentURL();

$isLiked = $oLocker->isLiked($share_url);
?>
  <?PHP if($isLiked == false): ?>
<div class="panels">
    <h2>This Coupon is Locked</h2>
    <p>Tweet, Like or Google+ to unlock it</p><br>
    <input type="hidden" id="url_request" value="unlock_handler.php?url=<?PHP echo urlencode($share_url); ?>" />
    <div align="center" style="margin-left:195px; margin-top:20px;">
        <div class="panel" title="Tweet this item"> 
        <a href="http://twitter.com/share" 
           class="twitter-share-button"
           data-url="<?PHP echo $share_url; ?>"
           data-text="Social URL/Content Locker"
           data-count="vertical"
           data-via="muhammadmunib">Tweet</a>
    </div> 
    
    <!-- Facebook --> 
    <div class="panel" title="Like on Facebook"> 
        <fb:like href="<?PHP echo $share_url; ?>" layout="box_count" action="like" font="arial" show_faces="true" width="48" height="65"></fb:like> 
    </div> 

       <!-- Google Buzz --> 
    <div class="panel" title="Post to Google Buzz"> 
            <g:plusone size="tall" callback="gplus_callback" href="<?PHP echo $share_url; ?>"></g:plusone> 
    </div>    
    </div>
    
    <br class="clear" />
   
</div>
<?PHP endif; ?>

<?PHP if($isLiked == true): ?>
<div class="panels">
        <h2>Thanks! Here's your coupon.</h2>
        <p>
		<?php switch($couponid)
		{
		case "free4all":
			echo "Coupon code here";
			break;
		default:
			echo "This coupon does not exist! Sorry :(";
		}
		?>
		
		</p>
</div>
 <?PHP endif; ?>
		  
		  
		  </p>
          <!--start box 3-->
         <!-- <div class="service_box_container">
            <div class="text">
              <h2>References </h2>
              <p><a href="http://concordrecyclingcenter.com/references/MTL_flow.pdf">Metal Theft Laws - Flow Chart.pdf</a><br></p>
            </div>
            <hr class="clear" />
          </div>-->
		  
		  
        </div>
        <!--end left column-->
<?php include 'sidebar.php'; ?>
        <hr class="clear" />
        <!--this make sure the bottom of the columns stays at the bottom-->
      </div>
      <div class="bottom"><img src="images/content_box_bottom.png" width="940" height="21" alt="bottom" /></div>
    </div>
<?php include 'footer.php'; ?>
  </div>
</div>
</body>
</html>
