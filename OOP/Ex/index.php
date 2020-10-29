<?php
interface IRunAnimal
{
    const NAME = "Animal";

    public function run();
}

interface IEatAnimal
{
    public function eat();
}

class Dog implements IRunAnimal, IEatAnimal
{
    public function run()
    {
        echo "Dog fast run.! ";
    }
    public function eat(){
        echo IRunAnimal::NAME." is Dog eat rice";
    }
}
$dog = new Dog;
$dog->run();
$dog->eat();