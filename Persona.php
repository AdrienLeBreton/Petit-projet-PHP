<?php

class Persona
{
    // private int $force = 1000;
    public int $life = 100;
    public object $role;

    public function __construct(int $force = 1000)
    {
        $this->force = $force;
    }
    
    public function getForce() : int
    {
        return $this->force;
    }
    
    public function setForce($force)
    {
        $this->force = $force;

        return $this;
    }
    
    public function getLife() : int
    {
        return $this->life;
    }
    
    public function setLife($life)
    {
        $this->life = $life;

        return $this;
    }
    
    public function getRole() : object
    {
        return $this->role;
    }
    
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }
}