<?php

class Role
{
    public string $name;
    
    public function getName() : string
    {
        return $this->name;
    }
    
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}