<?
/*
abstract class Auto {

	public $name;
	protected $seats;
	protected $color;
	protected $volume;
	protected $year;
	protected $typeDrive;

	//общие свойства BMW и Audi
	public $time;
	protected $engine;
}

class Bmw extends Auto {

	public function __construct($name) {

		$this -> name = $name;
	}

	public function setTime($time) {

		$this -> time = $time;
	}

	public function get() {

		echo $this -> name;
		echo "<br>" . $this -> time;

	}

}

class Audi extends Auto {

	public function __construct($name) {

		$this -> name = $name;

	}

	public function setTime($time) {

		$this -> time = $time;

	}

	public function setType($type) {

		$this -> typeDrive = $type;
	}

	public function get() {
		echo $this -> name;
		echo "<br>" . $this -> time;
		echo "<br>" . $this -> typeDrive;

	}

}

class Race {
	private $speedAudi;
	private $speedBmw;

	function __construct($audi, $bmw) {

		// var_dump(is_object($audi));
		// print_r($audi);

		$this -> speedAudi = $audi;
		$this -> speedBmw = $bmw;
	}

	function go() {

		$arrayAudi = (array)$this -> speedAudi;
		$arrayBmw = (array)$this -> speedBmw;

		if ($arrayAudi['time'] > $arrayBmw['time']) {
			echo $arrayBmw['name'];

		}if ($arrayBmw['time'] > $arrayAudi['time']) {
			echo $arrayAudi['name'];
		}
	}

}

//MAIN 


$bmw = new Bmw("BMW X5");
$bmw -> setTime(4.5);
//$bmw -> get();

//экземпляр класса Audi
$audi = new Audi("Audi A6");
$audi -> setTime(4.33);
$audi -> setType("4WD");
//$audi -> get();

//Race
$race = new Race($audi, $bmw);
$race -> go();
echo '<br>';
*/

require_once('setup.php');

$title = "Test";

$smarty = new Smarty();

$smarty -> assign('title', $title);


$smarty -> display('index.tpl');

$code = $_POST['code'];
$rate = $_POST['rate'];
$commission = $_POST['commission'];
$product = $_POST['product'];
$status = $_POST['status'];


var_dump($code, $rate, $commission, $product,  $status); //удабно было бы массивом

//Дальше все просто... отправляем в базу
				
?>