<?php
	
		if(isset($_POST['submit'])){
	
			srand((double)microtime()*1000000);
			$marker = md5(uniqid(rand()));
		
			$receiver  = implode(", ",["leadsgoldhomz@gmail.com","goldhomzbackend@gmail.com"]);
			
		
			$title = "Prestige Bougainvillea Garden";
			
			$sender  = $_POST['name'];
			$sender_email = $_POST['email'];
			$sender_phone = $_POST['phone'];
			$sender_subject = $_POST['subject'];
			
            
			$headers = "From: $sender_email\r\n";
			$headers .= "Reply-To: $receiver \r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			$headers .= 'BCC: ' . implode(', ', $recipients) . "\r\n";
			
			$content ="Name : $sender\r\n<br>";
			$content .="Email : $sender_email\r\n<br>";
			$content .="Phone : $sender_phone\r\n<br>";
			$content .="Subject : $sender_subject\r\n<br>";
			
			if (mail($receiver,$title,$content,$headers))
			{ ?>
    <script>
        window.location = "index.html";
    </script>
    <?php	}
			
		}
		
	?>