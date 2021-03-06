<?php
    
    
    namespace App\Repositories;


    abstract class Request
    {
        public function __get($property)
        {
            return $this->$property;
        }
    
        public function __set($property, $value)
        {
            return $this->$property = $value;
        }
    }
