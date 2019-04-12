<header>
	<div class="container">
		<nav class="navbar navbar-expand-lg  navbar-light">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse justify-content-center" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">About</a>
					</li>
					<li class="nav-item">
						<a class="navbar-link" href="#">
							<img src="../themes/img/note-logo-250x250.png"  alt="Jack Cooper Piano Logo">
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Pricing</a>
					</li>
					<li class="nav-item">
						<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Contact</a>
					</li>
				</ul>
			</div>
		</nav>
	</div>
	<?php if($this->uri->segment(1) === null): ?>
	<div class="container header-content-wrapper">
		<h1><span class="gold-underline">Jack Cooper</span></h1>
		<p>Piano teacher</p>
	</div>
	<?php endif; ?>
	<?php if($this->uri->segment(1) === 'about'): ?>
	<div class="container about-header-wrapper">
		<h1><span class="gold-underline">About</span></h1>
	</div>
	<?php endif; ?>
</header>