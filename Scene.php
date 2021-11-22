<?php

class Scene
{
    private array $persona = [];
    
    public function all() : array
    {
        return $this->persona;
    }
    
    public function setPersona(Persona $persona)
    {
        array_push($this->persona, $persona);
        return $this;
    }
}