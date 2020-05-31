<?php
use PHPUnit\Framework\TestCase;
use App\Players;

final class PlayersTest extends TestCase
{

    public function test_make_player1()
    {
       $player1 = new Players();
       $makePlayer1 = $player1->make_player1();
       $this->assertTrue($player1->player1);
    }

    public function test_make_player2()
    {
       $player2 = new Players();
       $makePlayer2 = $player2->make_player2();
       $this->assertTrue($player2->player2);

    }

    public function test_player1_name()
    {
      $name1 = 'NickName1';
      $playerName1 = new Players();
      $playerName1->player1_name();
      $this->assertNotNull($playerName1->name1);
    }
    public function test_player2_name()
    {
       $name2 = 'NickName2';
       $playerName2 = new Players();
       $playerName2->player2_name();
       $this->assertNotNull($playerName2->name2);

    }
    public function test_players_make_roll1()
    {
      $roll1 = rand(0,10);

      $playesRoll1 = new Players();
      $playesRoll1->players_make_roll1();
      $this->assertNotNull($roll1);
    }

    public function test_players_make_roll2()
    {
      $roll2 = rand(0,10);

      $playesRoll2 = new Players();
      $playesRoll2->players_make_roll2();
      $this->assertNotNull($roll2);
    }

    public function test_players_complete_one_frame()
    {
      $framePlayers = array();
      $roll1 = rand(0,10);
      $roll2 = rand(0,10);
      array_push($framePlayers, $roll1, $roll2);
      $completeFrame = count($framePlayers);

      $playersFrame1 = new Players();
      $playersFrame1->players_complete_one_frame();
      $this->assertSame($completeFrame, 2);
    }

    public function test_players_complete_all_frames()
    {
      $framesPlayer = array();
      $frame1 = array(rand(0,10),rand(0,10));
      $frame2 = array(rand(0,10),rand(0,10));
      $frame3 = array(rand(0,10),rand(0,10));
      $frame4 = array(rand(0,10),rand(0,10));
      $frame5 = array(rand(0,10),rand(0,10));
      $frame6 = array(rand(0,10),rand(0,10));
      $frame7 = array(rand(0,10),rand(0,10));
      $frame8 = array(rand(0,10),rand(0,10));
      $frame9 = array(rand(0,10),rand(0,10));
      $frame10 = array(rand(0,10),rand(0,10));
     
      array_push($framesPlayer, $frame1, $frame2, $frame3, $frame4, $frame5, $frame6, $frame7, $frame8, $frame9, $frame10);
      $completeFrame = count($framesPlayer);

      $playersAllFrames = new Players();
      $playersAllFrames->players_complete_all_frames();
      $this->assertSame($completeFrame, 10);

    }







}