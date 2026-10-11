<?php

class CastleDrawer {

    const PERSON = "|";
    const PINYA_LENGTH = 20;
    const FOLRE_LENGTH = 15;
    const VALID_INPUT_FOLREMANILLES = ["y","n"];

    private int $floorsNumber;
    private int $peoplePerFloor;
    private bool $hasFolre;

    public function inputFloor(): void {
        $number = false;
        do{
            $number = readline("Please, input number of floors");
            $number = $this->validateInput($number);
        }while(!$number);
        $this->floorsNumber = $number;
    }

    public function inputPeoplePerFloor(): void {
        $number = false;
        do{
            $number = readline("Please, input people per floor");
            $number = $this->validateInput($number);
        }while(!$number);
        $this->peoplePerFloor = $number;
    }

    public function inputHasFolre(): void {
        $hasFolre = false;
        do {
            $hasFolre = readline("Has folre?(y/n)");
        }while(!in_array(strtolower($hasFolre), self::VALID_INPUT_FOLREMANILLES)); 
        $this->hasFolre = $hasFolre=="y"?true:false;
    }

    public function draw(): void {
        $baseFloorsToDraw = $this->getNumberBaseFloorsToDraw();
        for($i = 0; $i < $this->floorsNumber-$baseFloorsToDraw; ++$i) {
            $this->drawFloor();
        }
        if($this->hasFolre) $this->drawFolre();
        $this->drawPinya();
    }

    private function validateInput(string $number): bool | int {
        if((!is_numeric($number) || !is_int($number)) && $number <= 0) return false;
        return intval($number);
    }

    private function drawFloor(): void {
        echo str_repeat(" ",9);  //Floor draw offset
        for($i = 0; $i < $this->peoplePerFloor;++$i) {
            echo self::PERSON;
        }
        echo PHP_EOL; 
    }
    //todo: REPEATED LOGIC!!
    private function drawPinya(): void {
        for($i = 0; $i < self::PINYA_LENGTH; ++$i) {
            echo self::PERSON;
        }
        echo PHP_EOL;
    }

    private function getNumberBaseFloorsToDraw(): int {
        $con = 1;
        if($this->hasFolre) ++$con;
        return $con;
    }
    private function drawFolre(): void {
        echo str_repeat(" ",2);
        for($i = 0; $i < self::FOLRE_LENGTH; ++$i) {
            echo self::PERSON;
        }
        echo PHP_EOL;
    }

}