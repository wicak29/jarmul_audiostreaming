<html>
	<head>
		<title>Audio Streaming</title>
		<meta charset="utf-8">
	    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
	    
	    <!-- site css -->
	    <link rel="stylesheet" href="<?php echo base_url('assets/bootflat');?>/css/site.min.css ">
	    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800,700,400italic,600italic,700italic,800italic,300italic" rel="stylesheet" type="text/css">
	    <script type="text/javascript" src="<?php echo base_url('assets/bootflat');?>/js/site.min.js"></script>
	</head>
	<body style="background-color: rgb(241, 242, 246);">
		<div class="container documents">
			<nav class="">
				<a class="" href="index.html">Demo 1</a>
				<a href="index2.html">Demo 2</a>
			</nav>
			<div class="example">
				<div class="row">
					<div class="col-md-3">
					</div>
					<div class="col-md-6">
						<h3 style="text-align: center; ">T C T R E A M I N G</h3>
						<div class="panel panel-default" style="margin-top: 10%;">
				          <!-- <div class="panel-heading" style="text-align: center;">T C R A D I O</div> -->
				          <div class="panel-body" style="background-color: #66CEFF;">
				            <div class="col-sm-12">
					          	<?php echo $error;?> <!-- Error Message will show up here -->
					          	<div style="text-align:center; margin-bottom: 30px;">
					          		<img src="<?php echo base_url('uploads/cat.gif'); ?>">
					          	</div>
								<audio controls style="width: 100%;">
									<source src="<?php echo base_url('uploads/musics/start.mp3'); ?>"> 
								</audio>
					          </div>
				          </div>
				        </div>
					</div>
					<div class="col-md-3">
					</div>
				</div>
			</div>
		</div>
	</body>
</html>

<script type="text/javascript">
</script>