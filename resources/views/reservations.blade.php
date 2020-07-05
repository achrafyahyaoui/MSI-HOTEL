<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>MSI Hotel</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="colorlib.com">
		<!-- LINEARICONS -->
		<link rel="stylesheet" href="../../../fonts/linearicons/style.css">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="../../../fonts/material-design-iconic-font/css/material-design-iconic-font.css">

		<!-- DATE-PICKER -->
		<link rel="stylesheet" href="../../../vendor/date-picker/css/datepicker.min.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="../../../css/css/style.css">
	</head>
	<body>
		<div class="wrapper">
			<div class="inner">
				<div class="image-holder">
					<img src="../../../images/form-wizard.jpg" alt="">
					<h3>Your reservation</h3>
				</div>
            	<div id="wizard">
            		<!-- SECTION 1 -->
	                <h4>Choose Date</h4>
	                <section>
						<div class="form-row">
							<div class="form-holder">
								<input type="text" class="form-control datepicker-here pl-85" data-language='en' data-date-format="dd - m - yyyy" id="dp1">
								<span class="lnr lnr-chevron-down"></span>
								<span class="placeholder">Check in :</span>
							</div>
							<div class="form-holder">
								<input type="text" class="form-control datepicker-here pl-96" data-language='en'  data-date-format="dd - m - yyyy" id="dp2">
								<span class="lnr lnr-chevron-down"></span>
								<span class="placeholder">Check out :</span>
							</div>
						</div>
						<div class="form-row">
							<div class="select">
								<div class="form-holder">
									<div class="select-control">Duration :</div>
									<span class="lnr lnr-chevron-down"></span>
								</div>
								<ul class="dropdown">
									<li rel="1 Night">1 Night</li>
									<li rel="2 Night">2 Night</li>
									<li rel="3 Night">3 Night</li>
									<li rel="4 Night">4 Night</li>
									<li rel="5 Night">5 Night</li>
								</ul>
							</div>
							<div class="select">
								<div class="form-holder">
									<div class="select-control">Room :</div>
									<span class="lnr lnr-chevron-down"></span>
								</div>
								<ul class="dropdown">
									<li rel="1 Room">1 Room</li>
									<li rel="2 Room">2 Room</li>
									<li rel="3 Room">3 Room</li>
									<li rel="4 Room">4 Room</li>
									<li rel="5 Room">5 Room</li>
								</ul>
							</div>
						</div>

						<button class="forward">Book now
							<i class="zmdi zmdi-long-arrow-right"></i>
						</button>
	                </section>

					<!-- SECTION 2 -->
	                <h4>Choose Room</h4>
	                <section class="section-style">
                		<div class="board-wrapper">
                			<div class="board-inner">
                				<div class="board-item">
                					Room 1 :
                					<span>Small Room</span>
                				</div>
                				<div class="board-item">
                					Room 2 :
                					<span>Luxury Room</span>
                				</div>
                				<div class="board-line">
                					<div class="board-item">
                						Adult :
                						<span>2</span>
                					</div>
                					<div class="board-item">
                						Childern :
                						<span>0</span>
                					</div>
                				</div>
                			</div>
                		</div>
                		<div class="form-wrapper">
                			<div class="form-row">
                				<div class="form-holder w-100">
									<input type="text" class="form-control datepicker-here" data-language='en' data-date-format="dd M yyyy" id="dp3">
									<span class="lnr lnr-calendar-full"></span>
								</div>
                			</div>
                			<div class="form-row">
                				<div class="form-holder w-100">
									<input type="text" class="form-control datepicker-here" data-language='en' data-date-format="dd M yyyy" id="dp4">
									<span class="lnr lnr-calendar-full"></span>
								</div>
                			</div>
                			<div class="form-group">
                				<label for="">Room 1 :</label>
	                			<div class="form-row">
									<div class="select mr-20">
										<div class="form-holder">
											<div class="select-control">1 Adult</div>
											<span class="lnr lnr-chevron-down"></span>
										</div>
										<ul class="dropdown">
											<li rel="1 Adult">1 Adult</li>
											<li rel="2 Adults">2 Adults</li>
											<li rel="3 Adults">3 Adults</li>
										</ul>
									</div>

									<div class="select">
										<div class="form-holder">
											<div class="select-control">No Child</div>
											<span class="lnr lnr-chevron-down"></span>
										</div>
										<ul class="dropdown">
											<li rel="1 Room">No Child</li>
											<li rel="1 Child">1 Child</li>
											<li rel="2 Children">2 Children</li>
											<li rel="3 Children">3 Children</li>
										</ul>
									</div>
	                			</div>
                			</div>
                			<div class="form-group">
                				<label for="">Room 2 :</label>
	                			<div class="form-row">
									<div class="select mr-20">
										<div class="form-holder">
											<div class="select-control">1 Adult</div>
											<span class="lnr lnr-chevron-down"></span>
										</div>
										<ul class="dropdown">
											<li rel="1 Adult">1 Adult</li>
											<li rel="2 Adults">2 Adults</li>
											<li rel="3 Adults">3 Adults</li>
										</ul>
									</div>

									<div class="select">
										<div class="form-holder">
											<div class="select-control">No Child</div>
											<span class="lnr lnr-chevron-down"></span>
										</div>
										<ul class="dropdown">
											<li rel="1 Room">No Child</li>
											<li rel="1 Child">1 Child</li>
											<li rel="2 Children">2 Children</li>
											<li rel="3 Children">3 Children</li>
										</ul>
									</div>
	                			</div>
                			</div>
	                		<button class="forward">Book now
								<i class="zmdi zmdi-long-arrow-right"></i>
							</button>
                		</div>
	                </section>


	                <!-- SECTION 3 -->
	                <h4>Make a Reservation</h4>
	                <section>
                    	<div class="form-row">
							<div class="form-holder">
								<input type="text" class="form-control" placeholder="First Name :">
							</div>
							<div class="form-holder">
								<input type="text" class="form-control" placeholder="Last Name :">
							</div>
						</div>
						<div class="form-row">
							<div class="form-holder">
								<input type="text" class="form-control" placeholder="Phone :">
							</div>
							<div class="form-holder">
								<input type="text" class="form-control" placeholder="Mail :">
							</div>
						</div>
						<div class="form-row">
							<div class="form-holder w-100">
								<input type="text" class="form-control" placeholder="Address :">
							</div>
						</div>
						<div class="form-row mb-21">
							<div class="form-holder w-100">
								<textarea name="" id="" class="form-control" style="height: 79px;" placeholder="Special Requirements :"></textarea>
							</div>
						</div>
	                    <div class="checkbox">
							<label>
								<input type="checkbox"> I have read and accept the <a href="#">terms and conditions.</a>
								<span class="checkmark"></span>
							</label>
						</div>
	                    <button class="forward" style="width: 195px; margin-top: 44px;">Book by email
							<i class="zmdi zmdi-long-arrow-right"></i>
						</button>
	                </section>

	                <!-- SECTION 4 -->
	                <h4>Confirmation</h4>
	                <section class="section-style">
						<div class="board-wrapper">
                			<div class="board-inner">
                				<div class="board-item">
                					Check In :
                					<span>2-5-2018</span>
                				</div>
                				<div class="board-item">
                					Check Out :
                					<span>8-5-2018</span>
                				</div>
                			</div>
                		</div>
                		<div class="pay-wrapper">
                			<div class="bill">
	                			<div class="bill-cell">
	                				<div class="bill-item">
		            					<div class="bill-unit">
		            						Room 1 :  <span>Small Room</span>
		            					</div>
		            					<span class="price">$34</span>
		            				</div>
		            				<div class="bill-item people">
		            					<div class="bill-unit">
		            						Adult : <span>2</span>
		            					</div>
		            					<div class="bill-unit">
		            						Children : <span>0</span>
		            					</div>
		            				</div>
	                			</div>
	            				<div class="bill-cell" style="margin-bottom: 13px">
	                				<div class="bill-item">
		            					<div class="bill-unit">
		            						Room 2 :  <span>Luxury Room</span>
		            					</div>
		            					<span class="price">$23</span>
		            				</div>
		            				<div class="bill-item people">
		            					<div class="bill-unit">
		            						Adult : <span>4</span>
		            					</div>
		            					<div class="bill-unit">
		            						Children : <span>1</span>
		            					</div>
		            				</div>
		            				<div class="bill-item service">
		            					<div class="bill-unit">
		            						Rooms & Services :
		            					</div>
		            					<span class="price">$80</span>
		            				</div>
	                			</div>
	                			<div class="bill-cell">
	                				<div class="bill-item vat">
		            					<div class="bill-unit">
		            						Vat 8% :
		            					</div>
		            					<span class="price">$08</span>
		            				</div>
		            				<div class="bill-item total-price">
		            					<div class="bill-unit">
		            						Total Price :
		            					</div>
		            					<span class="price">$88</span>
		            				</div>
		            				<div class="checkbox-circle">
										<label>
											<input type="radio" name="payment" value="full payment" checked> Full Payment<br>
											<span class="checkmark"></span>
										</label>
										<label>
											<input type="radio" name="payment" value="10% Deposit"> 10% Deposit
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="bill-item total">
		            					<div class="bill-unit">
		            						<span>20% Deposit</span>
		            						Pay the rest on arrival
		            					</div>
		            					<span class="price">$78</span>
		            				</div>
	                			</div>
	            			</div>
	            			<button style="width: 195px; margin-top: 45px;">Confirmation
								<i class="zmdi zmdi-long-arrow-right"></i>
							</button>
                		</div>
	                </section>
            	</div>
			</div>
		</div>

		<script src="../../../js/jquery-3.3.1.min.js"></script>

		<!-- JQUERY STEP -->
		<script src="../../../js/jquery.steps.js"></script>

		<!-- DATE-PICKER -->
		<script src="../../../vendor/date-picker/js/datepicker.js"></script>
		<script src="../../../vendor/date-picker/js/datepicker.en.js"></script>

		<script src="../../../js/main.js"></script>
<!-- Template created and distributed by Colorlib -->
</body>
</html>
