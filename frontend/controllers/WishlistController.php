<?php 
	include "models/WishlistModel.php";
	class WishlistController extends Controller{
		use WishlistModel;
		//hàm tạo sử dụng để kiểm tra và khởi tạo giỏ hàng
		public function __construct(){
			//kiểm tra nếu giỏ hàng chưa tồn tại thì khởi tạo nó
			if(isset($_SESSION['wishlist']) == false)
				$_SESSION['wishlist'] = array();
		}
		//hiển thị danh sách giỏ hàng
		public function index(){
			$this->loadView("WishlistView.php");
		}
		//thêm sản phẩm vào giỏ hàng
		public function create(){
			$id = isset($_GET['id']) ? $_GET['id'] : 0;
			//gọi hàm trong wishlistModel để thêm phần tử vào giỏ hàng
			$this->wishlistAdd($id);
			//quay lại trang giỏ hàng
			header("location:index.php?controller=wishlist");
		}
		//xóa sản phẩm khỏi giỏ hàng
		public function remove(){
			$id = isset($_GET['id']) ? $_GET['id'] : 0;
			//gọi hàm trong wishlistModel để xóa phần tử khỏi giỏ hàng
			$this->wishlistDelete($id);
			//quay lại trang giỏ hàng
			header("location:index.php?controller=wishlist");
		}
		//cập nhật số lượng sản phẩm trong giỏ hàng
		public function update(){
			foreach ($_SESSION['wishlist'] as $product) {
				$name = "product_".$product["id"];
				$number = $_POST[$name];
				$this->wishlistUpdate($product["id"],$number);
			}
			//quay lại trang giỏ hàng
			header("location:index.php?controller=wishlist");
		}
		//xóa toàn bộ sản phẩm khỏi giỏ hàng
		public function destroy(){
			//gọi hàm trong wishlistModel để xóa giỏ hàng
			$this->wishlistDestroy();
			//quay lại trang giỏ hàng
			header("location:index.php?controller=wishlist");
		}
		//thanh toán giỏ hàng
	}
 ?>