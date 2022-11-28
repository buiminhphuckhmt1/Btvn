<?php 
    class Connection
    {
    	//hàm sử dụng để kết nối với csdl và trả về biến kết nối
    	public static function getInstance(){
    		$server_name="localhost";
    		$database_name="php63_project1";
    		$username="root";
    		$password="";
            //ket noi csdl, trả ve bien ket qua
    		$conn=new PDO ("mysql:host=$server_name;dbname=$database_name",$username,$password);
            //neu muon lay duoc tieng viet de hien thi len web thi can co dong lenh sau
    		$conn->exec("set names utf8");
            //tra ket qua de su dung cho ben ngoai khi goi ham nay
    		return $conn;
    	}
    }
 ?>

