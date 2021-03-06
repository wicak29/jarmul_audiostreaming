<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title>TCTREAMING | Audio Streaming App</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Fullscreen Slit Slider with CSS3 and jQuery" />
        <meta name="keywords" content="slit slider, plugin, css3, transitions, jquery, fullscreen, autoplay" />
        <meta name="author" content="Codrops" />

		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/slitslider/'); ?>/css/demo.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/slitslider/'); ?>/css/style.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/slitslider/'); ?>/css/custom.css" />
		<script type="text/javascript" src="<?php echo base_url('assets/slitslider/'); ?>/js/modernizr.custom.79639.js"></script>
		<noscript>
			<link rel="stylesheet" type="text/css" href="css/styleNoJS.css" />
		</noscript>
    </head>
    <body>
        <div class="container demo-1">
            <!-- <nav class="codrops-demos">
				<a class="current-demo" href="index.html">Demo 1</a>
				<a href="index2.html">Demo 2</a>
			</nav> -->

            <div id="slider" class="sl-slider-wrapper">

				<div class="sl-slider">
				
					<div class="sl-slide bg-1" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
						<div class="sl-slide-inner" style="background-color: #29B669;">
							<div style="width: 600px; margin: 100px auto auto auto; ">
								<h1 style="text-align: center; color: white; ">T C T R E A M I N G</h1>
								<p style="text-align: center; color: white; ">- music stream playlist -</p>
								<div class="panel panel-default" style="margin-top: 0px;">
						          <!-- <div class="panel-heading" style="text-align: center;">T C R A D I O</div> -->
						          <div class="panel-body" style="background-color: #29B669;">
						            <div class="col-sm-12">
							          	<?php echo $error;?> <!-- Error Message will show up here -->
							          	<div style="text-align:center; margin-bottom: 0px;">
							          		<img src="<?php echo base_url('uploads/cat2.gif'); ?>" style="width: 500px;">
							          	</div>
										<audio controls style="width: 100%; padding: 10px;">
											<source src="http://10.151.36.29:8000/myradio.mp3"> 
										</audio>
							          </div>
						          </div>
						        </div>
							</div>
						</div>
					</div>
					
					<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
						<div class="sl-slide-inner" style="background-color: #976D9E;">
							<div style="width: 600px; margin: 100px auto auto auto; ">
								<h1 style="text-align: center; color: white; ">T C T R E A M I N G</h1>
								<p style="text-align: center; color: white; ">- audio -</p>
								<div class="panel panel-default" style="margin-top: 10px;;">
						          <!-- <div class="panel-heading" style="text-align: center;">T C R A D I O</div> -->
						          <div class="panel-body" style="background-color: #976D9E;">
						            <div class="col-sm-12">
							          	<?php echo $error;?> <!-- Error Message will show up here -->
							          	<div style="text-align:center; margin-bottom: 10px;">
							          		<img src="<?php echo base_url('uploads/cat1.gif'); ?>" style="width: 500px;">
							          	</div>
										<audio controls style="width: 100%; padding: 10px; margin-top: -50px;">
											<source src="http://10.151.36.38:8000/mystream.mp3"> 
										</audio>
							          </div>
						          </div>
						        </div>
							</div>
						</div>
					</div>
					
					<div class="sl-slide bg-3" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
						<div class="sl-slide-inner" style="background-color: #64D9D6;">
							<div style="width: 600px; margin: 100px auto auto auto; ">
								<h1 style="text-align: center; color: white; ">T C T R E A M I N G</h1>
								<p style="text-align: center; color: white; ">- progresive download -</p>
								<div class="panel panel-default" style="margin-top: 10px;;">
						          <!-- <div class="panel-heading" style="text-align: center;">T C R A D I O</div> -->
						          <div class="panel-body" style="background-color: #64D9D6;">
						            <div class="col-sm-12">
							          	<?php echo $error;?> <!-- Error Message will show up here -->
							          	<div style="text-align:center; margin-bottom: 10px;">
							          		<img src="<?php echo base_url('uploads/cat4.gif'); ?>" style="width: 500px;">
							          	</div>
										<audio controls style="width: 100%; padding: 10px; margin-top: -50px;">
											<source src="<?php echo base_url('uploads/musics/start.mp3'); ?>"> 
										</audio>
							          </div>
						          </div>
						        </div>
							</div>
						</div>
					</div>
					
					<!-- <div class="sl-slide bg-4" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
						<div class="sl-slide-inner">
							<div class="deco" data-icon="I"></div>
							<h2>Donna nobis pacem</h2>
							<blockquote><p>The human body has no more need for cows' milk than it does for dogs' milk, horses' milk, or giraffes' milk.</p><cite>Michael Klaper M.D.</cite></blockquote>
						</div>
					</div>
					
					<div class="sl-slide bg-5" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1">
						<div class="sl-slide-inner">
							<div class="deco" data-icon="t"></div>
							<h2>Acta Non Verba</h2>
							<blockquote><p>I think if you want to eat more meat you should kill it yourself and eat it raw so that you are not blinded by the hypocrisy of having it processed for you.</p><cite>Margi Clarke</cite></blockquote>
						</div>
					</div>
				</div><!-- /sl-slider --> 
				
				<nav id="nav-arrows" class="nav-arrows">
					<span class="nav-arrow-prev">Previous</span>
					<span class="nav-arrow-next">Next</span>
				</nav>

				<nav id="nav-dots" class="nav-dots">
					<span class="nav-dot-current"></span>
					<span></span>
					<span></span>
				</nav>

			</div><!-- /slider-wrapper -->

        </div>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/slitslider/'); ?>/js/jquery.ba-cond.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/slitslider/'); ?>/js/jquery.slitslider.js"></script>
		<script type="text/javascript">	
			$(function() {
			
				var Page = (function() {

					var $navArrows = $( '#nav-arrows' ),
						$nav = $( '#nav-dots > span' ),
						slitslider = $( '#slider' ).slitslider( {
							onBeforeChange : function( slide, pos ) {

								$nav.removeClass( 'nav-dot-current' );
								$nav.eq( pos ).addClass( 'nav-dot-current' );

							}
						} ),

						init = function() {

							initEvents();
							
						},
						initEvents = function() {

							// add navigation events
							$navArrows.children( ':last' ).on( 'click', function() {

								slitslider.next();
								return false;

							} );

							$navArrows.children( ':first' ).on( 'click', function() {
								
								slitslider.previous();
								return false;

							} );

							$nav.each( function( i ) {
							
								$( this ).on( 'click', function( event ) {
									
									var $dot = $( this );
									
									if( !slitslider.isActive() ) {

										$nav.removeClass( 'nav-dot-current' );
										$dot.addClass( 'nav-dot-current' );
									
									}
									
									slitslider.jump( i + 1 );
									return false;
								
								} );
								
							} );

						};

						return { init : init };

				})();

				Page.init();

				/**
				 * Notes: 
				 * 
				 * example how to add items:
				 */

				/*
				
				var $items  = $('<div class="sl-slide sl-slide-color-2" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1"><div class="sl-slide-inner bg-1"><div class="sl-deco" data-icon="t"></div><h2>some text</h2><blockquote><p>bla bla</p><cite>Margi Clarke</cite></blockquote></div></div>');
				
				// call the plugin's add method
				ss.add($items);

				*/
			
			});
		</script>
	</body>
</html>
