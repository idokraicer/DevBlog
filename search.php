
    
	<?php
        include './includes/functions.php'; 
         
    ?>
    

		<link rel="stylesheet" href="./assets/css/fills.css">
        <section class="blog-list px-3 py-5 p-md-5">
		    <div class="container-fluid">
            <?php
                include 'includes/search.inc.php';
                $Posts = getSearchResults();
                if(isset($_GET['query']) ){
					echo "<div class='mb-5'><h2 >Page ".(isset($_GET['page']) ? $_GET['page'] : "1").' out of '.(($Posts === null) ? '0' : count($Posts)).' results found.</h2></div>';
				}
                $page = 1;
				$invisible = "";
				$first = true;
				$last = false;
                $flag = false;
				$maxPage = (($Posts === null) ? 0 : ceil(count($Posts)/8));
                $page_set = isset($_GET['page']);
				$query_set = isset($_GET['query']) ? $_GET['query'] : "";
                if( $Posts === null  ){
                    $flag = true;
                    $Posts = array(
                        'id' => "",
                        'username' => "",
                        'title' => "",
                        'content' => "",
                        'date' => time()
                    );
                    echo '<center><h1 class="title">No posts found!</h1></center>';
					$invisible = "nextprev";
				} 
				if(!$flag):
					if(isset($_GET['page'])){
						$page = $_GET['page'];
						if($page <= 1){
							$page = 1;
						} else {
							if($page >= $maxPage){
								$page = $maxPage;
								$invisible = "next";
							} else if($maxPage == 1){
								$invisible = "nextprev";
							}
						}
					}
					if(count($Posts) <= 8){
						$invisible = "nextprev";
						$page = 1;
						$maxPage = 1;
					} 
					if($page <= 1){
						$invisible = $invisible."prev";
					}
				endif;
				for($i = count($Posts) - (($page-1) * 8) -1 ; $i >= count($Posts) - 8 - (($page-1) * 8) && $i >= 0  && !$flag; $i--): ?>
				<?php if($first) {
				} 
				?>
			    <div class="item mb-5">
				    <div class="media">
					    <a href="blog-post.php?id=<?= $Posts[$i]['id'] ?>"><img class="mr-3 img-fluid post-thumb d-none d-md-flex" src=<?php echo "'https://picsum.photos/300?random=".$i."'"; ?> alt="image"></a>
					    <div class="media-body">
						    <h3 class="title mb-1 text-truncate"><a href="blog-post.php?id=<?= $Posts[$i]['id'] ?>"><?= strlen($Posts[$i]['title']) > 25 ? strip_tags(substr($Posts[$i]['title'],0,25)) : strip_tags($Posts[$i]['title']);?></a></h3>
						    <div class="meta mb-1"><span class="date">Published <?php echo humanTiming(strtotime($Posts[$i]['date'])).' ago by ' .$Posts[$i]["username"]; ?></span><span class="time">5 min read</span><span class="comment"><a href="#">4 comments</a></span></div>
						    <div class="content"><?= strlen($Posts[$i]['content']) > 200 ? strip_tags(substr($Posts[$i]['content'],0,200)) : $Posts[$i]['content'];?></div>
						    <a class="more-link" href="blog-post.php?id=<?= $Posts[$i]['id'] ?>" >Read more &rarr;</a>
					    </div><!--//media-body-->
				    </div><!--//media-->
			    </div><!--//item-->
				
				<?php if($i == 0) {
					echo "</div>";
				}
				$first = !$first;
				?>
				<?php endfor ?>
			    
			    
			    <nav class="blog-nav nav nav-justified my-5 d-flex justify-content-center ">
					<ul class="pagination  justify-content-center " >
						<?php if(true) : ?>
							<li class="page-item active <?= strpos($GLOBALS['invisible'], "prev") === false ? '' : 'disabled' ?>">
								<a class="page-link rounded-left "
								 href="index.php?<?= isset($_GET['query']) ? 'query='.$_GET['query'].'&' : ""?>page=<?=$GLOBALS['page']-1?>"
								>
								 	Previous
								</a>
							</li>
						<?php endif ?>
						
						<?php for($i = 1; $i <= count($Posts); $i += 8): ?>
							<li class="page-item  <?php if(!((int)($i/8)+1 ==  $page-1 || (int)($i/8)+1 ==  $page || (int)($i/8)+1 ==  $page +1  || (int)($i/8)+1 ==  1  || (int)($i/8)+1 ==  $maxPage)) {
								echo 'd-none d-sm-block';
							}
													echo $GLOBALS['page'] == (int)(($i - 1)/8)+1  ? '' : ' active '; ?>">
								<a class="page-link " href="./index.php?<?= isset($_GET['query']) ? 'query='.$_GET['query'] : '' ?>&page=<?= (int)($i - 1)/8 +1; ?>"><?= ($i - 1)/8 +1; ?><span class="sr-only">(current)</span></a>
							</li>
						<?php endfor ?>
						<?php if( !$GLOBALS['flag'] || true) : ?>
							<li class="page-item active <?= strpos($GLOBALS['invisible'], "next") === false ? '' : 'disabled' ?>">
								<a class=" page-link rounded-right "  
								href="index.php?<?= isset($_GET['query']) ? 'query='.$_GET['query'].'&' : ""?>page=<?=$GLOBALS['page']+1 ?>"
								>
									Next
								</a>
							</li>
						<?php endif ?>
					</ul>
				</nav>
				
		    </div>
	    </section>
	</div>
	</section>
	

