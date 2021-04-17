
		<section class="blog-list px-3 py-5 p-md-5">
		    <div class="container-fluid">
				<?php include 'includes/getPosts.inc.php';
				$Posts = postsArray();
				$page = 0;
				$invisible = "";
				$last = false;
				if(isset($_GET['page']))
				{
					if($_GET['page'] < 0)
					{
						header('Location: blog-list.php?page=0');
					}
					$page = $_GET['page'];
				}
				if((($page * 8)+8) > count($Posts))
				{
					$last=true;
				} else $last = false;
				if($page*8 > count($Posts)){
					echo '<h1>No posts found!</h1>';
				}
				if($last) {
					$invisible = "invisible";
				}
				for($i = count($Posts) - ($page * 8) -1 ; $i >= count($Posts) - 8 - ($page * 8) && $i >= 0; $i--): ?>
				<?php if(($i % 2) == 1 ) {
					echo "<div class='row'>";
				} 
				?>
			    <div class="item mb-5 col-6">
				    <div class="media">
					    <a href="blog-post.php?id=<?= $Posts[$i]['id'] ?>"><img class="mr-3 img-fluid post-thumb d-none d-md-flex" src=<?php echo "'https://picsum.photos/300?random=".$i."'"; ?> alt="image"></a>
					    <div class="media-body">
						    <h3 class="title mb-1"><a href="blog-post.php?id=<?= $Posts[$i]['id'] ?>"><?= $Posts[$i]['title'];?></a></h3>
						    <div class="meta mb-1"><span class="date">Published <?php echo humanTiming(strtotime($Posts[$i]['date'])).' ago by ' .$Posts[$i]["username"]; ?></span><span class="time">5 min read</span><span class="comment"><a href="#">4 comments</a></span></div>
						    <div class="intro"><?= $Posts[$i]['content'];?></div>
						    <a class="more-link" href="blog-post.php?id=<?= $Posts[$i]['id'] ?>">Read more &rarr;</a>
					    </div><!--//media-body-->
				    </div><!--//media-->
			    </div><!--//item-->
				
				<?php if(($i % 2) == 0 && $i != count($Posts)) {
					echo "</div>";
				} ?>
				<?php endfor ?>
			    
			    
			    <nav class="blog-nav nav nav-justified my-5">
				<?php if($GLOBALS['page'] > 0) : ?>
					<a class="nav-link-prev nav-item nav-link rounded-left" href="index.php?page=<?=$GLOBALS['page']-1?>">Previous<i class="arrow-prev fas fa-long-arrow-alt-left"></i></a>
				<?php endif ?>
				<?php if(!$GLOBALS['last']) : ?>
				  	<a class="nav-link-next nav-item nav-link rounded-right"  href="index.php?page=<?=$GLOBALS['page']+1 ?>">Next<i class="arrow-next fas fa-long-arrow-alt-right" ></i></a>
				<?php endif ?>
				</nav>
				
		    </div>
	    </section>
	</div>
	</section>

