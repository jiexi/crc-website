<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Concord Recycling Center - Location & Hours</title>
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
        <h1>Contact Us</h1>
        <div>
          <div class="left_details"> <strong>Concord Recycling Center </strong>
            <p> <span class="contact_title">Phone:</span> <span class="contact_detail">925 689 3900</span> <br />
              <span class="contact_title">Fax:</span> <span class="contact_detail">925 689 3909</span> <br /></p>
            <hr class="clear" />
            <p><span class="green"><strong>Address:</strong></span><br />
              1320 Galaxy Way <br />
              Concord CA, 94520 </p>
          </div>
          <div id="map" class="map"></div>
          
          <!--change the big long number after key= to your API from http://code.google.com/apis/maps/signup.html-->
            <script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=ABQIAAAAEL82E0q5SXEh6WA-ss6WDhTvwTNFAX6qd4M7lzW57M7mbhEJExQtbzt3cSzch5Ag0skMQbjO7ekuTw" type="text/javascript"></script>
            <script type="text/javascript">
			 //<![CDATA[
			function loadmap() {
			 if (GBrowserIsCompatible()) {
			  var map = new GMap2(document.getElementById("map"));
			  var geocoder = new GClientGeocoder();
			  map.setCenter(new GLatLng(37.4419, -122.1419), 13);
			  map.addControl(new GSmallMapControl());
			  //change the address below to the one you want the marker to point to
			  var address = "1320 Galaxy Way, Concord Ca";
			  geocoder.getLatLng(
			      address,
			      function(point) {
			       if (!point) {
			         alert(address + " not found");
			       } else {
			         map.setCenter(point, 15);
			         var marker = new GMarker(point);
			         map.addOverlay(marker);
					  // change the address below to the one you want displayed in the popup
			         marker.openInfoWindowHtml(
			            "<strong>Company:</strong><br>1320 Galaxy Way"+
			            " <br>Concord, CA");
			       }
			     }
			  );
			 }
			}
			window.onload=loadmap;
			//]]>
			</script>
          
          <hr />
          <h1>Email Us </h1>
          <p>To contact us by email please complete the form below or email <b>ppri2005([at)]yahoo.com</b> directly.</p>
          <form action="formsubmit.php" method="post">
            <fieldset id="contact">
            <label for="name">Name:</label>
            <input name="name" type="text" class="forms" id="name" size="35" />
            <br>
            <label for="email">Email:</label>
            <input name="email" type="text" class="forms" id="email" size="35" />
            <br>
            <label for="phone">Phone:</label>
            <input name="phone" type="text" class="forms" id="phone" size="35" />
            <br>
            <label for="captcha">Anti-Spam :</label><br />
 What word comes next?: "reduce, reuse, ______"
 <label for="captcha"></label>
            <input name="captcha" type="text" class="forms" id="captcha" size="35" />
            <br>
            <label for="message">Message:</label>
            <textarea name="message" cols="35" rows="6" class="forms" id="message"></textarea>
            <input type="image" id="submit" name="submit" src="images/button_submit.gif" title="Submit Message" />
            </fieldset>
          </form>
        </div>
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