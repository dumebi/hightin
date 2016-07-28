<?php  
include("connect_to_mysql.php");
if(isset($_GET['actionType']) && isset($_GET['usercard'])){
	$actionType = $_GET['actionType'];
	if($actionType == 'verify'){
			$card = $_GET['usercard'];
			$verifyCard = mysqli_query($conn,"select * from cards where card_no=".$card."");
			$card_result = mysqli_affected_rows($conn);
			if ($card_result >= 1) {
			while($rows = mysqli_fetch_array($verifyCard)){
						$card_value = $rows['card_value'];
					$msg[] = array("message" => $rows['card_value'], "result" => "true");
					}
			}
			else{
				$msg[] = array("message" => "not found", "result" => "false");
			}
			
	}
	else{
		$msg[] = array("message" => "not found", "result" => "true");
	}
	$json = $msg;
			 
			header('content-type: application/json');
			echo json_encode($json);
						@mysqli_close($conn);

}
if(isset($_GET['actionType']) && isset($_GET['username']) && isset($_GET['email']) && isset($_GET['password'])){
	$actionType = $_GET['actionType'];
	if($actionType == 'register'){
			$username = $_GET['username'];
			$email = $_GET['email'];
			$password = $_GET['password'];
			
				$sql = "SELECT * FROM account WHERE username='".$username."'";
				$insert_pro = mysqli_query($conn,$sql);
				$existCount = mysqli_affected_rows($conn); // count the row nums
				if ($existCount == 1) { // evaluate the count
				   $msg[] = array("message" => "Sorry! Username is taken", "result" => "false");
				} 
				else {
					$pass = md5($password);
					$register = mysqli_query($conn,"insert into account(username, email, password, date_created) values('".$username."', '".$email."', '".$pass."', now())");
					if($register){
						$msg[] = array("message" => "Your account has been created. Proceed to login", "result" => "true");
					}else{
						$msg[] = array("message" => "Error! Your account was not created. Ps contact support", "result" => "false");
					}
				}
					
				
			$json = $msg;
			 
			header('content-type: application/json');
			echo json_encode($json);
			 
			@mysqli_close($conn);
	}
}
if(isset($_GET['actionType']) && isset($_GET['username']) && isset($_GET['password'])){
	$actionType = $_GET['actionType'];
	if($actionType == 'login'){
			$username = $_GET['username'];
			$email = $_GET['email'];
			$password = $_GET['password'];
			$pass = md5($password);
				$sql = "SELECT * FROM account WHERE username='".$username."' and password='".$pass."'";
				$insert_pro = mysqli_query($conn,$sql);
				$existCount = mysqli_affected_rows($conn); // count the row nums
				if ($existCount == 1) { // evaluate the count
				   $msg[] = array("message" => "Welcome!", "result" => "true");
				} 
				else {
					$msg[] = array("message" => "Error! Invalid login details", "result" => "false");
				}
					
				
			$json = $msg;
			 
			header('content-type: application/json');
			echo json_encode($json);
			 
			@mysqli_close($conn);
	}
}
?>

