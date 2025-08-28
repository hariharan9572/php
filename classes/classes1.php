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

$person = new Person("Hari", 23);

echo $person->introduce();

$person2 = new Person("Alice", 25);

echo $person2->introduce();