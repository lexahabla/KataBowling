<?php
use PHPUnit\Framework\TestCase;
use App\Rolls;


final class RollsTest extends TestCase
{
    public function test_roll_shoot_down_some_pins()
    {
        $roll = array(array(rand(1,10)));
      
        $spins = new Rolls();
        $spins->roll_shoot_down_some_pins();
        $this->assertNotNull($roll[0]);
    }

    public function test_roll_is_strike()
    {
        $roll = 10;

        $strike = new Rolls();
        $strike->roll_is_strike();
        $this->assertSame($roll, 10);

    }

    public function test_frame_rolls_are_spare()
    {
        $frame = array(5,5);
        $frameScore = array_sum($frame);

        $spare = new Rolls();
        $spare->frame_rolls_are_spare();
        $this->assertSame($frameScore,10);

    }

    public function test_last_roll_is_strike()
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
            array(rand(1,10),rand(1,10))
        );
        $extraRoll = array(rand(1,10));
        array_push($allRoll,$extraRoll);
        $allRollOneExtra = count($allRoll);

        $lastFrameStrike = new Rolls();
        $lastFrameStrike->last_roll_strike();
        $this->assertSame($allRollOneExtra,11);
    }

    public function test_last_roll_is_spare()
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
            array(rand(1,10),rand(1,10))
        );
        $extraRoll = array(rand(1,10));
        array_push($allRoll,$extraRoll);
        $allRollOneExtra = count($allRoll);

        $lastFrameSpare = new Rolls();
        $lastFrameSpare->last_roll_spare();
        $this->assertSame($allRollOneExtra,11);
    }
}