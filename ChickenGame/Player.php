<?php

namespace ChickenGame;

class Player {

	protected array $startPos = [];
	protected array $pos = [];

	protected array $posX;
	protected array $posY;

	public function __construct(){
		$this->posX = \range('A', 'H');
		$this->posY = \range(1, 8);
	}

	public function setStartPos(string $letter, int $number){
		$this->setPos($letter, $number);
		$this->startPos = [$letter,$number];
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

	public function getPosUp(){
		return [$this->pos[0],$this->pos[1]+1];
	}
	public function getPosDown(){
		return [$this->pos[0],$this->pos[1]-1];
	}
	public function getPosRight(){
		$curPosX = \array_search($this->pos[0], $this->posX);
		return [$this->posX[$curPosX+1],$this->pos[1]];
	}
	public function getPosLeft(){
		$curPosX = \array_search($this->pos[0], $this->posX);
		return [$this->posX[$curPosX-1],$this->pos[1]];
	}
}