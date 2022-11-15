<?php
namespace App\Http\Controllers; 
use App\Http\Controllers\Controller;
class EmployeeController extends Controller
{
	private $employees;
	public function __construct(){
		$this->employees=[
			1=>[
				'name'=>'user1',
				'surname'=>'surname1',
				'salary'=>1000,
			],
			2=>[
				'name'=>'user2',
				'surname'=>'surname2',
				'salary'=>2000,
			],
			3=>[
				'name'=>'user3',
				'surname'=>'surname3',
				'salary'=>3000,
			],
			4=>[
				'name'=>'user4',
				'surname'=>'surname4',
				'salary'=>5000,
			],
		];
	}

	public function showOne($param1){
		//dd($this->employees);
				return $this->employees[$param1];
	}

	public function showField($param1,$param2){
		return $this->employees[$param1][$param2];	}
}