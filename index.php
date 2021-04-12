    
    <?php include 'header.php'; ?>
    
    
		    <div class="container text-center">
			    <h2 class="heading">DevBlog - A Blog Template Made For Developers</h2>
			    <div class="intro">Welcome to my blog. Subscribe and get my latest blog post in your inbox.</div>
			    <form class="signup-form form-inline justify-content-center pt-3">
                    <div class="form-group">
                        <label class="sr-only" for="semail">Your email</label>
                        <input type="email" id="semail" name="semail1" class="form-control mr-md-1 semail" placeholder="Enter email">
                    </div>
                    <button type="submit" class="btn btn-primary">Subscribe</button>
					
                </form>
		    </div><!--//container-->
	    </section>
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
				for($i = $page * 10; $i < $max; $i++) : ?>
			    <div class="item mb-5">
				    <div class="media">
					    <a href="blog-post.php?id=<?= $i ?>"><img class="mr-3 img-fluid post-thumb d-none d-md-flex" src=<?php echo "'https://picsum.photos/300?random=".$i."'"; ?> alt="image"></a>
					    <div class="media-body">
						    <h3 class="title mb-1"><a href="blog-post.php?id=<?= $i ?>"><?= $Posts[$i]['title'];?></a></h3>
						    <div class="meta mb-1"><span class="date">Published <?php echo humanTiming(strtotime($Posts[$i]['date'])).' ago by ' .$Posts[$i]["username"]; ?></span><span class="time">5 min read</span><span class="comment"><a href="#">4 comments</a></span></div>
						    <div class="intro h-50  d-inline-block" ><p><?= strip_tags(html_entity_decode($Posts[$i]['content']));?></p></div>

						    <a class="more-link" href="blog-post.php?id=<?= $i ?>">Read more &rarr;</a>
					    </div><!--//media-body-->
				    </div><!--//media-->
			    </div><!--//item-->
				<?php endfor ?>
			    
			    <nav class="blog-nav nav nav-justified my-5">
				  <a class="nav-link-prev nav-item nav-link d-none rounded-left" href="#">Previous<i class="arrow-prev fas fa-long-arrow-alt-left"></i></a>
				  <a class="nav-link-next nav-item nav-link rounded" href="blog-list.php?page=1">Next<i class="arrow-next fas fa-long-arrow-alt-right"></i></a>
				</nav>
				
		    </div>
	    </section>
<?php include 'footer.php'; ?>
