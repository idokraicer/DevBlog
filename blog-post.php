
	<?php include 'header.php'; ?>
	<?php include 'includes/getPosts.inc.php';
				$Post = getSinglePost($_GET['id']);
	?>
    
    <div class="main-wrapper">
	    
	    <article class="blog-post px-3 py-5 p-md-5">
		    <div class="container">
			    <header class="blog-post-header">
				    <h2 class="title mb-2"><?= $GLOBALS['Post']['title']?></h2>
				    <div class="meta mb-3"><span class="date">Published <?php echo humanTiming(strtotime($Post['date'])).' ago'; ?></span><span class="time">5 min read</span><span class="comment"><a href="#">0 comments</a></span></div>
			    </header>
			    
			    <div class="blog-post-body">
				    <figure class="blog-banner">
				        <a href="#"><img class="img-fluid" src="https://picsum.photos/1200/600" alt="image"></a>
				        <figcaption class="mt-2 text-center image-caption">Image Credit: <a href="#" target="_blank">made4dev.com (Premium Programming T-shirts)</a></figcaption>
				    </figure>
					<p>
						<?php echo $Post['content']; ?>
					</p>
				<br><br><br><br>
				<div class="blog-comments-section">
					<div id="disqus_thread"></div>
					<script>
					    /**
					     *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT 
					     *  THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR 
					     *  PLATFORM OR CMS.
					     *  
					     *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: 
					     *  https://disqus.com/admin/universalcode/#configuration-variables
					     */
					    /*
					    var disqus_config = function () {
					        // Replace PAGE_URL with your page's canonical URL variable
					        this.page.url = PAGE_URL;  
					        
					        // Replace PAGE_IDENTIFIER with your page's unique identifier variable
					        this.page.identifier = PAGE_IDENTIFIER; 
					    };
					    */
					    
					    (function() {  // REQUIRED CONFIGURATION VARIABLE: EDIT THE SHORTNAME BELOW
					        var d = document, s = d.createElement('script');
					        
					        // IMPORTANT: Replace 3wmthemes with your forum shortname!
					        s.src = 'https://3wmthemes.disqus.com/embed.js';
					        
					        s.setAttribute('data-timestamp', +new Date());
					        (d.head || d.body).appendChild(s);
					    })();
					</script>
					<noscript>
					    Please enable JavaScript to view the 
					    <a href="https://disqus.com/?ref_noscript" rel="nofollow">
					        comments powered by Disqus.
					    </a>
					</noscript>
				</div><!--//blog-comments-section-->
				
		    </div><!--//container-->
	    </article>
	    
	   
	</div>
	</section>
		<?php include 'footer.php'; ?>

