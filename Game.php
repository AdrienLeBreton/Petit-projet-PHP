<?php

class Game
{
    public function __construct(array $persona)
    {
        $this->persona = $persona;
    }

    public function whichPersonaStart(): array
    {
        if (random_int(0,1))
        {
            return $this->persona;
        }
        else
        {
            [$this->persona[0], $this->persona[1]] = [$this->persona[1], $this->persona[0]];
            return $this->persona;
        }
    }

    public function damage(): int
    {
        return random_int(1,10);
    }

    public function launchGame() : string
    {
        $persona = $this->whichPersonaStart($this->persona);
        $persona1 = $persona[0];
        $persona2 = $persona[1];
        $persona1 = get_object_vars($persona1);
        $persona2 = get_object_vars($persona2);
        $rolePersona1 = get_object_vars($persona1["role"]);
        $rolePersona2 = get_object_vars($persona2["role"]);
        
        $tour = true;
        while ($persona1["life"] > 0 || $persona2["life"] > 0 )
        {
            if($tour)
            {
                $damage = $this->damage();
                $persona2["life"] -= $damage;
                echo "Le ". $rolePersona1["name"] . " a infligé " . $damage . " dégats au " . $rolePersona2["name"] ."\n";
                $tour = false;
            }
            else
            {                
                $damage = $this->damage();
                $persona1["life"] -= $damage;
                echo "Le ". $rolePersona2["name"] . " a infligé " . $damage . " dégats au " . $rolePersona1["name"] . "\n";
                $tour = true;
            }
        }
        if ($persona1["life"] <= 0)
        {
            return "Le " . $rolePersona2["name"] . " à gagné ! \n";
        }
        else
        {
            return "Le " . $rolePersona1["name"] . " à gagné ! \n";
        }
    }
}