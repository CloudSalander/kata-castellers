<?php
include('class/CastleDrawer.php');

$castleDrawer = new CastleDrawer();
$castleDrawer->inputFloor();
$castleDrawer->inputPeoplePerFloor();

var_dump($castleDrawer);