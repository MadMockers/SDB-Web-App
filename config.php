<?php

/*
 * MySQL Connection information goes here
 * We can't provide you with this so ask your host if you are unsure
 */

$mysql_host = "127.0.0.1";
$mysql_user = "";
$mysql_pass = "";
$mysql_db = "";

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

?>