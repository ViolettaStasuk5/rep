<?php
namespace App\Http\Controllers; 
use App\Http\Controllers\Controller;
class TestController extends Controller
{
    public function show($param1, $param2){
        return $param1. ''. $param2;
    }
    public function ShowProduct() {
        $p=\App\Models\product::All();
        return $p[1]->name;
    }
    public function ShowOne($id) {
        $p=\App\Models\product::find($id);
        return $p->price;
    }
}