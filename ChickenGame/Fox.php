<?php

namespace ChickenGame;

class Fox extends Player {


	public function targetChicken(Chicken $chicken){

		$chickenPos = $chicken->getPos();
		$myPos = $this->getPos();

		//Fuchs trödelt für 15 Schritte..
		if($myPos[0] === 'G' && $myPos[1] === '1'){
			return $this->setPos('H', 1);
		}

		//Regular moves...
		// theoory.. 2.0 $this->calcDistance($chicken, $this);

		$letters = \range('A', 'H');

		$next = $myPos[1]+1;
		try {
			$this->setPos($myPos[0], $next);
		}catch (\Exception $e){
			$cur = \array_search($myPos[0], $letters);
			$this->setPos($letters[--$cur], $myPos[1]);
		}
	}

}