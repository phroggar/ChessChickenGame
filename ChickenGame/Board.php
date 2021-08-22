<?php

namespace ChickenGame;

class Board {
	public function display($turn,Fox $fox, Chicken $chicken){
		header('Content-Type: text/plain');
		$turn = \sprintf("%'.02d",$turn);
		print "\nTurn {$turn} \t";
		$foxPos = $fox->getPos();
		print "Fuchs läuft auf {$foxPos[0]} {$foxPos[1]} \n";
	}
}