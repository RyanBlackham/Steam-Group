<?php

$steam = file_get_contents("https://steamcommunity.com/groups/urautist/memberslistxml/?xml=1");

$steamXML = simplexml_load_file("https://steamcommunity.com/groups/urautist/memberslistxml/?xml=1");

$truesteamID64 = 76561198994541929;
$falsesteamID64 = 63436426428974686;

$steamString = simplexml_load_string($steamXML);

$memberList = new SimpleXMLElement($steam);

echo $memberList->members->steam64ID;

//foreach ($steamXML->members->steamID64 as $ID){
//}

//json_decode(json_encode($steamString), true);
