<?php 
namespace App\Http\Controllers; 
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB; 
class Controllers1 extends Controller
{ 
		/*public function show() { 
				//return view ('test', ['var1'=>'1', 'var2'=>'2']); 
				//return view ('test', ['name'=>'Иван', 'surname'=>'Иванов']);
			//return view ('test', ['name'=>'name', 'age'=>'20', 'salary'=>'30000']);
			return view ('test', ['text'=>'Яндекс ру', 'href'=>'http://ya.ru']);
} */
/*public function yaru() {
	return view ('controllers1.test', ['text'=>'Яндекс ру', 'href'=>'http://ya.ru']);
}*/
/*public fuction data(){
	return view('controllers1.test', ['day'=>'27', 'month'=>'october', 'year'=>'2022']);
}*/
/*public function array() {
	return view('controllers1.test', ['arr'=>['name' => 'Иван', 'age'=> 20, 'salary'=> 20000]]);
}
public function city() {
	return view('controllers1.test', ['city'=>'Омск']);
	
}*/
public function about_us(){
	return view ('controllers1.about_us');
    }
public function register(){
		return view('controllers1.register');
	}
public function auth(){
	return view('controllers1.auth');
}
public function where_can_I_find_us(){
	return view('controllers1.where_can_I_find_us');
}
public function catalog(){
	return view('controllers1.catalog');
}
public function product(){
	return view('controllers1.product');
}
public function catalog1(){
	$t=DB::table("comics")->get();
	return view("controllers1.catalog", ['arr'=>$t]);
}
}
