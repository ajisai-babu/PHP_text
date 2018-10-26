<?php
class Computer{
	private $_name;
	private $_cpu;
	const SYSTEM = 'NT';
	public function _run(){
		echo "我是Acer";
	}

	//public function setName($_name){
	//	$this->_name = $_name;
	//}

	//public function getName(){
	//	return $this->_name;
	//}

	public function __set($_key,$_value){
		$this->$_key=$_value;
	}

	public function __get($_key){
		return $this->$_key;
	}
}

class NoteComputer extends Computer{
	public function _run(){
		echo "我是NoteComputer";
	}
}

$computer1 = new Computer();
$computer1->__set('_name','Acer');
echo $computer1->__get('_name');
$computer1->_cpu = 'i7';
echo $computer1->_cpu;
echo Computer::SYSTEM;
$computer1->_run();
//$computer1->setName("Acer");
//echo	$computer1->getName();
$computer2 = new NoteComputer();
echo NoteComputer::SYSTEM;
$computer2->_run();

?>