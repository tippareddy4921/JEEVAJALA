<?php
	$namee = $_POST['namee'];
  $number = $_POST['number'];
	$email = $_POST['email'];
	$area = $_POST['area'];
  $descr = $_POST['descr'];
  $dura = $_POST['dura'];
  $autho = $_POST['autho'];
  $solut = $_POST['solut'];
  $typec = $_POST['typec'];
  $regbef = $_POST['regbef'];
  $addit = $_POST['addit'];


	// Database connection
	$conn = new mysqli('localhost','root','','form');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("INSERT Into products (name,number,email,area,descr,dura,autho,solut,typec,regbef,addit) values(?,?,?,?,?,?,?,?,?,?,?)");
		$stmt->bind_param("ssssiiiiiii",$namee,$number,$email,$area,$descr,$dura,$autho,$solut,$typec,$regbef,$addit);
		$execval = $stmt->execute();
		echo $execval;
		echo "Your complain has been registered and will be taken in consideration as soon as possible!!";
		$stmt->close();
		$conn->close();
	}
?>