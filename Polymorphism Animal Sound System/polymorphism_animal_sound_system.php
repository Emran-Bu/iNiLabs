<!-- Polymorphism – Animal Sound System -->
<?php

class Animal
{
    public function makeSound()
    {
        return "Some generic animal sound";
    }
}

class Duck extends Animal
{
    public function makeSound()
    {
        return "Duck sound - Pack!";
    }
}

class Dog extends Animal
{
    public function makeSound()
    {
        return "Dog sound - Voog!";
    }
}

class Cat extends Animal
{
    public function makeSound()
    {
        return "Cat sound - Meow!";
    }
}

class Cow extends Animal
{
    public function makeSound()
    {
        return "Cow sound - Hamba!";
    }
}

class Bird extends Animal
{
    public function makeSound()
    {
        return "Bird sound - Pipi!";
    }
}

$animals = [
    new Dog(),
    new Cat(),
    new Cow(),
    new Bird(),
    new Duck()
];

foreach ($animals as $animal) {
    echo $animal->makeSound() . "<br>";
}

?>