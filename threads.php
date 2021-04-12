<?php 
include 'includes/getPosts.inc.php';
if(!isset($_GET['id'])){

        
        $rows = postsArray();
        
        echo '<div class="container">';
        for($i = 0; $i < 9; $i++)
        {
            if(($i % 3) == 0) {
                if($i == 0) {
                    echo '<div class="container">
                                <div class="card-group">';
                } else {
                
                echo '          </div>
                        </div>
                        <div class="container">
                            <div class="card-group">';
                }
            }
            echo '<div class="card p-3">
                    <a href="index.php?id='.$rows[$i]['id'].'">
                        <img class="card-img-top" src="images/offer1.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">'.$rows[$i]['title'].'</h5>
                            <p class="card-text">'.$rows[$i]['content'].'</p>
                            <p class="card-text"><small class="text-muted">Last updated <b>'.humanTiming(strtotime($rows[$i]['date'])).' ago<b> by <b>'.$rows[$i]['username'].'<b></small></p>
                        </div>
                    </a>
                    </div>';


        }
        
        /*for($i = 0; $i < count($rows);$i += 10){
            if($i == 0)
            {
                echo "<div class='row'></div>
        <div class='row'></div>
        <nav aria-label='Page navigation example'>
          <ul class='pagination justify-content-center'>
            <li class='page-item disabled'>
              <a class='page-link' href='#' tabindex='-1'>Previous</a>
            </li>";
            }
            else { echo "<div class='row'></div>
            <div class='row'></div>
            <nav aria-label='Page navigation example'>
              <ul class='pagination justify-content-center'>
                <li class='page-item'>
                  <a class='page-link' href='#' tabindex='-1'>Previous</a>
                </li>";
            }
            echo '<li class="page-item"><a class="page-link" href="index.php?page='.$i.'">'. intval($i)+1 .'</a></li>';
        }
        
        echo    '<li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>';*/
}
else 
            /*<div class="card-group">
                <div class="card p-3">
                    <img class="card-img-top" src="images/offer1.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        <p class="card-link"><a href="#">Link</a></p>
                    </div>
                </div>
                <div class="card p-3">
                    <img class="card-img-top" src="images/offer2.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        <p class="card-link"><a href="#">Link</a></p>
                    </div>
                </div>
                <div class="card p-3">
                    <img class="card-img-top" src="images/offer3.png" alt="Card image cap"> 
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        <p class="card-link"><a href="#">Link</a></p>
                    </div>
                </div>
            </div> 
            <br>      
        </div>*/
?>
