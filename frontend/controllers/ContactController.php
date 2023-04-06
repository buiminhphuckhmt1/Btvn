<?php 
	//include file HomeModel.php
	include "models/ContactModel.php";
	class ContactController extends Controller{
		//ke thua class HomeModel
		use ContactModel;
		public function index(){
			$this->loadView("ContactView.php");
		}
			public function create(){
				//tao bien $action de gan vao thuoc tinh action cua the form
				$action = "index.php?controller=users&action=creatcontact";
			}
		public function creatcontact(){
			$this->modelcontact();
			//quay tro lai trang user
			header("location:index.php?controller=contact");
		}
	}
 ?>