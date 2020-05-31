<?php
namespace App;


class Players
{
   
    
    public function make_player1()
    {
        $this->player1=true;
    }
 
    public function make_player2()
    {
        $this->player2=true;
    }

    public function player1_name()
    {
        $name1 = 'NickName1';
        $this->name1 = $name1;
        echo "\n Player 1 name is ".$name1;
    }
    public function player2_name()
    {
        $name2 = 'NickName2';
        $this->name2 = $name2;
        echo "\n Player 1 name is ".$name2;
    }
 
    public function players_make_roll1()
    {
        $roll1 = rand(0,10);
        
       if( $roll1 !=null)
       {
        echo "\n Players make first roll ".$roll1. " pins shot down";
           return $roll1;
       }
       
    }
    public function players_make_roll2()
    {
        $roll2 = rand(0,10);

       if($roll2 !=null)
       {
        echo "\n Players make second roll ".$roll2. " pins shot down";
           return $roll2;
       }   
    }
    public function players_complete_one_frame()
    {
      $framePlayers = array();
      $roll1 = rand(0,10);
      $roll2 = rand(0,10);
      array_push($framePlayers, $roll1, $roll2);
      $completeFrame = count($framePlayers);

      if($completeFrame[0] == 2)
      {
        echo "\n Players complete one Frame ".$completeFrame. " Rolls for each Frame";
          return $completeFrame;
      }

    }

    public function players_complete_all_frames()
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
      if($completeFrame == 10)
      {
        echo "\n Players complete all Frames ".$completeFrame. " Rolls for each Frame";
          return $completeFrame;
      }

    }
 




    

}
