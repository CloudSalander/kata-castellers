<?php

class CastleDrawer {

    const PERSON = "|";
    const PINYA_LENGTH = 20;

    private int $floorsNumber;
    private int $peoplePerFloor;

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

    public function draw(): void {
        //TODO: Anxaineta?
        for($i = 0; $i < $this->floorsNumber; ++$i) {
            $this->drawFloor();
        }
        $this->drawPinya();
    }

    private function validateInput(string $number): bool | int {
        if((!is_numeric($number) || !is_int($number)) && $number <= 0) return false;
        return intval($number);
    }

    private function drawFloor(): void {
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
}