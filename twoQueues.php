<?php
class Queue{

    public $arr = [];
    public function push($s) {
        $this->arr[] = $s;
    }    

    public function shift() {
		if(empty($this->arr)){
		echo "Empty";
		exit;
		}
		else{return array_shift($this->arr);}
    }
}

class SecondQueue{
	public $arr=[];
	public function push($s) {		
        array_unshift($this->arr, $s);		
    }    

    public function shift() {
		if(empty($this->arr)){
		exit;}
		else{return array_shift($this->arr);}
    }
	
}
$obj=new Queue;
$obj2=new SecondQueue;

$obj->push(1);
$obj->push(2);
$obj->push(3);

$obj2->push($obj->shift());
$obj2->push($obj->shift());
$obj2->push($obj->shift());

//var_dump($obj2->arr);	

var_dump($obj2->shift());
var_dump($obj2->shift());
var_dump($obj2->shift());
