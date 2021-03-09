<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once './resources/view/parts/generals/head.php' ?>
</head>
<body>
<div class="fh5co-loader"></div>

<div id="fh5co-work" class="fh5co-bg-dark">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>where to go ?</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 text-center col-padding animate-box">
					<a href="#blog" class="work" style="background-image: url(././public/images/blog.png);">
						<div class="desc">
							<h3>Blog</h3>
							<span>go to my blog</span>
						</div>
					</a>
				</div> 
				<div class="col-md-3 text-center col-padding animate-box">
					<a href="#blog" class="work" style="background-image: url(././public/images/works.png);">
						<div class="desc">
							<h3>Works</h3>
							<span>go to see my new works</span>
						</div>
					</a>
				</div> 
				<div class="col-md-3 text-center col-padding animate-box">
					<a href="#blog" class="work" style="background-image: url(././public/images/youtube.png);">
						<div class="desc">
							<h3>YouTube</h3>
							<span>go to see my new videos</span>
						</div>
					</a>
				</div> 
				<div class="col-md-3 text-center col-padding animate-box">
					<a href="#blog" class="work" style="background-image: url(././public/images/contact_me.png);">
						<div class="desc">
							<h3>Contact Me</h3>
							<span>how to contact Masoud</span>
						</div>
					</a>
				</div> 
			</div>
		</div>
	</div>

<?php include_once './resources/view/parts/generals/footer.php';?>

<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up22"></i></a>
	</div>
	<?php require_once './resources/view/parts/generals/scripts.php'; ?>
</body>
</html>