<?php

namespace ChickenGame;

class Board {

	public function display($turn,Fox $fox, Chicken $chicken){
		header('Content-Type: text/plain');

		print "\n===\nYou are watching turn {$turn} \t";
		print date("d.m.Y H:i:s");
		print "\n---\n";

		$foxPos = $fox->getPos();
		print "Fuchs läuft auf {$foxPos[0]} {$foxPos[1]} \n";

	}

}