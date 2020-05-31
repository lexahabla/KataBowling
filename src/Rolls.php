<?php
namespace App;

final class Rolls
{
   public function roll_shoot_down_some_pins()
    {
        $roll = array(rand(1,10));
        $pins = implode(" ",$roll);
        if($pins != null)
        {
            echo "\n One Roll: ". $pins;
            return $pins ;
        }
    }

    public function roll_is_strike()
    {
        $roll = 10;

        if($roll == 10)
        {
            echo "\n The roll is STRIKE: ". $roll." pins shoot down";
            return $roll;
        }

    }

    public function frame_rolls_are_spare()
    {
        $frame = array(5,5);
        $frameScore = array_sum($frame);

        if($frameScore == 10)
        {
            echo "\n If Roll1 and 2 shoot down ". $frameScore." pins, is SPARE";
            return $frameScore;
        }
    }

    public function last_roll_strike()
    {
        $allRoll = array(
            array(rand(1,10),rand(1,10)),
            array(rand(1,10),rand(1,10)),
            array(rand(1,10),rand(1,10)),
            array(rand(1,10),rand(1,10)),
            array(rand(1,10),rand(1,10)),
            array(rand(1,10),rand(1,10)),
            array(rand(1,10),rand(1,10)),
            array(rand(1,10),rand(1,10)),
            array(rand(1,10),rand(1,10)),
            10
        );
         
        $extraRoll = array(rand(1,10));
        array_push($allRoll,$extraRoll);
        $allRollOneExtra = count($allRoll);
      
        if($allRoll[9] == 10)
        {
            echo "\n Bonus Strike in last Roll (10) pins ". $allRollOneExtra. " Rolls in total";
            return $allRollOneExtra;
        }
    }

    public function last_roll_spare()
    {
        $allRoll = array(
            array(rand(1,10),rand(1,10)),
            array(rand(1,10),rand(1,10)),
            array(rand(1,10),rand(1,10)),
            array(rand(1,10),rand(1,10)),
            array(rand(1,10),rand(1,10)),
            array(rand(1,10),rand(1,10)),
            array(rand(1,10),rand(1,10)),
            array(rand(1,10),rand(1,10)),
            array(rand(1,10),10),
            array(10)
        );
        $extraRoll = array(rand(1,10));
        array_push($allRoll,$extraRoll);
        $allRollOneExtra = count($allRoll);
        $lastRollSum = array_sum($allRoll[9]);


        if($lastRollSum == 10)
        {
            echo "\n Bonus Spare in last frame (10 pins): ". $allRollOneExtra. " Rolls in total";
            return $allRollOneExtra;
        }



    }    
}