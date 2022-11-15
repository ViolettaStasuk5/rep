<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
class PageController extends Controller
{
    public function showOne($id){
        $pages=[1=>'страница 1', 2=>'страница 2', 3=>'страница 3', 4=>'страница 4', 5=>'страница 5'];
        		 
        		if ($id>5){
        			return 'Страницы с таким номером нет';
        		}
        		else {
        			return $pages[$id];
        		}
        	
    }

    public function showAll(){
        return '123';
    }
}