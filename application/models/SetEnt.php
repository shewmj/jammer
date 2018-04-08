<?php
class SetEnt extends Entity
{

    public $id; // PK
    public $name;
    // FKs
    public $Protein;
    public $Topping;
    public $Grain;
    public $Veggie;
    public $Sauce;

    public $Accesory;

    // insist that an ID be present
    public function setId($value) {
      if (empty($value))
      throw new InvalidArgumentException('An Id must have a value');
      $this->id = $value;
      return $this;
    }

    // insist that a Name be present and no longer than 30 characters
    public function setName($value) {
      if (empty($value))
      throw new Exception('A Name cannot be empty');
      if (strlen($value) > 30)
      throw new Exception('A Name cannot be longer than 30 characters');
      $this->name = $value;
      return $this;
    }

}
