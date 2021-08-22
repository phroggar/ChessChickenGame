<?php

namespace ChickenGame;

class Player {

	protected array $pos = [];

	public function setStartPos(string $letter, int $number){
		$this->setPos($letter, $number);
	}

	public function setPos($letter, $number){
		if($letter > 'H' || $number > 8 || $number < 1 || $letter < 'A'){
			print_r([$letter,$number]);die('f');
			//throw new \Exception("Stupid Player ! - You are DEAD");
		}
		$this->pos = [$letter,$number];
	}

	/**
	 * @return array
	 */
	public function getPos(): array {
		return $this->pos;
	}

	/**
	 *
	 * @param Player $player1
	 * @param Player $player2
	 *
	 * @return int
	 */
	public function calcDistance(Player $player1, Player $player2){
		// a² + b² = c²
		return 1;
	}
}