<?php
	trait WishlistModel{		
		public function wishlistAdd($id){
		    if(isset($_SESSION['wishlist'][$id])){
		        //nếu đã có sp trong giỏ hàng thì số lượng lên 1
		        $_SESSION['wishlist'][$id]['number']++;
		    } else {
		        //lấy thông tin sản phẩm từ CSDL và lưu vào giỏ hàng
		        //---
		        //PDO
		        $conn = Connection::getInstance();
		        $query = $conn->prepare("select * from products where id=:id");
		        $query->execute(array("id"=>$id));
		        $query->setFetchMode(PDO::FETCH_OBJ);
		        $product = $query->fetch();
		        //---
		        
		        $_SESSION['wishlist'][$id] = array(
		            'id' => $id,
		            'name' => $product->name,
		            'photo' => $product->photo,
		            'number' => 1,
		            'price' => $product->price,
		            'discount' => $product->discount
		        );
		    }
		}
		public function wishlistAddWithNumber($id,$quantity){
		    if(isset($_SESSION['wishlist'][$id])){
		        //nếu đã có sp trong giỏ hàng thì số lượng lên 1
		        $_SESSION['wishlist'][$id]['number'] += $quantity;
		    } else {
		        //lấy thông tin sản phẩm từ CSDL và lưu vào giỏ hàng
		        //$product = db::get_one("select * from products where id=$id");
		        //---
		        //PDO
		        $conn = Connection::getInstance();
		        $query = $conn->prepare("select * from products where id=:id");
		        $query->execute(array("id"=>$id));
		        $query->setFetchMode(PDO::FETCH_OBJ);
		        $product = $query->fetch();
		        //---
		        
		        $_SESSION['wishlist'][$id] = array(
		            'id' => $id,
		            'name' => $product->name,
		            'photo' => $product->photo,
		            'number' => $quantity,
		            'price' => $product->price,
		            'discount' => $product->discount
		        );
		    }
		}
		/**
		 * Cập nhật số lượng sản phẩm
		 * @param int
		 * @param int
		 */
		public function wishlistUpdate($id, $number){
		    if($number==0){
		        //xóa sp ra khỏi giỏ hàng
		        unset($_SESSION['wishlist'][$id]);
		    } else {
		        $_SESSION['wishlist'][$id]['number'] = $number;
		    }
		}
		/**
		 * Xóa sản phẩm ra khỏi giỏ hàng
		 * @param int
		 */
		public function wishlistDelete($id){
		    unset($_SESSION['wishlist'][$id]);
		}
		/**
		 * Tổng giá trị giỏ hàng
		 */
		public function wishlistTotal(){
		    $total = 0;
		    foreach($_SESSION['wishlist'] as $product){
		        $total += ($product['price']-$product['price']*$product['discount']/100) * $product['number'];
		    }
		    return $total;
		}
		/**
		 * Số sản phẩm có trong giỏ hàng
		 */
		public function wishlistNumber(){
		    $number = 0;
		    foreach($_SESSION['wishlist'] as $product){
		        $number += $product['number'];
		    }
		    return $number;
		}
		/**
		 * Danh sách sản phẩm trong giỏ hàng
		 */
		public function wishlistList(){
		    return $_SESSION['wishlist'];
		}
		/**
		 * Xóa giỏ hàng
		 */
		public function wishlistDestroy(){
		    $_SESSION['wishlist'] = array();
		}
		//=============
		//checkout
		public function wishlistCheckOut(){
			$conn = Connection::getInstance();			
			//lay id vua moi insert
			$customer_id = $_SESSION["customer_id"];
			//---
			//---
			//insert ban ghi vao orders, lay order_id vua moi insert
			//lay tong gia cua gio hang
			$price = $this->wishlistTotal();
			$query = $conn->prepare("insert into orders set customer_id=:customer_id, date=now(),price=:price");
			$query->execute(array("customer_id"=>$customer_id,"price"=>$price));
			//lay id vua moi insert
			$order_id = $conn->lastInsertId();
			//---
			//duyet cac ban ghi trong session array de insert vao orderdetails
			foreach($_SESSION["wishlist"] as $product){
				$query = $conn->prepare("insert into orderdetails set order_id=:order_id, product_id=:product_id, price=:price, quantity=:quantity");
				$query->execute(array("order_id"=>$order_id,"product_id"=>$product["id"],"price"=>$product["price"],"quantity"=>$product["number"]));
			}
			//xoa gio hang
			unset($_SESSION["wishlist"]);
		}
		//=============
	}	
?>