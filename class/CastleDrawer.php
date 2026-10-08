<?php

class CastleDrawer {

    const PERSON = "|";
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

    private function validateInput(string $number): bool | int {
        if((!is_numeric($number) || !is_int($number)) && $number <= 0) return false;
        return intval($number);
    }
}