<?php 
	trait ContactModel{
		//dang ky
		public function modelcontact(){
			$name = $_POST["name"];
			$email = $_POST["email"];
			$topic = $_POST["topic"];
			$message = $_POST["message"];
			$conn = Connection::getInstance();
			$query = $conn->prepare("insert into contacts set name=:var_name,email=:var_email,topic=:var_topic,message=:var_message");
			$query->execute(["var_name"=>$name,"var_email"=>$email,"var_topic"=>$topic,"var_message"=>$message]);
		}
	}
 ?>