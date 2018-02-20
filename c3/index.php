<p>Navigacija 1</p>
<a href="test.php">Nav 1</a>


<p>Navigacija 2</p>
<a href="?test=da">Nav 2</a>

<?php
header('Content-Type: text/html; charset=utf-8');

if(isset($_GET['test']) && $_GET['test'] == 'da'){
	header('Location: test.php');
}

?>


<p>Navigacija 3</p>
<input type="button" value="button" onclick="nav()">
<br>
<script type="text/javascript">
	function nav(){
		document.location = 'test.php';
	}
</script>

<p>Navigacija 4</p>
<form action="test.php" method="post">
	<input type="text" name="name" placeholder="Name">
	<br><br>
	<input type="password" name="password" placeholder="Password">
	<br><br>
	<input type="submit" name="Submit">
</form>




<!-- <form>
	<input type="text" name="textpole">
	<input type="submit" name="submit">
</form> -->