<?php
$steamXML = simplexml_load_file("https://steamcommunity.com/groups/urautist/memberslistxml/?xml=1");

$steamID64;

if (is_numeric($_GET['steamID'])){
    $steamID64 = $_GET['steamID'];
}

function checkID($group, $ID) {
    foreach ($group->members->steamID64 as $currentID) {
        if ($ID == $currentID) {
           return json_encode(['inGroup' => true]);
        } 
    }  
    return json_encode(['inGroup' => false]);
}

echo checkID($steamXML, $steamID64);
