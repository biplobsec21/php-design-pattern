<?php
// class Originator {
//     private $state;

//     public function setState($state) {
//         $this->state = $state;
//     }

//     public function getState() {
//         return $this->state;
//     }

//     public function saveToMemento() {
//         return new Memento($this->state);
//     }

//     public function restoreFromMemento(Memento $memento) {
//         $this->state = $memento->getState();
//     }
// }
// class Memento {
//     private $state;

//     public function __construct($state) {
//         $this->state = $state;
//     }

//     public function getState() {
//         return $this->state;
//     }
// }
// class Caretaker {
//     private $mementos = [];

//     public function addMemento(Memento $memento) {
//         $this->mementos[] = $memento;
//     }

//     public function getMemento($index) {
//         return $this->mementos[$index];
//     }
// }
// // Create an instance of the Originator
// $originator = new Originator();

// // // Set the initial state
// $originator->setState("State 1");

// // // Create a Caretaker to manage the Mementos
// $caretaker = new Caretaker();

// print_r($originator->saveToMemento());
// // // Save the current state to a Memento
// // $caretaker->addMemento();

// // // // Modify the state
// // $originator->setState("State 2");

// // // // Save the current state to another Memento
// // $caretaker->addMemento($originator->saveToMemento());

// // // // Restore the previous state from a Memento
// // $originator->restoreFromMemento($caretaker->getMemento(0));

// // echo $originator->getState(); // Output: State 1


// // class Editor{
// //     protected $line;
// //     private $saveLine=[];
// //     public function setLine($line){
// //         $this->line=$line;
// //     }
// //     public function getLine(){
// //         return $this->line;
// //     }
// //     public function saveLine(){
// //         $this->saveLine[]=$this->line;
// //     }
// //     public function fetchLine($index){
// //         return $this->saveLine[$index];
// //     }
// // }

// // // Create an instance of the Originator
// // $singleEditor = new Editor();

// // // // Set the initial state
// // $singleEditor->setLine("Editorial line1");

// // // // Modify the state
// // $singleEditor->saveLine();

// // $singleEditor->setLine("Editorial line2");

// // // // Save the current state to another Memento
// // $singleEditor->saveLine();
// // echo $singleEditor->fetchLine(1); // Output: State 1
// // // // Restore the previous state from a Memento
// // // $originator->restoreFromMemento($caretaker->getMemento(0));

// // // echo $originator->getState(); // Output: State 1 -->

class Originator{
    private $state;
    public function setState($state){
        $this->state=$state;
    }
    public function getState(){
        return $this->state;
    }
    public function saveToMemento(){
        return new Memento($this->state);
    }
    public function restoreFromMemento(Memento $memento){
        $this->state=$memento->getState();
    }
}
class Memento{
    private $state;
    public function setState($state){
        $this->state=$state;
    }
    public function getState(){
        return $this->state;
    }
}
class CareTaker{
    private $memento=[];
    public function addMemento(Memento $memento){
        $this->memento[]=$memento;
    }
    public function getMemento($index){
        return $this->memento[$index];
    }
    public function testMemento(){
        return $this->memento;
    }
}
$event=new Originator();
$event->setState('my first line code1');
$caretaker=new CareTaker();
$caretaker->addMemento($event->saveToMemento());

$event->setState('my first line code2');
$caretaker->addMemento($event->saveToMemento());
$event->restoreFromMemento($caretaker->getMemento(0));
print_r($caretaker->testMemento());
echo $event->getState();