<?php 
 class HomeController extends Controller{
    public function __construct(){
        //kiem tra xem da dang nhap chua
        $this->authentication();
            // header("location:index.php?controller=login");
    }
    public function index(){
        // return view::make("HomeView.php");
        $this->loadView("HomeView.php");
    }
 }
 ?>