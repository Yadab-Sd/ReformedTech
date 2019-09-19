<?php
	// Defined the class
	class ReformedTech {
		public $mulThree = "Reformed";
		public $mulFive = "Tech";

		public function Print(){

			for( $i = 1; $i <= 100; $i++ ){

				if($i%3==0){
					echo ($i%5==0) ? ($this->mulThree.$this->mulFive):($this->mulThree);
					echo "\n";
				}
				else if($i%5==0){
					echo ($this->mulFive);
					echo "\n";
				}
				else{
					echo $i."\n";
				}
			}

		}

		public function __construct( $mul3, $mul5 ){
			$this->mulThree = $mul3;
			$this->mulFive = $mul5;
			$this->Print();
		}

	}

	
	// Constructing object of that  class to call
	$obj = new ReformedTech("Reformed", "Tech"); // parameter 1 : will show instead 3's multiplied
																								 // parameter 2 : will show instead 5's multiplied

?>
