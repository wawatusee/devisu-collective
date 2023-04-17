<?php 
$singlePage=0;
require_once("../src/model/menus_model.php");
$titleWebSite=["Devisu","Collective", " "];
$menus=new MenusModel("../json/menus.json");
$menuRS=$menus->getMenu("RS_menu");
$pagesDuMenus=array();
 foreach($menus->getMenu("Main_menu") as $page){
     array_push($pagesDuMenus,$page->page) ;
 }
define('PAGE_ARRAY',$pagesDuMenus);