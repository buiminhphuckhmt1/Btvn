<?php 
	//include file HomeModel.php
	class GioithieuController extends Controller{
		//ke thua class HomeModel
		public function index(){
			$this->loadView("GioithieuView.php");
		}
    }