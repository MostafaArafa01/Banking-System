<?php

    class TransactionsInfo{
        private int $from;
        private int $to;
        private float $amount;

        public function __construct(int $from, int $to, float $amount){
            $this -> from = $from;
            $this -> to = $to;
            $this -> amount = $amount;
        }

        public function getFrom(){
            return $this -> from;
        }
        public function setFrom(int $from){
            $this -> from = $from;
        }

        public function getTo(){
            return $this -> to;
        }
        public function setTo(int $to){
            $this -> to = $to;
        }

        public function getAmount(){
            return $this -> amount;
        }
        public function setAmount(int $amount){
            $this -> amount = $amount;
        }


    }