<?php 
namespace App\Http\Controllers; 
use App\Http\Controllers\Controller; 
class Controllers1 extends Controller
{ 
		public function show() { 
				//return view ('test', ['var1'=>'1', 'var2'=>'2']); 
				//return view ('test', ['name'=>'Иван', 'surname'=>'Иванов']);
			//return view ('test', ['name'=>'name', 'age'=>'20', 'salary'=>'30000']);
			return view ('test', ['text'=>'Яндекс ру', 'href'=>'http://ya.ru']);
} 
/*public function yaru() {
	return view ('controllers1.test', ['text'=>'Яндекс ру', 'href'=>'http://ya.ru']);
}*/
/*public fuction data(){
	return view('controllers1.test', ['day'=>'27', 'month'=>'october', 'year'=>'2022']);
}*/
public function array() {
	return view('controllers1.test', ['arr'=>['name' => 'Иван', 'age'=> 20, 'salary'=> 20000]]);
}
public function city() {
	return view('controllers1.test', ['city'=>'Омск']);
	
}
}
