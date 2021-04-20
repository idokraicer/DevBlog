<?php include 'getPosts.inc.php';
	include 'dbh.inc.php';
			function getSearchResults(){
				$Posts = postsArray();
                $List = Array();
				$query = "";
				if (!isset($_GET['query']) || $_GET['query'] == ""){
					return $Posts;
				} else {
					$query = $_GET['query'];
				}
				$keywords = explode(" ", $query);
				//array_push($List, "");
				foreach ($keywords as &$kw){
					$count = 0;
					if($kw != "") {
						for($i = 0; $i < count($Posts); $i++){
							if(strpos(strtolower($Posts[$i]['title']), strtolower(" ".$kw)) !== false ||  strpos(strtolower($Posts[$i]['title']), strtolower($kw." ")) !== false ){
								array_push($List, $Posts[$i]);
							}
							if(strpos(strtolower($Posts[$i]['username']), strtolower($kw)) !== false ){
								if(!in_array($Posts[$i], $List)){
									array_push($List, $Posts[$i]);
								}
							}
						}
					}
				}
				return $List;
			}
?>