@extends('front.base.app')

@section('content')
	<!-- HEADER -->
	<header id="header">
		<div class="top">
			<div class="container p-0">
				<nav class="navbar navbar-expand-lg navbar-light">
					<a class="navbar-brand text-white font-nun font-size-2" href="#">App</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarNav">
						<ul class="navbar-nav ml-auto text-center">
							<li class="nav-item active">
								<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Blog</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Security</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Contact Us</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#"><i class="fab fa-twitter"></i></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#"><i class="fab fa-telegram-plane"></i></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#"><i class="fab fa-facebook-f"></i></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#"><i class="fab fa-youtube"></i></a>
							</li>
							<li class="nav-item">
								<button class="btn btn-info">Download App</button>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</header>
	<!-- /HEADER -->

	<!-- MAIN SITE -->
	<main id="site-main">
		<section id="banner">
			<div class="row m-0">
				<div class="col-lg-7">
					<div class="space">
						<div class="text-lg-left text-center">
							<h6 class="h6">Solving Daily Problem</h6>
							<h1 class="h1 font-nun font-size-3">
								Get the latest <br />
								Technology App.
							</h1>
							<p class="width-lg-50">Best tools you need to better understand your customers. Download the App to speed up your company.</p>
							<div class="buttons">
								<a href="#" class="btn text-white border rounded-pill my-2">
									<span> <i class="fab fa-apple"></i> App Store </span>
								</a>
								<a href="#" class="btn text-white border my-2 rounded-pill bg-info">
									<span> <i class="fab fa-android"></i> Play Store </span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6">
						<a href="#">
							<img src="https://c.tenor.com/E4pTQLd4oWcAAAAd/cje-website.gif" alt="" class="img-fluid rounded" width="100%">
						</a>
					</div>
				</div>
			</div>
		</section>

		<section id="tech">
			<div class="container">
				<div class="title d-flex justify-content-between">
					<h3 class="font-nun text-dark left-border">Technology</h3>
					<h6>
						<a href="#" class="nav-link text-secondary">Technology Categories <i class="fas fa-arrow-right"></i></a>
					</h6>
				</div>

				<div class="owl-carousel owl-theme py-4">
					<div class="item">
						<div class="img-hover">
							<a href="#">
								<img src="{{ asset('front/assets/Blog1.jpg')}}" class="img-fluid py-3" alt="blog1" />
							</a>
						</div>

						<div class="item-title">
							<a href="#"><h5 class="py-2 font-nun">Our Customers Success Tell about Their Company’s Story</h5></a>
							<p class="font-size-1 text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, exercitationem!</p>
							<span class="d-flex">
								<img src="front/assets/face1.jpg" class="rounded-pill" alt="" />
								<a href="#" class="text-dark">Daily Tuition</a>
								<span class="text-info"><i class="fas fa-tree"></i></span>
								<span class="text-secondary">1 Minit ago</span>
							</span>
						</div>
					</div>
					<div class="item">
						<div class="img-hover">
							<a href="#">
								<img src="front/assets/Blog2.jpg" class="img-fluid py-3" alt="blog1" />
							</a>
						</div>
						<div class="item-title">
							<a href="#"><h5 class="py-2 font-nun">Introduce New Feature: Real-Time Analytics and Reports</h5></a>
							<p class="font-size-1 text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, exercitationem!</p>
							<span class="d-flex">
								<img src="front/assets/face1.jpg" class="rounded-pill" alt="" />
								<a href="#" class="text-dark">Daily Tuition</a>
								<span class="text-info"><i class="fas fa-tree"></i></span>
								<span class="text-secondary">1 Minit ago</span>
							</span>
						</div>
					</div>
					<div class="item">
						<div class="img-hover">
							<a href="#">
								<img src="front/assets/Blog3.jpg" class="img-fluid py-3" alt="blog1" />
							</a>
						</div>
						<div class="item-title">
							<a href="#"><h5 class="py-2 font-nun">Data Privacy and Security Features You Should Know</h5></a>
							<p class="font-size-1 text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, exercitationem!</p>
							<span class="d-flex">
								<img src="front/assets/face1.jpg" class="rounded-pill" alt="" />
								<a href="#" class="text-dark">Daily Tuition</a>
								<span class="text-info"><i class="fas fa-tree"></i></span>
								<span class="text-secondary">1 Minit ago</span>
							</span>
						</div>
					</div>
					<div class="item">
						<div class="img-hover">
							<a href="#">
								<img src="front/assets/Blog4.jpg" class="img-fluid py-3" alt="blog1" />
							</a>
						</div>
						<div class="item-title">
							<a href="#"><h5 class="py-2 font-nun">Our Customers Success Tell about Their Company’s Story</h5></a>
							<p class="font-size-1 text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, exercitationem!</p>
							<span class="d-flex">
								<img src="front/assets/face1.jpg" class="rounded-pill" alt="" />
								<a href="#" class="text-dark">Daily Tuition</a>
								<span class="text-info"><i class="fas fa-tree"></i></span>
								<span class="text-secondary">1 Minit ago</span>
							</span>
						</div>
					</div>
					<div class="item">
						<div class="img-hover">
							<a href="#">
								<img src="front/assets/Blog5.jpg" class="img-fluid py-3" alt="blog1" />
							</a>
						</div>
						<div class="item-title">
							<a href="#"><h5 class="py-2 font-nun">Our Customers Success Tell about Their Company’s Story</h5></a>
							<p class="font-size-1 text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, exercitationem!</p>
							<span class="d-flex">
								<img src="front/assets/face1.jpg" class="rounded-pill" alt="" />
								<a href="#" class="text-dark">Daily Tuition</a>
								<span class="text-info"><i class="fas fa-tree"></i></span>
								<span class="text-secondary">1 Minit ago</span>
							</span>
						</div>
					</div>
					<div class="item">
						<div class="img-hover">
							<a href="#">
								<img src="front/assets/Blog6.jpg" class="img-fluid py-3" alt="blog1" />
							</a>
						</div>
						<div class="item-title">
							<a href="#">
								<h5 class="py-2 font-nun">Our Customers Success Tell about Their Company’s Story</h5>
							</a>
							<p class="font-size-1 text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, exercitationem!</p>
							<span class="d-flex">
								<img src="front/assets/face1.jpg" class="rounded-pill" alt="" />
								<a href="#" class="text-dark">Daily Tuition</a>
								<span class="text-info"><i class="fas fa-tree"></i></span>
								<span class="text-secondary">1 Minit ago</span>
							</span>
						</div>
					</div>
					<div class="item">
						<div class="img-hover">
							<a href="#">
								<img src="front/assets/Blog4.jpg" class="img-fluid py-3" alt="blog1" />
							</a>
						</div>
						<div class="item-title">
							<a href="#"><h5 class="py-2 font-nun">Our Customers Success Tell about Their Company’s Story</h5></a>
							<p class="font-size-1 text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, exercitationem!</p>
							<span class="d-flex">
								<img src="front/assets/face1.jpg" class="rounded-pill" alt="" />
								<a href="#" class="text-dark">Daily Tuition</a>
								<span class="text-info"><i class="fas fa-tree"></i></span>
								<span class="text-secondary">1 Minit ago</span>
							</span>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="security">
			<div class="container">
				<div class="title d-flex justify-content-md-between">
					<h3 class="font-nun text-white left-border">Security</h3>
					<h6>
						<a href="#" class="nav-link text-light">Security Categories <i class="fas fa-arrow-right"></i></a>
					</h6>
				</div>

				<div class="owl-carousel owl-theme py-4">
					<div class="item">
						<div class="img-hover">
							<a href="#">
								<img src="front/assets/Blog4.jpg" class="img-fluid py-3" alt="blog1" />
							</a>
						</div>

						<div class="item-title">
							<a href="#"><h5 class="py-2 font-nun">Our Customers Success Tell about Their Company’s Story</h5></a>
							<p class="font-size-1 text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, exercitationem!</p>
							<span class="d-flex">
								<img src="front/assets/face1.jpg" class="rounded-pill" alt="" />
								<a href="#" class="text-dark">Daily Tuition</a>
								<span class="text-info"><i class="fas fa-tree"></i></span>
								<span class="text-secondary">1 Minit ago</span>
							</span>
						</div>
					</div>
					<div class="item">
						<div class="img-hover">
							<a href="#">
								<img src="front/assets/Blog6.jpg" class="img-fluid py-3" alt="blog1" />
							</a>
						</div>
						<div class="item-title">
							<a href="#"><h5 class="py-2 font-nun">Introduce New Feature: Real-Time Analytics and Reports</h5></a>
							<p class="font-size-1 text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, exercitationem!</p>
							<span class="d-flex">
								<img src="front/assets/face1.jpg" class="rounded-pill" alt="" />
								<a href="#" class="text-dark">Daily Tuition</a>
								<span class="text-info"><i class="fas fa-tree"></i></span>
								<span class="text-secondary">1 Minit ago</span>
							</span>
						</div>
					</div>
					<div class="item">
						<div class="img-hover">
							<a href="#">
								<img src="front/assets/Blog3.jpg" class="img-fluid py-3" alt="blog1" />
							</a>
						</div>
						<div class="item-title">
							<a href="#"><h5 class="py-2 font-nun">Data Privacy and Security Features You Should Know</h5></a>
							<p class="font-size-1 text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, exercitationem!</p>
							<span class="d-flex">
								<img src="front/assets/face1.jpg" class="rounded-pill" alt="" />
								<a href="#" class="text-dark">Daily Tuition</a>
								<span class="text-info"><i class="fas fa-tree"></i></span>
								<span class="text-secondary">1 Minit ago</span>
							</span>
						</div>
					</div>
					<div class="item">
						<div class="img-hover">
							<a href="#">
								<img src="front/assets/Blog4.jpg" class="img-fluid py-3" alt="blog1" />
							</a>
						</div>
						<div class="item-title">
							<a href="#"><h5 class="py-2 font-nun">Our Customers Success Tell about Their Company’s Story</h5></a>
							<p class="font-size-1 text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, exercitationem!</p>
							<span class="d-flex">
								<img src="front/assets/face1.jpg" class="rounded-pill" alt="" />
								<a href="#" class="text-dark">Daily Tuition</a>
								<span class="text-info"><i class="fas fa-tree"></i></span>
								<span class="text-secondary">1 Minit ago</span>
							</span>
						</div>
					</div>
					<div class="item">
						<div class="img-hover">
							<a href="#">
								<img src="front/assets/Blog5.jpg" class="img-fluid py-3" alt="blog1" />
							</a>
						</div>
						<div class="item-title">
							<a href="#"><h5 class="py-2 font-nun">Our Customers Success Tell about Their Company’s Story</h5></a>
							<p class="font-size-1 text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, exercitationem!</p>
							<span class="d-flex">
								<img src="front/assets/face1.jpg" class="rounded-pill" alt="" />
								<a href="#" class="text-dark">Daily Tuition</a>
								<span class="text-info"><i class="fas fa-tree"></i></span>
								<span class="text-secondary">1 Minit ago</span>
							</span>
						</div>
					</div>
					<div class="item">
						<div class="img-hover">
							<a href="#">
								<img src="front/assets/Blog6.jpg" class="img-fluid py-3" alt="blog1" />
							</a>
						</div>
						<div class="item-title">
							<a href="#">
								<h5 class="py-2 font-nun">Our Customers Success Tell about Their Company’s Story</h5>
							</a>
							<p class="font-size-1 text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, exercitationem!</p>
							<span class="d-flex">
								<img src="front/assets/face1.jpg" class="rounded-pill" alt="" />
								<a href="#" class="text-dark">Daily Tuition</a>
								<span class="text-info"><i class="fas fa-tree"></i></span>
								<span class="text-secondary">1 Minit ago</span>
							</span>
						</div>
					</div>
					<div class="item">
						<div class="img-hover">
							<a href="#">
								<img src="front/assets/Blog4.jpg" class="img-fluid py-3" alt="blog1" />
							</a>
						</div>
						<div class="item-title">
							<a href="#"><h5 class="py-2 font-nun">Our Customers Success Tell about Their Company’s Story</h5></a>
							<p class="font-size-1 text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, exercitationem!</p>
							<span class="d-flex">
								<img src="front/assets/face1.jpg" class="rounded-pill" alt="" />
								<a href="#" class="text-dark">Daily Tuition</a>
								<span class="text-info"><i class="fas fa-tree"></i></span>
								<span class="text-secondary">1 Minit ago</span>
							</span>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="favourite">
			<div class="container">
				<div class="title d-flex">
					<h3 class="font-nun text-dark left-border">Editors Favourite</h3>
					<h6><a href="#" class="nav-link text-secondary font-size-1"> All / Security / Technology </a></h6>
				</div>

				<div class="owl-carousel owl-theme py-4">
					<div class="item">
						<div class="img-hover">
							<img src="front/assets/Blog1.jpg" class="img-fluid py-1" alt="blog1" />
						</div>
						<div class="item-title">
							<a href="#"><h5 class="py-1 font-nun font-size-1">Our Customers Success Tell about Their Company’s Story</h5></a>
						</div>
					</div>
					<div class="item">
						<div class="img-hover">
							<img src="front/assets/Blog2.jpg" class="img-fluid py-1" alt="blog1" />
						</div>
						<div class="item-title">
							<a href="#"><h5 class="py-1 font-nun font-size-1">Introduce New Feature: Real-Time Analytics and Reports</h5></a>
						</div>
					</div>
					<div class="item">
						<div class="img-hover">
							<img src="front/assets/Blog3.jpg" class="img-fluid py-1" alt="blog1" />
						</div>
						<div class="item-title">
							<a href="#"><h5 class="py-1 font-nun font-size-1">Data Privacy and Security Features You Should Know</h5></a>
						</div>
					</div>
					<div class="item">
						<div class="img-hover">
							<img src="front/assets/Blog4.jpg" class="img-fluid py-1" alt="blog1" />
						</div>
						<div class="item-title">
							<a href="#"><h5 class="py-1 font-nun font-size-1">Our Customers Success Tell about Their Company’s Story</h5></a>
						</div>
					</div>
					<div class="item">
						<div class="img-hover">
							<img src="front/assets/Blog5.jpg" class="img-fluid py-1" alt="blog1" />
						</div>
						<div class="item-title">
							<a href="#"><h5 class="py-1 font-nun font-size-1">Our Customers Success Tell about Their Company’s Story</h5></a>
						</div>
					</div>
					<div class="item">
						<div class="img-hover">
							<img src="front/assets/Blog6.jpg" class="img-fluid py-1" alt="blog1" />
						</div>
						<div class="item-title">
							<a href="#">
								<h5 class="py-1 font-size-1 font-nun">Our Customers Success Tell about Their Company’s Story</h5>
							</a>
						</div>
					</div>
					<div class="item">
						<div class="img-hover">
							<img src="front/assets/Blog4.jpg" class="img-fluid py-1" alt="blog1" />
						</div>
						<div class="item-title">
							<a href="#">
								<h5 class="py-1 font-size-1 font-nun">Our Customers Success Tell about Their Company’s Story</h5>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
	<!-- /MAIN SITE -->
@endsection

