<?php 
	try{
	$conn = new PDO('mysql:host=127.0.0.1;dbname=rrf','root','');
	}catch (PDOException $e){
		echo $e->getmessage();
		}
	if(isset($_POST['name'])){
		
		$title = $_POST['name'];
		
		$sql = "INSERT INTO `mpi`(`name`) VALUES (:title)";
		
		$stmt = $conn ->prepare($sql);
		
		$res = $stmt->execute(array(
		
			':title' =>$title ));
		
		if ($res){
			
			$msg = "Successfully Inserted";
			}
		}
	
?>
<p><?php echo isset($msg)? $msg :''; ?></p>		
<form action="#" method="POST">
	<input type="text" name="name" id=""/>
	<input type="submit" value="submit"/>

</form>