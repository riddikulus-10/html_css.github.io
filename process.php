<? php ob_start();
	
	if(isset($_POST['submit'])){
		
		$to="mohitrajani95@gmail.com";
		
		$subject=$_POST['subject'];
		
		$email=$_POST['email'];
		
		$txt=$_POST['message'];
		
		$headers="From:".{$email}."\r\n".
			"CC: 18bei032@ietdavv.edu.in";
		
		mail($to, $subject, $message, $headers);
		
		header("Location: contact.html");
	}

?>
