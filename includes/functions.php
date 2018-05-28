<?php

	//connect to database
	function Connect(){
		mysql_connect("url","username","password");
		mysql_select_db("db");
	}

	//search results
	function results(){
		$q = $_GET['q'];

		if(isset($_GET['q'])){
			if($_GET['q']==""){
				echo "Enter something to search for.. ";
			}
			else{
				Connect();

				$selectResults = mysql_query("SELECT * FROM results WHERE title LIKE '%$q%'");

				$numrows = mysql_num_rows($selectResults);

				if($numrows==1){
					while ($row = mysql_fetch_assoc($selectResults)) {
						$title = $row['title'];
						$desc= $row['description'];
						$id = $row['id'];

						echo "<h4><small>$id"; ?>) <?php echo "</small>$title</h4>";
						?>
							<p>
									
								<?php  

									echo $desc;

								?>

							</p>
							<hr />
						<?php
					}
				}
				else{
					echo "Sorry, no results with them terms were returned, please try again.";
				}
			}	
		}
	}

	//file upload 
	function upload(){

	}

	//contact us
	function contact(){

	}

	//profile page
	function profile(){

	}
?>	
