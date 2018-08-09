<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if ($_SERVER["REQUEST_METHOD"] == "POST") {    
    $date = $_POST["date"];
    if ($date === "0518") {
        include($_SERVER["DOCUMENT_ROOT"] . "/projectTHEM/journal/0518.html");
    } else if ($date === "0519") {
        include($_SERVER["DOCUMENT_ROOT"] . "/projectTHEM/journal/0519.html");
    } else if ($date === "0528") {
        include($_SERVER["DOCUMENT_ROOT"] . "/projectTHEM/journal/0528.html");
    } else if ($date === "0531") {
        include($_SERVER["DOCUMENT_ROOT"] . "/projectTHEM/journal/0531.html");
    }
}