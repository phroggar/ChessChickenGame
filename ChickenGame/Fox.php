<?php

namespace ChickenGame;

class Fox extends Player {


	public function targetChicken(Chicken $chicken){
		$myPos = $this->getPos();
		//Fuchs trödelt für 15 Schritte..
		if($this->startPos === $myPos){
			$nextPos = $this->getPosRight();
		}else{
			$nextPos = $this->getPosUp();
		}
		try {
			//Try UP as long as possible
			$this->setPos($nextPos[0], $nextPos[1]);
		}catch (\Exception $e){
			//Go left when UP would step from the board
			$nextPos = $this->getPosLeft();
			try {
				$this->setPos($nextPos[0], $nextPos[1]);
			} catch (\Exception $e){//Should not happen for now.. but will later in more dynamic version
				print "Fox has stepped from the board :(";
			}
		}
	}

}