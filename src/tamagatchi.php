<?php

    class Tamagatchi
    {
      private $hunger;
      private $tiredness;
      private $fun;
      private $affection;
      private $timer;

      function __construct()
      {
        $this->hunger = 100;
        $this->tiredness = 100;
        $this->fun = 100;
        $this->affection = 0;
        $this->timer= 100;
      }

      function getHunger()
      {
        return $this->hunger;
      }

      function setHunger($hunger)
      {
        $this->hunger=$hunger;
      }

      function getTiredness()
      {
        return $this->tiredness;
      }

      function setTiredness($tiredness)
      {
        $this->tiredness=$tiredness;
      }

      function getFun()
      {
        return $this->fun;
      }

      function setFun($fun)
      {
        $this->fun=$fun;
      }

      function getAffection()
      {
        return $this->affection;
      }

      function setAffection($affection)
      {
        $this->affection=$affection;
      }

      function getTimer()
      {
        return $this->timer;
      }

      function setTimer()
      {
        $this->timer=time();
      }

      function timeRemaining()
      {
          return time() - $this->timer;
      }

      function timeDecay()
      {
          if (timeRemaining() < 100) {
            return 'alive';
          } else if (timeRemaining() >= 100 ) {
            return 'dead';
          }
      }

      static function save()
      {
          array_push($_SESSION['tamagatchi_array'], $this);
      }


      // static function timer ()
      // {
      //     we don't know how to do this yet -- send help
      // }

    }



 ?>
