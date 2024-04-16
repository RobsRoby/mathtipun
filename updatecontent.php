<script src='https://unpkg.com/tesseract.js@v2.0.2/dist/tesseract.min.js'></script>
<?php
if (!empty($_GET["getid"])) {
	$getid=$_GET['getid'];
	$image=$_GET['source'];
?>
<form name="contentupdate" id="contentupdate" method="post" action="updatecontent.php?updated=1">
<input name="id" value="<?php echo $getid;?>" hidden>
<br><input type="text" name="content" id="getimage" value="">
<button type="submit" name="dataupdate"> Submit</button>
</form>
<script>
	Tesseract.recognize(
	  '<?php echo $image;?>',
	  'eng',
	  { logger: m => console.log(m) }
	).then(({ data: { text } }) => {
	  console.log(text);
	  var x = text;
	  document.getElementById('getimage').value = x;
	  var input = document.getElementById('getimage');
		if (input && input.value) {
			document.getElementById('contentupdate').submit();
		}
	})

</script>
<?php }

if (!empty($_GET["updated"])) {
    	  $dbhost = 'localhost';
          $dbuser = 'root';
          $dbpass = '';
          $dbname = 'mathtipun';
			$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			$id=$_POST['id'];
			$content=$_POST['content'];
			$content=str_replace(' ', '-', $content); 
			$content=preg_replace('/[^A-Za-z0-9\-]/', ' ', $content);
			$content=preg_replace('/-+/', '-', $content);
			$content=str_replace('-', ' ', $content);
			$sql = "UPDATE content SET content='".$content."' WHERE id='".$id."'";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

		$idplus=$id+1;
		$sql = "SELECT * FROM content WHERE id='".$idplus."'";
		$retval = $conn->query($sql);
		If (mysqli_num_rows($retval) == 1){
		$row = mysqli_fetch_array($retval, MYSQLI_ASSOC);
		$source= $row['wheretopic'].$row['image'];
		echo "<script>window.open('updatecontent.php?getid=".$idplus."&source=".$source."', '_blank');</script>";
		echo "<script>window.close();</script>";
		} 

$conn->close();
}
?>

