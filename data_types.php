<?php
/**
 * Created by PhpStorm.
 * User: auremill
 * Date: 6/23/2015
 * Time: 7:21 PM
 */

class GameCharacter {
    public $name;
    public $level;
    public $health;
    public $magicPoints;

    function __construct($name, $level, $health, $points) {
        $this->name = $name;
        $this->level = $level;
        $this->health = $health;
        $this->magicPoints = $points;

    }

    function is_dead() {
        if ($this -> health == 0){
            return 'dead';
        }else {
            return 'not dead';
        }
    }
    function con_cast($requiredPoints) {/* your code */}
}


$player = new GameCharacter("Narder Arrer", 20, 15, 30);
echo $player->name . "<br>";
echo $player->level . "<br>";

$player2 = new GameCharacter("Master Chief", 999, 0, 10);
echo $player2->name . "<br>";
echo $player2->level . "<br>";

$player = $player2;

echo $player->name . "<br>";
echo $player->level . "<br>";

echo $player->is_dead() . "<br>";
echo $player->








?>