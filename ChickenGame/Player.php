<?php

namespace ChickenGame;

class Player {

	protected array $pos = [];

	protected array $posX;
	protected array $posY;

	public function __construct(){
		$this->posX = \range('A', 'H');
		$this->posY = \range(1, 8);
	}

	public function setStartPos(string $letter, int $number){
		$this->setPos($letter, $number);
	}

	public function setPos($letter, $number){
		if(!\in_array($letter, $this->posX) || !\in_array($number, $this->posY)){
			throw new \OutOfRangeException("Stupid Player ! - You are DEAD");
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