<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if ($_SERVER['REQUEST_METHOD']=='GET'){
    
    include './models/cryptid.php';
    
    $cryptids = [];
    
    $cryptids[] = new Cryptid('0', 'YetiBoy2', 'Oklahoma Skunk Ape',
            'I-35 near teh Texas Border', 'none');
    $cryptids[] = new Cryptid('1', 'WhatDoesTheMulderSay', 'Grey Alien',
            'Spaceship, Lower Ionosphere over Miami', 'Clover shaped scar on shoulder');
    $cryptids[] = new Cryptid('2', 'CherryPie2Die4', 'Ghost', 'Roadside Diner, Twin Peaks, Washington',
            'Clues to a murder');
    
    if(isset($_GET['id'])){
        //Return one cryptid
        $id=intval($_GET['id']);
        
        if(count($cryptids)>$id){
            //return cryptid
            http_response_code(200);
            header("Content-Type: application/json");
            echo json_encode($cryptids[$id]);
            exit;
        } else {
            //return 404 error
            include './models/error.php';
            
            http_response_code(404);
            header("COntent-Type: application/json");
            $error = new ErrorCust('Cryptid not found', 404);
            echo json_encode($error);
            exit;
        }
        
    } else {
       //Return all cryptids
        http_response_code(200);
        header("Content-Type:application/json");
        echo json_encode($cryptids);
        exit();
    }
    
} else {
    include './projectTHEM/models/error.php';
    
    http_response_code(400);
    header("Content-Type: application/json");
    $error= new ErrorCust('Bad cryptid request', 400);
    echo json_encode($error);
    exit();
}