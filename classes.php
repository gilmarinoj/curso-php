<?php

declare(strict_types=1);
class SuperHero
{

    // promoted properties -> PHP 8
    public function __construct(
        readonly public string $name,
        public array $powers,
        public string $planet
    ){

    }

    public function attack()
    {
        return "$this->name ataca con sus poderes";
    }

    public function description()
    {
        $powers = implode(", ", $this->powers);
        return "$this->name es un superheroe que viene de $this->planet y tiene los poderes: $powers";
    }
}

$hero = new SuperHero("Batman", ["Dinero", "Inteligencia", "Fuerza"], "Coro") ;
echo $hero->description();
