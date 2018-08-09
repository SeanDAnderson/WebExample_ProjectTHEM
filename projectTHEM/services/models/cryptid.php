<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Cryptid implements JsonSerializable{
    
    private $id = '';
    private $username = '';
    private $creature = '';
    private $location = '';
    private $evidence = '';
    
    public function __construct($id, $username, $creature, $location, $evidence){
        
        $this->id=$id;
        $this->username=$username;
        $this->creature=$creature;
        $this->location=$location;
        $this->evidence=$evidence;
               
    }
    
    public function jsonSerialize(){
        
        return[
        'id'=> $this->id,
        'username'=>$this->username,
        'creature'=>$this->creature,
        'location'=>$this->location,
        'evidence'=>$this->evidence
        ];
        
    }
    
}