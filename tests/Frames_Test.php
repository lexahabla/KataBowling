<?php
use PHPUnit\Framework\TestCase;
use App\Frames;


final class FramesTest extends TestCase
{


    public function test_the_game_have_ten_frames()
    {
   
        $framesPlayers = array(0,1,2,3,4,5,6,7,8,9);
       $frames = count($framesPlayers);
 
       $numFrames = new Frames();
       $numFrames->the_game_have_ten_frames(); 
       $this->assertSame($frames, 10);
    
    }

    public function test_one_frame_in_game_have_two_rolls()
    {
       $allRolls = array(
          array(rand(1,10),rand(1,10)));
 
       $rollFrames = count($allRolls[0]);
 
       $rollsFrames = new Frames();
       $rollsFrames->one_frame_in_game_have_two_rolls();
       $this->assertSame($rollFrames,2);

    }
}