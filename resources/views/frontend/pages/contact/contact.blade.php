@extends('frontend.layouts.main')

@section('contact-active', 'active')

@section('content')

	<!-- full Title -->
	<div class="full-title">
		<div class="container">
			<!-- Page Heading/Breadcrumbs -->
			<h1 class="mt-4 mb-3"> Contact </h1>
			<div class="breadcrumb-main">
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="index.html">Home</a>
					</li>
					<li class="breadcrumb-item active">Contact</li>
				</ol>
			</div>
		</div>
	</div>

    <div class="contact-main">
		<div class="container">
			<!-- Content Row -->
		  <div class="row">
			<!-- Map Column -->
				<div class="col-lg-8 mb-4 contact-left">
					<h3>Send us a Message</h3>
					@if ($message = Session::get('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
						<strong>{{$message}}</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						</div>
                    @endif
					<form method="post" action="{{route('contact-store')}}" name="sentMessage" id="contactForm" >
						@csrf
						<div class="control-group form-group">
							<div class="controls">
								<input type="text" name="fullname" placeholder="Full Name" class="form-control" id="name" required data-validation-required-message="Please enter your name." required>
								<p class="help-block"></p>
							</div>
						</div>
						<div class="control-group form-group">
							<div class="controls">
								<input type="number" name="phone" placeholder="Phone Number" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number." required>
							</div>
						</div>
						<div class="control-group form-group">
							<div class="controls">
								<input type="email" name="email" placeholder="Email Address" class="form-control" id="email" required data-validation-required-message="Please enter your email address." required>
							</div>
						</div>
						<div class="control-group form-group">
							<div class="controls">
								<textarea rows="5" name="message" cols="100" placeholder="Message" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
							</div>
						</div>
						<div id="success"></div>
						<!-- For success/fail messages -->
						<button type="submit" class="btn btn-primary" id="sendMessageButton">Send Message</button>
					</form>
				</div>
				<!-- Contact Details Column -->
				<div class="col-lg-4 mb-4 contact-right">
					<h3>Contact Details</h3>
					<p>
							Jl. Raya Narogong Km 12.5, 
						<br>Cileungsi, Bogor, Jawa Barat
						<br>
					</p>
					<p>
						<abbr title="Phone">Telphone</abbr>: +62 21 80471028
					</p>
					<p>
						<abbr title="Phone">Phone</abbr>: +6281398457130, +6281317560341, +6285694522999
					</p>
					<p>
						<abbr title="Email">E-Mail</abbr>:
						<a href="mailto:name@example.com"> naomibersamaselaras@gmail.com</a>
					</p>
					<!--<p>
						<abbr title="Hours">Website</abbr>: corsec@konstruksimas.co.id
					</p>-->
				</div>
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container -->
	</div>
	
	<div class="map-main">
		<!-- Embedded Google Map -->
		<div style="max-width:100%;overflow:hidden;color:red;width:1440px;height:340px;"><div id="g-mapdisplay" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Jl.+Raya+Narogong,+Cileungsi,+Bogor,+Jawa+Barat,+Indonesia&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe></div><a class="google-map-html" href="https://www.bootstrapskins.com/themes" id="authmaps-data">premium bootstrap themes</a><style>#g-mapdisplay img{max-height:none;max-width:none!important;background:none!important;}</style></div>
	</div>

@endsection