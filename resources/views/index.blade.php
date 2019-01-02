@extends('layout.master')

@section('content')
	<!-- Start main content -->
	<main role="main">

		<div class="" style="position: fixed; top:150px; right: 150px; z-index: 999 ">

			@if ($message = Session::get('success'))
				<div class="alert alert-success alert-dismissible  show" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<strong>{{ $message }}</strong>
				</div>
			@endif


			@if ($message = Session::get('fail'))
				<div class="alert alert-danger alert-dismissible  show" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<strong>{{ $message }}</strong>
				</div>
			@endif


			@foreach($errors->all() as $error)
				<div class="alert alert-danger alert-dismissible  show" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<strong>{{ $error }}</strong>
				</div>
			@endforeach
		</div>

		<!-- Start About -->
		<section id="mu-about">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-about-area">
							<!-- Start Feature Content -->
							<div class="row">
								<div class="col-md-6">
									<div class="mu-about-left">
										<img class="" src="assets/images/about.jpg" alt="Men Speaker">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mu-about-right">
										<h2>International Day of Happiness</h2>
										<p>Founded June 28, 2012 The International Day of Happiness Resolution 66/281 was the result of the effort of United Nations adviser Jayme Illien, who conceptualized the idea for a U.N. Resolution that would recognize the pursuit of happiness as a human right and a "fundamental human goal." </p>

										<p>Jayme Illien, founder of the International Day of Happiness, and Illien Global Public Benefit Corporation, gained the support for the idea of the new International Day of Happiness from the President of the UN General Assembly and United Nations Secretary General Ban Ki-moon, as well as all 193 UN member states to draft and adopt a new UN resolution to create the new international day, the International Day of Happiness. Jayme Illien authored UN resolution 66/281 and campaigned for its adoption by consensus of all 193 member states.</p>

										<p>The first ever international day of happiness was celebrated on March 20, 2013.</p>
									</div>
								</div>
							</div>
							<!-- End Feature Content -->

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End About -->

		<!-- Start Video -->
		<section id="mu-video">
			<div class="mu-video-overlay">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="mu-video-area">
								<h2>Watch Previous International Event Video</h2>
								<a class="mu-video-play-btn" href="#"><i class="fa fa-play" aria-hidden="true"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Start Video content -->
			<div class="mu-video-content">
				<div class="mu-video-iframe-area">
					<a class="mu-video-close-btn" href="#"><i class="fa fa-times" aria-hidden="true"></i></a>
					<iframe width="854" height="480" src="https://www.youtube.com/embed/ZbZSe6N_BXs" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
			<!-- End Video content -->

		</section>
		<!-- End Video -->

		<!-- Start Schedule  -->
		<section id="mu-schedule">
			<div class="container">
				<div class="row">
					<div class="colo-md-12">
						<div class="mu-schedule-area">

							<div class="mu-title-area">
								<h2 class="mu-title">Our Inspiration</h2>
								<p>Few People who really inspired us by their positive support.</p>
							</div>

							<div class="mu-schedule-content-area">
								<!-- Nav tabs --
								<ul class="nav nav-tabs mu-schedule-menu" role="tablist">
								    <li role="presentation" class="active"><a href="#first-day" aria-controls="first-day" role="tab" data-toggle="tab">1 Day / 19 Feb</a></li>
								    <li role="presentation"><a href="#second-day" aria-controls="second-day" role="tab" data-toggle="tab">2 Day / 20 Feb</a></li>
								    <li role="presentation"><a href="#third-day" aria-controls="third-day" role="tab" data-toggle="tab">3 Day / 21 Feb</a></li>
								    
								</ul>

								-- Tab panes -->
								<div class="tab-content mu-schedule-content">
								    <div role="tabpanel" class="tab-pane fade mu-event-timeline in active" id="first-day">
								    	<ul>
								    		<li>
								    			<div class="mu-single-event">
													<img src="assets/images/speaker-2.jpg" alt="event speaker">
								    				<p class="mu-event-time">9.00 AM</p>
								    				<h3>Mosarraf Karim</h3>
													<span>Actor</span>
								    			</div>
								    		</li>
								    		<li>
								    			<div class="mu-single-event">
								    				<img src="assets/images/speaker-2.jpg" alt="event speaker">
								    				<p class="mu-event-time">10.00 AM</p>
								    				<h3>Mashrafi Bin Martuza</h3>
								    				<span>Crickter & Politician</span>
								    			</div>
								    		</li>
								    		<li>
								    			<div class="mu-single-event">
								    				<img src="assets/images/speaker-2.jpg" alt="event speaker">
								    				<p class="mu-event-time">11.00 AM</p>
								    				<h3>Presenting Work with Confidence</h3>
								    				<span>By Sarah Dransner</span>
								    			</div>
								    		</li>
								    		<li>
								    			<div class="mu-single-event">
								    				<img src="assets/images/speaker-3.jpg" alt="event speaker">
								    				<p class="mu-event-time">12.00 AM</p>
								    				<h3>Keynote on UX & UI Design</h3>
								    				<span>By Ned Stark</span>
								    			</div>
								    		</li>
								    	</ul>
								    </div>								    
								</div>

							</div>
							
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Schedule -->

		<!-- Start Speakers -->
		<section id="mu-speakers">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-speakers-area">

							<div class="mu-title-area">
								<h2 class="mu-title">Our Partners</h2>
								<p>Happy Bangladesh is partnered with below entities</p>
							</div>

							<!-- Start Speakers Content -->
							<div class="mu-speakers-content">

								<div class="mu-speakers-slider">

									<!-- Start single speaker -->
									<div class="mu-single-speakers">
										<img src="assets/images/speaker-2.jpg" alt="speaker img">
										<div class="mu-single-speakers-info">
											<h3>United Nations</h3>
											<ul class="mu-single-speakers-social">
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
											</ul>
										</div>
									</div>
									<!-- End single speaker -->
									
									<!-- Start single speaker -->
									<div class="mu-single-speakers">
										<img src="assets/images/international-day-of-happiness.png" alt="International Day of Happiness Official Logo">
										<div class="mu-single-speakers-info">
											<h3>Happiness Day</h3>
											<ul class="mu-single-speakers-social">
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
											</ul>
										</div>
									</div>
									<!-- End single speaker -->

									<!-- Start single speaker -->
									<div class="mu-single-speakers">
										<img src="assets/images/speaker-3.jpg" alt="speaker img">
										<div class="mu-single-speakers-info">
											<h3>Action For Happiness</h3>
											<ul class="mu-single-speakers-social">
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
											</ul>
										</div>
									</div>
									<!-- End single speaker -->


									<!-- Start single speaker --
									<div class="mu-single-speakers">
										<img src="assets/images/speaker-4.jpg" alt="speaker img">
										<div class="mu-single-speakers-info">
											<h3>Michaela Lehr </h3>
											<p>Digital Marketer</p>
											<ul class="mu-single-speakers-social">
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
											</ul>
										</div>
									</div>
									-- End single speaker -->

									<!-- Start single speaker -->
									<div class="mu-single-speakers">
										<img src="assets/images/speaker-1.jpg" alt="speaker img">
										<div class="mu-single-speakers-info">
											<h3>Karl Groves</h3>
											<p>Digital Artist</p>
											<ul class="mu-single-speakers-social">
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
											</ul>
										</div>
									</div>
									<!-- End single speaker -->

									<!-- Start single speaker -->
									<div class="mu-single-speakers">
										<img src="assets/images/speaker-2.jpg" alt="speaker img">
										<div class="mu-single-speakers-info">
											<h3>Sarah Dransner</h3>
											<p>Business Consultant</p>
											<ul class="mu-single-speakers-social">
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
											</ul>
										</div>
									</div>
									<!-- End single speaker -->


									<!-- Start single speaker -->
									<div class="mu-single-speakers">
										<img src="assets/images/speaker-3.jpg" alt="speaker img">
										<div class="mu-single-speakers-info">
											<h3>Ned Stark</h3>
											<p>UI/UX Specialist</p>
											<ul class="mu-single-speakers-social">
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
											</ul>
										</div>
									</div>
									<!-- End single speaker -->


									<!-- Start single speaker -->
									<div class="mu-single-speakers">
										<img src="assets/images/speaker-4.jpg" alt="speaker img">
										<div class="mu-single-speakers-info">
											<h3>Michaela Lehr </h3>
											<p>Digital Marketer</p>
											<ul class="mu-single-speakers-social">
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
											</ul>
										</div>
									</div>
									<!-- End single speaker -->
								</div>
							</div>
							<!-- End Speakers Content -->

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Speakers -->

		<!-- Start Venue 
		<section id="mu-venue">
			<div class="mu-venue-area">
				<div class="row">

					<div class="col-md-6">
						<div class="mu-venue-map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7300.765133183532!2d90.40102671812211!3d23.80499143782676!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xffb08173547d6d77!2sBangladesh+Army+Stadium!5e0!3m2!1sen!2sbd!4v1544675941171" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
					</div>

					<div class="col-md-6">
						<div class="mu-venue-address">
							<h2>VENUE <i class="fa fa-chevron-right" aria-hidden="true"></i></h2>
							<h3>Bangladesh Army Stadium</h3>
							<h4>Dhaka - Mymensingh Hwy, Dhaka 1212</h4>
							<p>Bangladesh Army Stadium is a multi-use stadium in Dhaka, Bangladesh. It is currently used mostly for football matches and hosts the home matches of Bangladesh Army. The stadium holds 15,000 people.</p>
						</div>
					</div>

				</div>
			</div>
		</section>
		End Venue -->

		
		<!-- Start Sponsors -->
		<section id="mu-sponsors">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-sponsors-area">
							
							<div class="mu-title-area">
								<h2 class="mu-title">Our Sponsors</h2>
								<p>We proudly showcasing our sponsor who have an extra ordinary contribution to us as well as to society for bringing happiness.</p>
							</div>
							
							<!-- Start spnonsors brand logo -->
							<div class="mu-sponsors-content">
								<div class="row">
								
									<div class="col-md-2 col-sm-4 col-xs-4">
										<div class="mu-sponsors-single">
											<img src="assets/images/sponsor-logo-1.png" alt="Brand Logo">
										</div>
									</div>

									<div class="col-md-2 col-sm-4 col-xs-4">
										<div class="mu-sponsors-single">
											<img src="assets/images/sponsor-logo-2.png" alt="Brand Logo">
										</div>
									</div>

									<div class="col-md-2 col-sm-4 col-xs-4">
										<div class="mu-sponsors-single">
											<img src="assets/images/sponsor-logo-3.png" alt="Brand Logo">
										</div>
									</div>

									<div class="col-md-2 col-sm-4 col-xs-4">
										<div class="mu-sponsors-single">
											<img src="assets/images/sponsor-logo-4.png" alt="Brand Logo">
										</div>
									</div>

										<div class="col-md-2 col-sm-4 col-xs-4">
										<div class="mu-sponsors-single">
											<img src="assets/images/sponsor-logo-5.png" alt="Brand Logo">
										</div>
									</div>

									<div class="col-md-2 col-sm-4 col-xs-4">
										<div class="mu-sponsors-single">
											<img src="assets/images/sponsor-logo-6.png" alt="Brand Logo">
										</div>
									</div>

									<div class="col-md-2 col-sm-4 col-xs-4">
										<div class="mu-sponsors-single">
											<img src="assets/images/sponsor-logo-7.png" alt="Brand Logo">
										</div>
									</div>

									<div class="col-md-2 col-sm-4 col-xs-4">
										<div class="mu-sponsors-single">
											<img src="assets/images/sponsor-logo-8.png" alt="Brand Logo">
										</div>
									</div>

									<div class="col-md-2 col-sm-4 col-xs-4">
										<div class="mu-sponsors-single">
											<img src="assets/images/sponsor-logo-9.png" alt="Brand Logo">
										</div>
									</div>

										<div class="col-md-2 col-sm-4 col-xs-4">
										<div class="mu-sponsors-single">
											<img src="assets/images/sponsor-logo-1.png" alt="Brand Logo">
										</div>
									</div>

									<div class="col-md-2 col-sm-4 col-xs-4">
										<div class="mu-sponsors-single">
											<img src="assets/images/sponsor-logo-2.png" alt="Brand Logo">
										</div>
									</div>

									<div class="col-md-2 col-sm-4 col-xs-4">
										<div class="mu-sponsors-single">
											<img src="assets/images/sponsor-logo-3.png" alt="Brand Logo">
										</div>
									</div>

								</div>
							</div>
							<!-- End spnonsors brand logo -->
							
							
							<!-- Start Register  -->
		<section id="mu-register">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-register-area">

							<div class="mu-title-area">
								<h2 class="mu-title">Register Form</h2>


								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis unde, ut sapiente et voluptatum facilis consectetur incidunt provident asperiores at necessitatibus nulla sequi voluptas libero quasi explicabo veritatis minima porro.</p>
							</div>
							<div class="mu-register-content">

									{!! Form::open(['class'=>'mu-register-form', 'method' => 'POST' , 'action' => ['HomeController@store']]) !!}

									<div class="row">
										<div class="col-md-6">
											<div class="form-group">                

												{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Your Full Name ', 'required']) !!}
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Enter Your Email', 'required']) !!}
											</div>     
										</div>
									</div>

									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												{!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'Your Phone Number', 'required']) !!}
											</div>
										</div>
										<div class="col-md-6">
											
										<div class="form-group">
											{!! Form::select('why_to_join',array(
											'Promote Happiness' => 'Promote Happiness',
											'Attempt Guinness World Record' => 'Attempt Guinness World Record',
											'Volunteering' => 'Volunteering'
											), null, ['class' => 'form-control', 'placeholder' => 'Why to Join', 'required']) !!}
										</div>      
										</div>
									</div>

							{!! Form::submit('submit',['class' => 'mu-reg-submit-btn']) !!}

							{!! Form::close() !!}

							</div>

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Register -->


						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Sponsors -->


		<!-- Start Contact -->
		<section id="mu-contact">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-contact-area">

							<div class="mu-title-area">
								<h2 class="mu-heading-title">Contact Us</h2>
								<p>Please do no hesitate to contact us for your valuable query. We love to hear from you.</p>
							</div>

							<!-- Start Contact Content -->
							<div class="mu-contact-content">
								<div class="row">

								<div class="col-md-12">
									<div class="mu-contact-form-area">

											<form id="" method="post" action="{{ url('/') }}" class="mu-contact-form">
												{{ csrf_field() }}
												<div class="form-group">                
													<input type="text" class="form-control" placeholder="Name"  name="name" required>
												</div>
												<div class="form-group">                
													<input type="email" class="form-control" placeholder="Enter Email"  name="email" required>
												</div>              
												<div class="form-group">
													<textarea class="form-control" placeholder="Message"  name="message" required></textarea>
												</div>
												<button type="submit" class="mu-send-msg-btn"><span>SUBMIT</span></button>
								            </form>
										</div>
									</div>
								</div>
							</div>
							<!-- End Contact Content -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Contact -->

	</main>
	
	<!-- End main content -->

@endsection
			
			
