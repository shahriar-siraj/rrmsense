<?php include '_header.php' ?>
    
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/ac.jpg);">
        <div class="auto-container">
            <h1>Contact Us</h1>
        	<div class="bread-crumb-outer">
                <ul class="bread-crumb clearfix">
                    <li><a href="index-2.html">Home</a></li>
                    <li class="active">Contact Us</li>
                </ul>
            </div>
        </div>
    </section>
    
    
    <!--Contact Section-->
    <section class="contact-section">
    	<div class="auto-container">
        	
            <!--Map Box-->
            <div class="map-box">
            	<div class="map-outer">
                
                    <!--Map Canvas-->
                    <div id="map" style="width:100%;height:500px">
                    </div>
        
                </div>
            </div>
            
            
        	<div class="row clearfix">
            
                <!--Form Container-->
                <div class="form-column col-md-8 col-sm-12 col-xs-12">
                
                    <h2>Contact Us</h2>
                    
                    <!--Contact Form-->
                    <div class="default-form contact-form">
                        <form method="post" action="http://wp.hostlin.com/penza/sendemail.php" id="contact-form">
                            <div class="row clearfix">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                	<div class="form-group">
                                        <input type="text" name="username" value="" placeholder="Name" required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <input type="email" name="email" value="" placeholder="Email" required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <input type="text" name="subject" value="" placeholder="Subject">
                                    </div>
                                </div>
                                
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                	<div class="form-group">
                                        <textarea name="message" placeholder="Message" required></textarea>
                                    </div>
                                </div>
                                
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <button type="submit" class="theme-btn btn-style-three">send Message</button>
                                </div>
                                
                            </div>
                        </form>
                    </div><!--End Contact Form-->
                    
                </div>
                
            	<!--Info Column-->
                <div class="info-column col-md-4 col-sm-12 col-xs-12">
                	<h2>Get in Touch with us</h2>
                    <div class="text">RRMSENSE Global Systech Limited was founded in the early 2015 by the Chairman of the RRM Group</div>
                    
                    <ul class="contact-info">
                        <li><div class="icon-box"><span class="fa fa-phone"></span></div>+88-02-9894484</li>
                        <li><div class="icon-box"><span class="fa fa-envelope-o"></span></div>support@rrmsense.com</li>
                    	<li><div class="icon-box"><span class="fa fa-map-marker"></span></div>Plot # 44, Main Road, Block# J,<br>
                                                                                        Baridhara, Dhaka-1212, Bangladesh.</li>
                    </ul>
                    
                </div>
                
            </div>
        </div>
    </section>
    
    
    <!--Main Footer-->
        <?php include 'footer.php' ?>

         

        
</div>
<!--End pagewrapper-->

<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-long-arrow-up"></span></div>
<script>
function myMap() {
  var myCenter = new google.maps.LatLng(23.8021,90.4230);
  var mapCanvas = document.getElementById("map");
  var mapOptions = {center: myCenter, zoom: 15};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({position:myCenter});
  marker.setMap(map);
}
</script>

<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/revolution.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/validate.js"></script>
<script src="js/script.js"></script>

<!--Google Map APi Key-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDtUq1uzcOigzN0qOKzjORji0qHNagpsgU&callback=myMap"></script>
<script src="js/map-script.js"></script>

</body>

<!-- Mirrored from wp.hostlin.com/penza/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Apr 2017 07:09:46 GMT -->
</html>