<?php

/*
 * MySQL Connection information goes here
 * We can't provide you with this so ask your host if you are unsure
 */

$mysql_host = "127.0.0.1:3306";
$mysql_user = "";
$mysql_pass = "";
$mysql_db = "";

/* Set this to the name you want to show on all pages. */

$sitename = "Simple Death Bans Web";

/* Set this to the text you want to show on browser tabs. */

$tabname = "Simple Death Bans Web";

/* Set this to the time you want banned players to be shown for, in minutes (0 for permanent) */

$bantime = 0;

/* 
 * Set to the name of the theme you wish to use, theme names are in the css folder
 * You can find more themes at http://bootswatch.com/ 
 */

$theme = "Cyborg";

/* You can edit these reasons to your liking */

$banreasons = array
(
    "BLOCK_EXPLOSION" => "Blew up",
    "CONTACT" => "Was pricked by a cactus",
    "CUSTOM" => "Custom Damage",
    "DROWNING" => "Is swimming with the fishes",
    "ENTITY_ATTACK" => "Was murdered by",
    "ENTITY_EXPLOSION" => "Exploded",
    "FALL" => "Fell to their death",
    "FIRE" => "Is a hot mess",
    "FIRE_TICK" => "Is a hot mess",
    "LAVA" => "Fell in lava",
    "MAGIC" =>"Was killed by a wizard",
    "MELTING" => "Melted",
    "POISON" => "Was poisoned",
    "PROJECTILE" =>"Was shot",
    "STARVATION" => "Starved",
    "SUFFOCATION" => "Suffocated",
    "SUICIDE" => "Bid farewell, cruel world.",
    "VOID" => "Fell into the void",
    "N/A" => "Unknown"
);

/* DO NOT TOUCH ANYTHING BELOW THIS */

$mysql_con = mysql_connect("$mysql_host","$mysql_user","$mysql_pass");

mysql_select_db($mysql_db) or die(mysql_error());

if(!$mysql_con)
{
    die("<b>Error:</b> There is a problem with the database connection.<br/>");
}

include("functions.php");

?>