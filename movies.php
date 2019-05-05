<h3 class="agile_w3_title">Movies</h3>
<!--/movies-->
<div class="w3_agile_latest_movies">
	<div id="owl-demo" class="owl-carousel owl-theme">
		<?php $q = select("select * from movies"); while($movies = mysqli_fetch_array($q)) {  extract($movies); ?>
		<div class="item">
			<div class="w3l-movie-gride-agile w3l-movie-gride-slider ">
				<a href="single.php?moviesid=<?=$moviesid?>" class="hvr-sweep-to-bottom"><img src="movies/<?=$movies_image?>" title="Movies Pro" class="img-responsive" alt=" " />
					<div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
				</a>
				<div class="mid-1 agileits_w3layouts_mid_1_home">
					<div class="w3l-movie-text">
						<h6><a href="single.php"><?=$movies_name?>	</a></h6>
					</div>
					<div class="mid-2 agile_mid_2_home">
						<p><?=$movies_year?></p>
						<div class="block-stars">
							<ul class="w3l-ratings">
								<?php for($i=1;$i<=$movies_rating;$i++) :  ?>
								<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
								<?php  endfor; ?>
							</ul>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<?php if(strlen($movies_label)>0):?>
				<div class="ribben one">
					<p><?=ucwords($movies_label)?></p>
				</div>
				<?php endif; ?>
			</div>
		</div>
		<?php } ?>
	</div>
</div>