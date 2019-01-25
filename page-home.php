<?php

/*
		Template Name: Home Page
*/ 

get_header();
?>

<!-- Banner -->
<section id="home-banner">
		<div class="container banner-content">
				<img class="banner-logo banner-logo-fade-in" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo-white.svg" alt="Best Stroke School of Swimming">
				<img class="banner-slogan baner-slogan-fade-in" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/slogan.svg" alt="Let our family teach your family">
		</div>
		
		<div class="home-banner-border">
				
		</div>
</section>

<section id="about">
	<div class="container">
			<div class="section-title">
					<h1>About Best Stroke</h1>
			</div>
			<p>Established in 2009, Best Stroke School of Swimming is a family-owned, private swim school based in West Yorkshire. Following her passion from a young age, founder Samara Bruce, qualified as a Lifeguard and Swimming Teacher at the age of 16. Her love for teaching sparked dreams of opening her own swimming school. From small beginnings, hiring a residential pool on her own, things grew fast enough for Samara to involve the whole family. Samara was joined by her mother Julie and father David who helped take Best Stroke to the next stage. Now, 3 venues and 8 family members later, we have run out! Hence we welcomed to the Best Stroke family 2 more experienced swimming teachers and 3 trainee assistants. Our aim is to foster a lifelong love of swimming which will bring with it numerous health benefits and not to mention lots of new friends. We provide quality swimming lessons delivered by experienced and motivated qualified teachers, generating a positive & fun experience in a safe & secure environment.</p>
			<div class="row">
					<div class="col-md-4 offset-md-2">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/young-photo.jpg" alt="Our Family">
							<small class="text-muted">From left to right: Cousins – Henry, Samara, Hayden, Georgina and Alistair</small>
					</div>
					<div class="col-md-3 offset-md-1">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/samaras-son.png" alt="Samara's Son">
							<small class="text-muted">Samara’s son, age 3. The next generation is already looking promising!</small>
					</div>
			</div>
	</div>
</section>

<section id="lessons">
	<div class="container">
		
		<div class="section-title">
			<h1>Lessons</h1>
			<h5>Read about swimming lessons at Best Stroke.</h5>
			<h6 class="text-muted"><i class="far fa-hand-pointer"></i> Click/tap on a lesson type to learn more.</h6>
		</div>
		
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<div class="card mt-3">
					<a class="lessons-card-link" data-toggle="collapse" href="#childrensLessons" role="button" aria-expanded="false" aria-controls="childrensLessons">
					  <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/childrens-lessons.jpg" class="card-img-top" alt="...">
					  <h5 class="mt-2">Children's Lessons</h5>
				  </a>
				  
				  <div class="collapse text-center" id="childrensLessons">
					  <div class="card-body">
					    <p class="card-text">It is well known that children pick up new skills and retain the most information when they’re having fun. All of our instructors strive to create an engaging and relaxed environment during lessons.</p>
					    <p class="card-text">Confidence & enjoyment are more important than speed of advancement. The correct basic skills acquired early will lead to a highly competent swimmer.</p>
					  </div>
				  </div>
				  
				</div>
			</div>
			
			<div class="col-lg-4 col-md-6">
				<div class="card mt-3">
					<a class="lessons-card-link" data-toggle="collapse" href="#rookieLessons" role="button" aria-expanded="false" aria-controls="rookieLessons">
					  <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/rookie-lessons.jpg" class="card-img-top" alt="...">
					  <h5 class="mt-2">Rookie Lifeguard Lessons</h5>
				  </a>
				  
				  <div class="collapse text-center" id="rookieLessons">
					  <div class="card-body">
					    <p class="card-text">Best Stroke School of Swimming is an approved centre for teaching the Royal Lifesaving Society’s Rookie Lifeguard Programme. It is a fun and educational junior lifeguard award scheme aimed at children aged 8-12.</p>
					    <p class="card-text">The programme teaches survival, rescue, life support and water safety skills while developing and maintaining their stroke technique – all delivered in an exciting way making it a great next step in their swimming progression.</p>
					    <p class="card-text">Our registered Rookie Lifeguard Instructors are fully qualified RLSS Pool Lifeguards and ASA Level Two Swimming Instructors.</p>
					  </div>
				  </div>
				  
				</div>
			</div>
			
			<div class="col-lg-4 offset-lg-0 col-md-6 offset-md-3">
				<div class="card mt-3">
					<a class="lessons-card-link" data-toggle="collapse" href="#ladiesLessons" role="button" aria-expanded="false" aria-controls="ladiesLessons">
					  <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/ladies-lessons.jpg" class="card-img-top" alt="...">
					  <h5 class="mt-2">Ladies Only Lessons</h5>
				  </a>
				  
				  <div class="collapse text-center" id="ladiesLessons">
					  <div class="card-body">
					    <p class="card-text">A positive, relaxed environment and an enjoyable social experience. These sessions are staffed by our team of experienced female instructors.</p>
					    <p class="card-text">We can accommodate all abilities, those wishing to learn the basics for the first time, swimmers wishing to acquire an additional stroke or develop existing strokes and competent swimmers seeking to improve technique or stamina.</p>
					    <p class="card-text">Swimming is not only a vital life-saving skill it is also excellent cardio-vascular exercise, a low-impact sport and a confidence builder.</p>
					  </div>
				  </div>
				  
				</div>
			</div>
			
		</div>
		
	</div>
</section>

<section id="awards">
		<div class="container">
			<div class="section-title">
				<h1>Awards</h1>
				<h5>A breakdown of the outcomes for each award swimmers can achieve at Best Stroke.</h5>
				<h6 class="text-muted"><i class="far fa-hand-pointer"></i> Click/tap on an award scheme to learn more.</h6>
				<div class="row">
					
					<div class="col-xl-3 col-lg-6 col-md-6 mt-3">
						<a class="award-scheme-link" href="/foundation-awards">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/awards/duckling-icon.jpg"></img>
							<h5 class="mt-2">Foundation Awards</h5>
							<h6 class="text-muted">Duckling Stages 1 - 4</h6>
						</a>
					</div>
					
					<div class="col-xl-3 col-lg-6 col-md-6 mt-3">
						<a class="award-scheme-link" href="/learn-to-swim-awards">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/awards/learn-to-swim-icon.jpg"></img>
							<h5 class="mt-2">Learn to Swim Awards</h5>
							<h6 class="text-muted">Complete Swimmer Stages 1 - 7</h6>
						</a>
					</div>
					
					<div class="col-xl-3 col-lg-6 col-md-6 mt-3">
						<a class="award-scheme-link" href="/aquatic-skills-awards">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/awards/aquatic-skills-icon.jpg"></img>
							<h5 class="mt-2">Aquatic Skills Awards</h5>
							<h6 class="text-muted">Elite Swimmer Stages 8 - 10</h6>
						</a>
					</div>
					
					<div class="col-xl-3 col-lg-6 col-md-6 mt-3">
						<a class="award-scheme-link" href="/rookie-lifeguard-awards">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/awards/rookie-icon.jpg"></img>
							<h5 class="mt-2">Rookie Lifeguard Awards</h5>
							<h6 class="text-muted">Rookie Lifeguard Stages Bronze 1 - Gold 3</h6>
						</a>
					</div>
					
				</div>
			</div>
		</div>
</section>

<section id="meet-the-family">
		
		<?php $loop = new WP_Query( array( 'post_type' => 'staff_members', 'orderby' => 'post_id', 'order' => 'ASC', 'posts_per_page' => -1 ) ); ?>
		
		<div class="container">
				
				<div class="section-title">
						<h1>Meet the Family</h1>
						<h5>Say hello to our extended Best Stroke Family!</h5>
				</div>
				
				<div class="row">
						
						<?php while( $loop->have_posts() ) : $loop->the_post(); ?>
						
						<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 mb-3">
								<div class="staff-member">
									<img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
									<div class="staff-name">
										<h5 class="mt-2"><?php the_title(); ?></h5>
									</div>
								</div>
						</div>
						
						<?php endwhile; ?>
						
				</div>
		</div>
		
</section>

<section id="sessions">
		<div class="container">
			<div class="section-title">
				<h1>Sessions</h1>
				<h5>View all of our venues and sessions.</h5>
			</div>
			
			<div class="container">

				<div class="row mt-4">
					<div class="col-lg-6 col-md-6">
						<div>
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/bradford-grammar.jpg"></img>
						</div>
						<div>
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2355.638322548698!2d-1.772705483948697!3d53.81371918007962!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487be403debda1e5%3A0x6bc9ff73ccb9b7e1!2sBradford+Grammar+School!5e0!3m2!1sen!2suk!4v1548341615044" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<h4>Bradford Grammar School</h4>
						<h6><strong>Tuesday:</strong></h6>
						<p>Children's Lessons 3:45pm – 6:45pm</p>
						<p>Ladies Only Lessons 7:00pm – 9:00pm</p>
						<h6><strong>Saturday:</strong></h6>
						<p>Children's Lessons 9:30am – 1:00pm</p>
					</div>
				</div>
				
				<div class="row mt-4">
					<div class="col-lg-6 col-md-6">
						<div>
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/woodhouse-grove.jpg"></img>
						</div>
						<div>
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2354.152977806474!2d-1.7025696839478197!3d53.84014298008548!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487be24be0b7dc85%3A0xfa21365139407b66!2sWoodhouse+Grove+School!5e0!3m2!1sen!2suk!4v1548342227956" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<h4>Woodhouse Grove School</h4>
						<h6><strong>Friday:</strong></h6>
						<p>Children's Lessons 5:15pm – 6.15pm</p>
					</div>
				</div>
				
				<div class="row mt-4">
					<div class="col-lg-6 col-md-6">
						<div>
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/manor-house.jpg"></img>
						</div>
						<div>
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2359.0305833998686!2d-1.6915004999999999!3d53.7533385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487be044956521e7%3A0x813dd0cd04e7b371!2sManor+House+Spa!5e0!3m2!1sen!2suk!4v1548344391083" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<h4>Manor House Spa, Birkenshaw</h4>
						<h6><strong>Monday:</strong></h6>
						<p>Parent & Baby Lessons 10:30am – 11:30am</p>
						<p>Children's Lessons 1:00pm – 2:30pm</p>
						<p>Children's Lessons 3:30pm – 6:30pm</p>
						<h6><strong>Wednesday:</strong></h6>
						<p>Children's Lessons 4:30pm – 7:00pm</p>
						<p>Adult's Lessons 7:00pm – 7:30pm</p>
					</div>
				</div>
				
				<div class="row mt-4">
					<div class="col-lg-6 col-md-6">
						<div>
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/gomersal-park.jpg"></img>
						</div>
						<div>
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2359.839606115838!2d-1.6839782839511814!3d53.73893138006319!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487be013359953cb%3A0x353927bb78b676ef!2sGomersal+Park+Hotel!5e0!3m2!1sen!2suk!4v1548344526465" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<h4>Gomersal Park Hotel & Dream Spa</h4>
						<h6><strong>Thursday:</strong></h6>
						<p>Children's Lessons 4:00pm – 6:30pm</p>
					</div>
				</div>
				
			</div>
			
		</div>
</section>

<?php get_footer('form'); ?>


