<?php
namespace App;

final class Frames
{
    public function the_game_have_ten_frames()
    {
        $framesPlayers = array(0,1,2,3,4,5,6,7,8,9);
        $frames = count($framesPlayers);
        // var_dump($player1);
        echo "\n The Game have ". $frames. " Frames";
        return $frames;
    }

   public function one_frame_in_game_have_two_rolls()
   {
    $allRolls = array(array(rand(1,10),rand(1,10)));

     $rollFrames = count($allRolls[0]);
    //  print($rollFrames);
    echo "\n Every frame have ".$rollFrames. " Rolls";
     return $rollFrames;
   }
}