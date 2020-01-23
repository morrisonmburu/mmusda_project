
@extends('main')

@section('title', '| Homepage')

@section('content')

<main>

	<div class="position-relative">
		<!-- Hero for FREE version -->
		{{-- <section class="section section-lg section-hero section-shaped"> --}}
			<!-- carousel -->
			<div class="row front-slider ">
			  <div class="col-md-12 mx-auto">
			    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			      <ol class="carousel-indicators">
			        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			      </ol>
			      <div class="carousel-inner">
			        <div class="carousel-item active" style="background-image: url('/assets/img/d6.jpg');">
			          {{-- <img class="img-couresel" src="/assets/img/d6.jpg" alt="First slide"> --}}

			         <div class="carousel-caption">
			         	<div class="text-center">
			         		<h3 style="padding: 100px;" >Welcome To Seventh Day Adventist Church Multimedia University Of Kenya</h3>
			         	</div>
			         </div>
			        </div>
			        <div class="carousel-item" style="background-image: url('/assets/img/d2.jpg');">
			          {{-- <img class="img-couresel" src="/assets/img/d2.jpg" alt="Second slide"> --}}
			        </div>
			        <div class="carousel-item" style="background-image: url('/assets/img/d5.jpg');"> 
			          {{-- <img class="img-couresel" src="/assets/img/d5.jpg" alt="Third slide"> --}}
			        </div>
			      </div>
			      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			        <span class="sr-only">Previous</span>
			      </a>
			      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			        <span class="carousel-control-next-icon" aria-hidden="true"></span>
			        <span class="sr-only">Next</span>
			      </a>
			    </div>
			  </div>
			</div>
			<!-- SVG separator -->
			{{-- <div class="separator separator-bottom separator-skew zindex-100">
				<svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
					<polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
				</svg>
			</div> --}}
		{{-- </section> --}}
	</div>

</main>

@endsection