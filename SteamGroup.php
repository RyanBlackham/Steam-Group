<?php
$steamXML = simplexml_load_file("https://steamcommunity.com/groups/urautist/memberslistxml/?xml=1");

function checkID($group) {
    
    if (is_numeric($_GET['steamID'])){
        $ID = $_GET['steamID'];
    } else {
        return json_encode(['inGroup' => false, 'success' => false]);
    }

    foreach ($group->members->steamID64 as $currentID) {
        if ($ID == $currentID) {
           return json_encode(['inGroup' => true, 'success' => true],);
        } 
    }  
    return json_encode(['inGroup' => false, 'success' => true]);
}

echo checkID($steamXML);
