<?php
require __DIR__.'/ChickenGame/Game.php';
require __DIR__.'/ChickenGame/Board.php';
require __DIR__.'/ChickenGame/Player.php';
require __DIR__.'/ChickenGame/Fox.php';
require __DIR__.'/ChickenGame/Chicken.php';

/**
 * 8 C
 * 7
 * 6
 * 5
 * 4
 * 3
 * 2
 * 1						 F
 *	 A B C D E F G H
 */

//error_reporting(-1);
//ini_set('display_errors', 'on');

use ChickenGame\Game;

//session_start();

$game = null;
if($_SESSION['chickengame']){
	//Try "loading" the game
	$game = unserialize($_SESSION['chickengame']);
}

if(!($game instanceof Game) || !$game->isSetup()){
	//Start new chicken game
	$game = new Game();
	$game->setup();
	$_SESSION['chickengame'] = serialize($game);
}

//Play
print "\n -------- \n Welcome to Fox Chicken Massacre 1.0 \n \n";

do {
	$game->run();
} while (!$game->isFinished());

die('fin');


if($game->isFinished()){
	unset($_SESSION['chickengame']);
}else{
	$_SESSION['chickengame'] = serialize($game);
}
