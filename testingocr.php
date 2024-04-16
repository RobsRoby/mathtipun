<?php
$x=1;
$dbhost = 'localhost';
  $dbuser = 'root';
  $dbpass = '';
  $dbname = 'mathtipun';
  $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

$files = scandir("images/",1);
	
	foreach ($files as $gradelevel) {
		if($gradelevel != "." AND $gradelevel != ".."){
			
			$grade = scandir("images/$gradelevel",1);
			
			foreach ($grade as $subject) {
				if($subject != "." AND $subject != ".."){
				
				$subs = scandir("images/$gradelevel/$subject",1);
					foreach ($subs as $topic) {
						if($topic != "." AND $topic != ".."){
						
						$imagesearch = scandir("images/$gradelevel/$subject/$topic",1);
						$pageno=1;
							foreach ($imagesearch as $oneimage) {
								if($oneimage != "." AND $oneimage != ".."){
								echo $gradelevel."<br>";
								echo $subject."<br>";
								echo $topic."<br>";
								echo $oneimage."<br>";
											$gradeno = str_replace('GRADE', "", $gradelevel);
											$source = "images/".$gradelevel."/".$subject."/".$topic."/".$oneimage;
											          	$resultcheck = $conn->query("SELECT * FROM content WHERE image='".$oneimage."' AND grade='".$gradeno."' AND topic='".$topic."'");
											          	
													          If (mysqli_num_rows($resultcheck) == 0){
													          $conn->query("INSERT INTO content (grade, topic, image, content, wheretopic, dir, page)
													          VALUES ('".$gradeno."', '".$topic."', '".$oneimage."', '', 'images/".$gradelevel."/".$subject."/".$topic."/', 'images/".$gradelevel."/".$subject."', '".$pageno."')");
													       	  If($x == 1){
															       	  $sql = "SELECT * FROM content WHERE image='".$oneimage."' AND grade='".$gradeno."' AND topic='".$topic."'";
															          $retval = $conn->query($sql);
															          while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) { 
															        	echo "
															        	<script>
															        	window.open('updatecontent.php?getid=".$row['id']."&source=".$source."', '_blank');
															        	</script>";
																		}
																}
													          }
																$pageno++;
      								$x++;
								}

							
							}

						}

					
					}
				}

			
			}

		}

		
	}



?>