
	<?php include 'header.php'; ?>
    
    <div class="main-wrapper">
	    
	    <section class="blog-list px-3 py-5 p-md-5">
		    <div class="container">
				<?php include 'includes/getPosts.inc.php';
				$Posts = postsArray();
				$page = 0;
				if(isset($_GET['page']))
				{
					if($_GET['page'] < 0)
					{
						header('Location: blog-list.php?page=0');
					}
					$page = $_GET['page'];
				}
				if((($page * 10)+10) > count($Posts))
				{
					$max=count($Posts);
				} else $max = $page*10 +10;
				if($page*10 > count($Posts)){
					echo '<h1>No posts found!</h1>';
				}
				for($i = $page * 10; $i < $max; $i++) : ?>
			    <div class="item mb-5">
				    <div class="media">
					    <a href="blog-post.php?id=<?= $i ?>"><img class="mr-3 img-fluid post-thumb d-none d-md-flex" src=<?php echo "'https://picsum.photos/300?random=".$i."'"; ?> alt="image"></a>
					    <div class="media-body">
						    <h3 class="title mb-1"><a href="blog-post.php?id=<?= $i ?>"><?= $Posts[$i]['title'];?></a></h3>
						    <div class="meta mb-1"><span class="date">Published <?php echo humanTiming(strtotime($Posts[$i]['date'])).' ago'; ?></span><span class="time">5 min read</span><span class="comment"><a href="#">4 comments</a></span></div>
						    <div class="intro"><?= $Posts[$i]['content'];?></div>
						    <a class="more-link" href="blog-post.php?id=<?= $i ?>">Read more &rarr;</a>
					    </div><!--//media-body-->
				    </div><!--//media-->
			    </div><!--//item-->
				<?php endfor ?>
			    
			    
			    <nav class="blog-nav nav nav-justified my-5">
				  <a class="nav-link-prev nav-item nav-link rounded-left" href="blog-list.php?page=<?=$GLOBALS['page']-1?>">Previous<i class="arrow-prev fas fa-long-arrow-alt-left"></i></a>
				  <a class="nav-link-next nav-item nav-link rounded-right"  href="blog-list.php?page=<?php if($GLOBALS['page']*10 >= count($GLOBALS['Posts'])) { echo $GLOBALS['page']; } else { echo $GLOBALS['page']+1;}?>">Next<i class="arrow-next fas fa-long-arrow-alt-right" ></i></a>
				</nav>
				
		    </div>
	    </section>
	</div>
	</section>
	    <?php include 'footer.php'; ?>

