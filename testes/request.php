<?php
    class Request{
        public $request;

        function __construct($request)
        {
            $this->request=$request;
        }

        public function key($value)
        {
            return $this->request[$value]; 
        }

        public function post($value)
        {
            return $this->request[$value]; 
        }

        public function get($value)
        {
            return $this->request[$value]; 
        }
    }

