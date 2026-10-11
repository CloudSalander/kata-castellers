<?php
include('class/CastleDrawer.php');

$castleDrawer = new CastleDrawer();
$castleDrawer->inputFloor();
$castleDrawer->inputPeoplePerFloor();
$castleDrawer->inputHasFolre();
$castleDrawer->inputHasManilles();

$castleDrawer->draw();