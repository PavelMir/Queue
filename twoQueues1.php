<?php
class Queue{
    public $arr = [];

    public function push($s) {
        $this->arr[] = $s;
    }    
	
	public function push1($s) {		
        array_unshift($this->arr, $s);		
    } 

    public function shift() {
		if(empty($this->arr)){
		echo "Empty";
		exit;
		}
		else{return array_shift($this->arr);}
    }

}

$obj=new Queue;
$obj2=new Queue;

$obj->push(1);
$obj->push(2);
$obj->push(3);
$obj->push(4);

$obj2->push1($obj->shift());
$obj2->push1($obj->shift());
$obj2->push1($obj->shift());
$obj2->push1($obj->shift());

//var_dump($obj2->arr);	

var_dump($obj2->shift());
var_dump($obj2->shift());
var_dump($obj2->shift());
var_dump($obj2->shift());