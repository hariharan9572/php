<?php
// class -> Tesla Y
// object -> My Tesla Y or your Tesla Y

class Person{
    // public string $name;
    // public int $age;

    public function __construct(public string $name, public int $age){
        // $this->name = $name;
        // $this->age = $age;
    }

    public function introduce(): string{
        return "Hi, I'm {$this->name} and I'm {$this->age} years old.";
    }
}

class Employee extends Person {
   public function __construct(public string $name, public int $age, public string $position){
       
    }

    public function introduce(): string
    {
        return parent::introduce() . " I work as a {$this->position}.";
    }
}

// $employee = new Employee("Hari", 23, "Developer");

// echo $employee->introduce();

$people = [
    new Employee("Hari", 23, "Developer"),
    new Person("Alice", 25)
];

function introduce(Person $person){
    echo $person->introduce(). "\n";
}

foreach ($people as $person){
    introduce($person);
}