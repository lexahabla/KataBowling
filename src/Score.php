<?php
namespace App;

final class Score
{


    public function add_score_every_frame()
    {
        $frameRoll = array(rand(0,10),rand(0,10));
        $scoreFrame = array_sum($frameRoll);
        
            echo "\n Score one Frame: ". $scoreFrame;
            return $scoreFrame;
    }

    public function add_score_all_frames()
    {
        $rollsFrames = array(
            array(rand(0,10),rand(0,10)),array(rand(0,10),rand(0,10)),
            array(rand(0,10),rand(0,10)),array(rand(0,10),rand(0,10)),
            array(rand(0,10),rand(0,10)),array(rand(0,10),rand(0,10)),
            array(rand(0,10),rand(0,10)),array(rand(0,10),rand(0,10)),
            array(rand(0,10),rand(0,10)),array(rand(0,10),rand(0,10)),
        );  
        $mergeArray = call_user_func_array('array_merge', $rollsFrames);
        $scoreFrames = array_sum($mergeArray);
           
        echo "\n Score all Frames: ".$scoreFrames;
        return $scoreFrames;
           
        

    }
}
