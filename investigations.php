<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Concord Recycling Center - Investigations</title>
<link href="styles.css" rel="stylesheet" type="text/css" />
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
    <h1>Investigations</h1>
	Below are pictures of materials placed on-hold listed by most recent first. Click on these pictures to get more information about them. If any
	of these materials are yours, please contact us at (925)689-3900 and we'll help you get this sorted out ASAP. <br><br>
	<?php
	

$api = '83f4e580ad1cec8bd53b6030340ad707';
$user_id = '83557502@N07';
$per_page = 30;

$xml = 'http://api.flickr.com/services/rest/?method=flickr.people.getPublicPhotos&api_key='.$api.'&user_id='.$user_id.'&per_page='.$per_page;

$flickr = simplexml_load_file($xml);
$photos = $flickr->photos->photo;
foreach($photos as $p) {
echo '<a href="http://www.flickr.com/photos/'.$p['owner'].'/'.$p['id'].'">';
echo '<img src="http://farm'.$p['farm'].'.static.flickr.com/'.$p['server'].'/'.$p['id'].'_'.$p['secret'].'_s.jpg" width=100 height=100>';
echo '</a>&nbsp;&nbsp;';
}
if(!$photos)
	echo '<br><center>There are currently no suspicious materials on hold.<br>
	Please call if you have any concerns.</center>';
?>

	
	
    <hr class="clear" /> <!--put a hr clear between each post for ie 6-->
  
  
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
