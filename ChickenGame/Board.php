<?php

namespace ChickenGame;

class Board {

	public function display($turn,Fox $fox, Chicken $chicken){
		header('Content-Type: text/plain');

		print "You are watching turn {$turn} \n";
		print date("d.m.Y H:i:s");

		$foxPos = $fox->getPos();
		print "Fuchs läuft auf {$foxPos[0]} {$foxPos[1]} \n";

	}

}