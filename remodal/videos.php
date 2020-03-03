<?php
	$sql10="select * from movies";
	$query10=mysqli_query($con,$sql10);

?> 
	<!-- header-section-starts -->
	<div class="full">
			 
	 
		<div class="video-content">
			 
			<div class="right-content">
				<div class="right-content-heading">
					<div class="right-content-heading-left">
						<h3 class="head">Latest Colletcion of videos</h3>
					</div>
				</div>
				<!-- pop-up-box --> 
		<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
		<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
		 <script>
				$(document).ready(function() {
				$('.popup-with-zoom-anim').magnificPopup({
					type: 'inline',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: 'auto',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: 'my-mfp-zoom-in'
				});
				});
		</script>		

		<!--//pop-up-box -->
			<div class="content-grids">
			<?php
				while($f=mysqli_fetch_array($query10,MYSQLI_ASSOC))
				{	
					$movie= $f['movie_name'];
					$image= $f['movie_image'];
					$link1= $f['movie_embed'];
					echo '<div class="content-grid">';
					echo "<a class='play-icon popup-with-zoom-anim' href='#small-dialog'>
					 <iframe  src='$link1' frameborder='0'allowfullscreen></iframe></a>";
					echo "<h2>".$movie."</h2>";
					echo "<a class='button play-icon popup-with-zoom-anim' href='#small-dialog'>Watch now</a>
					</div>";
 				}
			?>				 
			<div class="clearfix"> </div>
		 
			</div>
		</div>
		<div class="clearfix"> </div>
		</div>	
 
 
	<div class="clearfix"></div>
	</div>
</body>
</html>