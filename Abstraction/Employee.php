<?php
abstract class Employee{
    abstract public function calculateSalary();
}
class Coder extends Employee{
    var $noOfLinesWritten;
    var $hours;
    function __construct($noOfLinesWritten, $hours){
        $this->noOfLinesWritten = $noOfLinesWritten;
        $this->hours = $hours;
    }
    public function calculateSalary(){
          return $this->noOfLinesWritten * $this->hours;
    }
}
class Tester extends Employee{
    private $noOfLinesTested;
    private $hours;
    function __construct($noOfLinesTested, $hours){
        $this->noOfLinesTested = $noOfLinesTested;
        $this->hours = $hours;
    }
    public function calculateSalary(){
          return $this->noOfLinesTested * $this->hours;
    }
}
    $coder = new Coder(1000,  9);
    $tester = new Tester(499, 9);

    echo "Coder's Salary: " . $coder->calculateSalary() . "\n";
    echo "Tester's Salary: " . $tester->calculateSalary();


