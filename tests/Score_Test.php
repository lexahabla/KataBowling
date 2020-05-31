<?php
use PHPUnit\Framework\TestCase;
use App\Score;


final class ScoreTest extends TestCase
{

    public function test_add_score_every_frame()
    {
        $frameRoll = array(rand(0,10),rand(0,10));
        $scoreFrame = array_sum($frameRoll);
        
        $rollScore = new Score();
        $rollScore->add_score_every_frame();
        $this->assertNotNull($scoreFrame);

    }

    public function test_add_score_all_frames()
    {
        $rollsFrames = array(
            array(rand(0,10),rand(0,10)),array(rand(0,10),rand(0,10)),
            array(rand(0,10),rand(0,10)),array(rand(0,10),rand(0,10)),
            array(rand(0,10),rand(0,10)),array(rand(0,10),rand(0,10)),
            array(rand(0,10),rand(0,10)),array(rand(0,10),rand(0,10)),
            array(rand(0,10),rand(0,10)),array(rand(0,10),rand(0,10)),
        );

        $newArray = call_user_func_array('array_merge', $rollsFrames);
        $scoreFrames = array_sum($newArray);

        $totalScore = new Score();
        $totalScore->add_score_all_frames();
        $this->assertNotNull($scoreFrames);


    }

}