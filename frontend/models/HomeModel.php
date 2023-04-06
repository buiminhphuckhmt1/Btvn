<?php 
	trait HomeModel{
		//liet ke 6 san pham noi bat
		public function hotProducts(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products where hot = 1 order by id desc limit 0,6");
			//lay tat ca cac ket qua tra ve
			return $query->fetchAll(PDO::FETCH_OBJ);
		}
		//lay cac danh muc co san pham ben trong
		public function productsoutstanding(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products where hot = 2 order by id desc limit 0,6");
			//lay tat ca cac ket qua tra ve
			return $query->fetchAll(PDO::FETCH_OBJ);
		}
		//liet ke 6 san pham thuoc danh muc
		public function productsInCategory(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products where discount != 0 order by id desc limit 0,6");
			//lay tat ca cac ket qua tra ve
			return $query->fetchAll(PDO::FETCH_OBJ);
		}
		public function categories(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from categories where id in (select category_id from products where categories.id=products.category_id) order by id desc");
			//lay tat ca cac ket qua tra ve
			return $query->fetchAll(PDO::FETCH_OBJ);
		}
	}
 ?>