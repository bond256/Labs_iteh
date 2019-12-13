<body> 
Lab 1: 
<?php 
session_start();
if (!isset($_GET['add'])) {
echo "<form>
Name: <input type=text name=login>
<input type=submit name=add value=but>
</form>";
}
else {
	$_SESSION['login']=$_GET['login'];
	echo "<a href='page1.php'>Page1</a>";
}
?> 
</body> 