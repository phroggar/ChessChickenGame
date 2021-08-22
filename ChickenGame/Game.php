<?php

namespace ChickenGame;

class Game {

	protected $board;
	protected $fox;
	protected $chicken;

	private $turns = 0;

	/**
	 * Setup Board, Players..
	 */
	public function setup(){

		//Create Board
		$this->board = new Board();

		//Create Players
		$this->fox = new Fox();
		$this->chicken = new Chicken();

		$this->fox->setStartPos('G', 1);
		$this->chicken->setStartPos('A', 8);
	}

	/**
	 * Run the game
	 */
	public function run(){
		//
		$this->turns = $this->turns + 1;
		//Move Players

		$this->fox->targetChicken($this->chicken);

		//Display Board
		$this->board->display($this->turns,$this->fox,$this->chicken);

	}

	public function isSetup(): bool {
		return $this->board instanceof Board;
	}

	public function isFinished(): bool {
		return $this->turns >= 15 || $this->fox->getPos() == $this->chicken->getPos();
	}
}