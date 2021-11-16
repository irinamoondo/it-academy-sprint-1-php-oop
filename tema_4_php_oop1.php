<?php
    class Employee {
    //attributes
    public $name;
    public $salary;
    //method
    public function initialize ($name, $salary) {
        $this->name = $name;
        $this->salary= $salary;
    
        if ($this->salary > 6000) {
            return "$this->name must pay taxes" ;
        }
        else {
            return "$this->name doesn't have to pay taxes" ;
        }
    }
}
/* example
$employee01 = new Employee ();
echo $employee01->initialize("John", 7000); */
?>
