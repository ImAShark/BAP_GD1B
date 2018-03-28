<?php
//Overwatch
$a[] = "Ana";
$a[] = "Brigitte";
$a[] = "Bastion";
$a[] = "D.va";
$a[] = "Doomfist";
$a[] = "Genji";
$a[] = "Hanzo";
$a[] = "Junkrat";
$a[] = "Lucio";
$a[] = "Mccree";
$a[] = "Mei";
$a[] = "Mercy";
$a[] = "Moira";
$a[] = "Orisa";
$a[] = "Phara";
$a[] = "Reaper";
$a[] = "Reinhardt";
$a[] = "Roadhog";
$a[] = "Soldier76";
$a[] = "50mbr@";
$a[] = "Symmetra";
$a[] = "Torbjorn";
$a[] = "Tracer";
$a[] = "Widowmaker";
$a[] = "Winston";
$a[] = "Zarya";
$a[] = "Zenyatta";

//Borderlands
$a[] = "Zer0";
$a[] = "Salvador";
$a[] = "Axton";
$a[] = "Maya";
$a[] = "Lilith";
$a[] = "Mordecai";
$a[] = "Krieg";
$a[] = "Gaige";
$a[] = "Roland";
$a[] = "Brick";
$a[] = "Bloodwing";
$a[] = "Handsome Jack";
$a[] = "Angel";
$a[] = "Mr.Torgue";
$a[] = "CL4P-TP";
$a[] = "Athena";
$a[] = "Wilhelm";
$a[] = "Nisha";
$a[] = "Aurelia";
$a[] = "Rhys";
$a[] = "Fiona";
$a[] = "Moxxi";
$a[] = "Sir Hammerlock";
$a[] = "Tiny Teena";
$a[] = "Marcus";
$a[] = "Dr.Zed";
$a[] = "Scooter";
$a[] = "Crazy Earl";
$a[] = "T.K. Baha";
$a[] = "Ellie";
$a[] = "Butt Stalion";
$a[] = "Dr.Ned";
$a[] = "General Knoxx";

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= "<br> $name";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?> 