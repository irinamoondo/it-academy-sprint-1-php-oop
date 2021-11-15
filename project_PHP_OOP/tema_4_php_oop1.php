<?php
    class Employee {
    //attributes
    public $name;
    public $salary;
    //method
    public function initialize($name, $salary) {
        if ($salary > 6000) {
            return "$name must pay taxes." ;
        }
        else {
            return "$name doesn't have to pay taxes." ;
        }
    }
}
/* example
$employee1 = new Employee();
echo $employee1->initialize("Steven", 3000);*/
?>