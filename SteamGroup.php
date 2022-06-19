<?php
$steamXML = simplexml_load_file("https://steamcommunity.com/groups/urautist/memberslistxml/?xml=1");

$steamID64 = 76561198448431038;

function checkID($group, $ID) {
    foreach ($group->members->steamID64 as $currentID) {
        if ($ID == $currentID) {
           return json_encode(['isInSteamGroup' => true]);
        } 
    }  
    return json_encode(['isInSteamGroup' => false]);
}

echo checkID($steamXML, $steamID64);
