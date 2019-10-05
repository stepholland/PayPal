<div class="team-section">

		<div class="overlay"></div>

		<div class="container">

			<div class="section-title">

				<h2>Upcoming events</h2>

				<hr>



			</div>
			<link rel="stylesheet" href="css/flipclock.css">
			<div class="row">
				<h2 style="color:coral; text-align:center"><a href="/events" style="color: coral"> Annual CME Event & Banquet</a></h2><h3  style="color:coral; text-align:center">11.09.2019</h3><br>
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
				<script src="js/flipclock.js"></script>	
				<div class="clock" style=" width: 560px; height: 116px; margin: 0 auto;"></div>
				<script type="text/javascript">
					var clock;
					jQuery(function($) {
						// Grab the current date
						var currentDate = new Date();
						// Set some date in the future. In this case, it's always Jan 1  //Month starts from 0.
						var futureDate  = new Date(currentDate.getFullYear(), 10, 9, 18,0,0);
						// Calculate the difference in seconds between the future and current date
						var diff = futureDate.getTime() / 1000 - currentDate.getTime() / 1000;
						// Instantiate a coutdown FlipClock
						clock = $('.clock').FlipClock(diff, {
							clockFace: 'DailyCounter',
							countdown: true,
							showSeconds: false
						});
					});
				</script>
				<!-- <button class="btn btn-default center-block" style="margin-bottom:10px;">Book Ticket Now</button> -->
			</div>

			<!-- <div class="row">

					<div class="col-sm-4">

						<div class="member">

							<h2 style="color:coral">25/April</h2>

							<p class="font_8" style="text-align:center; color:ivory; font-weight:600; margin-bottom: -5px">Event: Title</p>

							<p class="font_8" style="text-align:center; color:aqua; font-weight:400;">Wednesday, February 25 at 15:00</p>

						</div>

					</div>



					<div class="col-sm-4">

						<div class="member">

							<h2 style="color:coral">25/April</h2>

							<p class="font_8" style="text-align:center; color:ivory; font-weight:600; margin-bottom: -5px">Event: Title</p>

							<p class="font_8" style="text-align:center; color:aqua; font-weight:400;">Wednesday, February 25 at 15:00</p>						</div>

							<div style="width: 1px;position: absolute;top: -30px; background-color:ivory; height: 100px; float: left;"></div>



						</div>

					<div class="col-sm-4">

						<div class="member">

								<div style="width: 1px;position: absolute;top: -30px; background-color:ivory; height: 100px; float: left;"></div>



							<h2 style="color:coral">25/May</h2>

							<p class="font_8" style="text-align:center; color:ivory; font-weight:600; margin-bottom: -5px">Event: Title</p>

							<p class="font_8" style="text-align:center; color:aqua; font-weight:400;">Wednesday, February 25 at 15:00</p>						</div>

						</div>

					</div>

			</div> -->

			

			<!-- <div class="row">

				<!-- single member 

				<div class="col-sm-4">

					<div class="member">

						<img src="img/team/1.jpg" alt="">

						<h2>Christinne Williams</h2>

						<h3>Project Manager</h3>

					</div>

				</div>

				<!-- single member 

				<div class="col-sm-4">

					<div class="member">

						<img src="img/team/2.jpg" alt="">

						<h2>Christinne Williams</h2>

						<h3>Junior developer</h3>

					</div>

				</div>

				<!-- single member 

				<div class="col-sm-4">

					<div class="member">

						<img src="img/team/3.jpg" alt="">

						<h2>Christinne Williams</h2>

						<h3>Digital designer</h3>

					</div>

				</div>

			</div> -->

		</div>

	</div>
	

	