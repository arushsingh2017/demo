
<!-- head section start!-->
<?php include('include/head.php') ?>
<!-- End !-->
<!-- navgation section start!-->
<?php include('include/header.php') ?>
<!-- end!-->
    
    <style>
    	.sidebar-booking-box {
    position: relative;
}
.sidebar-booking-box h3 {
    background: #7d3fd0 none repeat scroll 0 0;
    color: #ffffff;
    padding: 22px 0;
    font-weight: bold;
    letter-spacing: 1px;
    position: relative;
    margin: 0px;
}
.booking-box-body {
    background: #e6e6e6 none repeat scroll 0 0;
    box-shadow: 0 0 5px #e6e6e6;
    padding: 15px 5px 0px;
}
.booking-box-body label {
    margin-top: 25px;
    font-weight: normal;
    font-size: 14px;
}
.booking-box-body .input-group-addon {
    background-color: #07253F;
    border: medium none;
    border-radius: 0;
    color: #fff;
}
.booking-box-body .custom-select-button {
    background: #ffffff;
}
.btn-group>.btn:first-child {
    /* margin-left: 0; */
}
.booking-box-body span {
    margin-left: 10px;
}
.bootstrap-select.btn-group .dropdown-menu {
    background: #07253F;
    border-radius: 0;
}
.bootstrap-select.btn-group .dropdown-menu li a {
    color: #ffffff;
    background: #07253F !important;
}
.booking-box-body .grand-total {
    margin-top: 25px;
    margin-left: -5px;
    margin-right: -5px;
    overflow: hidden;
    background: #07253F;
    padding: 20px 0px;
}
.booking-box-body .grand-total button:hover {
    background: #f9676b;
}
.booking-box-body .grand-total button {
    color: #ffffff;
    border: none;
    background: transparent;
    border: 2px solid #ffffff;
    padding: 8px 40px;
    font-weight: bold;
}
.booking-box-body .grand-total h4 {
    background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
    color: #fff;
    margin: 10px 0;
    padding: 0;
    text-transform: capitalize;
}
.sidebar-booking-box h3:after {
    background: #7d3fd0 none repeat scroll 0 0;
    border-radius: 50%;
    color: #fff;
    content: "\f044";
    font-family: "FontAwesome";
    left: 45%;
    padding: 10px 17px;
    position: absolute;
    top: 63%;
}
.sidebar-booking-box h3:after {
    background: #7d3fd0 none repeat scroll 0 0;
    border-radius: 50%;
    color: #fff;
    content: "\f044";
    font-family: "FontAwesome";
    left: 45%;
    padding: 10px 17px;
    position: absolute;
    top: 63%;
}
.hr-seperator {
    border-top: 1px solid #e6e6e6;
    margin-top: 45px;
    margin-bottom: 45px;
    position: relative;
}
.hr-seperator:after {
    background: #e6e6e6 none repeat scroll 0 0;
    border: none;
    border-radius: 50%;
    color: #07253F;
    content: "\f18c";
    font-family: "FontAwesome";
    left: 50%;
    margin-top: -22px;
    padding: 10px 15px;
    position: absolute;
}
.custom-head {
    position: relative;
    line-height: 1.6;
    margin-top: 0px;
}
.custom-head:after {
    background: #f2676b none repeat scroll 0 0;
    content: "";
    height: 5px;
    left: 0;
    position: absolute;
    top: 110%;
    width: 60px;
}
.hotel-room-detail {
    padding-left: 20px;
}
.hotel-room-desc {
    overflow: hidden;
    margin-top: 30px;
    margin-bottom: 0px;
}
.hotel-room-detail {
    padding-left: 20px;
}
.image-set .image-wrapper {
    position: relative;
    overflow: hidden;
    margin-top: 30px;
}
.image-set img {
    max-width: 100%;
    position: relative;
    transition: all 0.5s;
    -ms-transition: all 0.5s;
    -moz-transition: all 0.5s;
    -o-transition: all 0.5 ease;
    -webkit-transition: all 0.5 ease;
}
.image-set .img-caption {
    background: rgba(10, 49, 82, 0.5);
    position: absolute;
    height: 100%;
    width: 100%;
    top: 0;
    opacity: 0;
}

.image-set .link {
    left: 45%;
    position: absolute;
    top: 40%;
    opacity: 0;
}
.image-set .link a {
    background: #f9676b none repeat scroll 0 0;
    border-radius: 50%;
    color: #fff;
    display: inline-block;
    font-size: 18px;
    height: 30px;
    padding: 3px 7px;
    width: 30px;
    opacity: 0;
}
.fa-plus:before {
    content: "\f067";
}
.image-set .image-wrapper:hover .img-caption {
    opacity: 1;
}
 .image-set .image-wrapper:hover .link {
    opacity: 1;
}
.image-set .image-wrapper:hover img {
    transform: scale(1.5);
    -webkit-transform: scale(1.5);
    -o-transform: scale(1.5);
    -ms-transform: scale(1.5);
    -moz-transform: scale(1.5);
}
.image-set .image-wrapper:hover img {
    transform: scale(1.5);
    -webkit-transform: scale(1.5);
    -o-transform: scale(1.5);
    -ms-transform: scale(1.5);
    -moz-transform: scale(1.5);
}
.image-set .image-wrapper:hover .link a {
    opacity: 1;
}
    </style>
    
    <body>
       
        <!--================ PAGE-COVER =============-->
        <section class="page-cover" id="cover-about-us">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                    	<h1 class="page-title">Tour Packages</h1>
                       
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end page-cover -->
        
        
        <!--===== INNERPAGE-WRAPPER ====-->
        <section class="innerpage-wrapper">
        	<div id="about-content-2" class="innerpage-section-padding">
        		<div class="container">
        			<div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-7">
                        	<div id="room-gallery" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#room-gallery" data-slide-to="0" class=""></li>
						<li data-target="#room-gallery" data-slide-to="1" class=""></li>
                        <li data-target="#room-gallery" data-slide-to="2" class=""></li>
					</ol>
					<div class="carousel-inner" role="listbox">
						<div class="item">
							<img src="images/hotel-slide1.jpg" alt="Cruise">
						</div>
						<div class="item">
							<img src="images/hotel-slide1.jpg" alt="Cruise">
						</div>
						<div class="item active">
							<img src="images/hotel-slide1.jpg" alt="Cruise">
						</div>
					</div>
					
				</div>
                        </div>
                        
                    	<div class="col-xs-12 col-sm-12 col-md-5">
                        	<div class="col-md-12 sidebar-wrapper clear-padding">
					<div class="sidebar-booking-box">
						<h3 class="text-center">MAKE A BOOKING</h3>
						<div class="booking-box-body">
							<form>
								<div class="col-md-12 col-sm-12">
									<label>Your Name</label>
									<div class="input-group margin-bottom-sm">
										<input type="text" name="location" class="form-control" placeholder="Mr. User Name">
										<span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
									</div>
								</div>
                                
                                <div class="col-md-6 col-sm-12">
									<label>Conatct No.</label>
									<div class="input-group margin-bottom-sm">
										<input type="text" name="location" class="form-control" placeholder="User Contact No. ">
										<span class="input-group-addon"><i class="fa fa-phone fa-fw"></i></span>
									</div>
								</div>
                                
                                 <div class="col-md-6 col-sm-12">
									<label>Email Id</label>
									<div class="input-group margin-bottom-sm">
										<input type="text" name="location" class="form-control" placeholder="User@gmail.com">
										<span class="input-group-addon"><i class="fa fa-envelope fa-fw"></i></span>
									</div>
								</div>
                                
                                <div class="col-md-12 col-sm-12">
									<label>Local Address</label>
									<div class="input-group margin-bottom-sm">
										<input type="text" name="location" class="form-control" placeholder="Enter Address">
										<span class="input-group-addon"><i class="fa fa-map-marker fa-fw"></i></span>
									</div>
								</div>
                                
								<div class="clearfix"></div>
								
								
								<div class="clearfix"></div>
								<div class="grand-total text-center">
									
									<div class="col-md-6 col-sm-6 col-xs-6">
										<button type="submit">BOOK</button>
									</div>
								</div>
							</form>
						</div>
					</div>
					
				</div>
                        </div>
    
                    </div>
                <!-- end row -->
                
                <div class="hr-seperator"></div>                
                <div class="row">
                	<div class="hotel-room-desc">
					<div class="col-md-2 col-sm-2 clear-padding">
						<h3 class="custom-head">DAY 1 PARIS</h3>
					</div>
					<div class="col-md-10 col-sm-10 hotel-room-detail">
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
						<div class="image-set">
							<div class="col-md-4 col-sm-4">
								<div class="image-wrapper">
									<img src="images/tour1.jpg" alt="Cruise">
									<div class="img-caption">
										<div class="link">
											<a title="Romantic Paris" href="images/tour1.jpg">
												<i class="fa fa-plus"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="image-wrapper">
									<img src="images/tour2.jpg" alt="Cruise">
									<div class="img-caption">
										<div class="link">
											<a title="Bangkok" href="images/tour2.jpg">
												<i class="fa fa-plus"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="image-wrapper">
									<img src="images/tour3.jpg" alt="Cruise">
									<div class="img-caption">
										<div class="link">
											<a title="Dubai" href="images/tour3.jpg">
												<i class="fa fa-plus"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
                </div>
                
                  <div class="hr-seperator"></div>                
                <div class="row">
                	<div class="hotel-room-desc">
					<div class="col-md-2 col-sm-2 clear-padding">
						<h3 class="custom-head">DAY 2 London</h3>
					</div>
					<div class="col-md-10 col-sm-10 hotel-room-detail">
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
						<div class="image-set">
							<div class="col-md-4 col-sm-4">
								<div class="image-wrapper">
									<img src="images/tour1.jpg" alt="Cruise">
									<div class="img-caption">
										<div class="link">
											<a title="Romantic Paris" href="images/tour1.jpg">
												<i class="fa fa-plus"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="image-wrapper">
									<img src="images/tour2.jpg" alt="Cruise">
									<div class="img-caption">
										<div class="link">
											<a title="Bangkok" href="images/tour2.jpg">
												<i class="fa fa-plus"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="image-wrapper">
									<img src="images/tour3.jpg" alt="Cruise">
									<div class="img-caption">
										<div class="link">
											<a title="Dubai" href="images/tour3.jpg">
												<i class="fa fa-plus"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
                </div>
                
                  <div class="hr-seperator"></div>                
                <div class="row">
                	<div class="hotel-room-desc">
					<div class="col-md-2 col-sm-2 clear-padding">
						<h3 class="custom-head">DAY 3 PARIS</h3>
					</div>
					<div class="col-md-10 col-sm-10 hotel-room-detail">
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
						<div class="image-set">
							<div class="col-md-4 col-sm-4">
								<div class="image-wrapper">
									<img src="images/tour1.jpg" alt="Cruise">
									<div class="img-caption">
										<div class="link">
											<a title="Romantic Paris" href="images/tour1.jpg">
												<i class="fa fa-plus"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="image-wrapper">
									<img src="images/tour2.jpg" alt="Cruise">
									<div class="img-caption">
										<div class="link">
											<a title="Bangkok" href="images/tour2.jpg">
												<i class="fa fa-plus"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="image-wrapper">
									<img src="images/tour3.jpg" alt="Cruise">
									<div class="img-caption">
										<div class="link">
											<a title="Dubai" href="images/tour3.jpg">
												<i class="fa fa-plus"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
                </div>
                
                  <div class="hr-seperator"></div>                
                <div class="row">
                	<div class="hotel-room-desc">
					<div class="col-md-2 col-sm-2 clear-padding">
						<h3 class="custom-head">DAY 4 PARIS</h3>
					</div>
					<div class="col-md-10 col-sm-10 hotel-room-detail">
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
						<div class="image-set">
							<div class="col-md-4 col-sm-4">
								<div class="image-wrapper">
									<img src="images/tour1.jpg" alt="Cruise">
									<div class="img-caption">
										<div class="link">
											<a title="Romantic Paris" href="images/tour1.jpg">
												<i class="fa fa-plus"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="image-wrapper">
									<img src="images/tour2.jpg" alt="Cruise">
									<div class="img-caption">
										<div class="link">
											<a title="Bangkok" href="images/tour2.jpg">
												<i class="fa fa-plus"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="image-wrapper">
									<img src="images/tour3.jpg" alt="Cruise">
									<div class="img-caption">
										<div class="link">
											<a title="Dubai" href="images/tour3.jpg">
												<i class="fa fa-plus"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
                </div>
                    
                    
        		</div><!-- end container -->
        	</div><!-- end about-content-2 -->
            
           
            
           
            
        </section><!-- end innerpage-wrapper -->
        
        
      
       
        
        <!--======================= FOOTER =======================-->
       
       <?php include('include/footer.php') ?>
       <!-- end !-->  
        
      
    </body>
</html>
