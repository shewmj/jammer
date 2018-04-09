<?php
/**
* Model Entity to hold the ID (a Primary Key), name, PK and a set of Foreign Key
* ID of bowl items to create a bowl set.
**/
class Setent extends Entity
{
  protected $id; // PK
  protected $name;
  // FKs
  public $Protein;
  public $Topping;
  public $Grain;
  public $Veggie;
  public $Sauce;

  /**
  * Sets the ID which represents a Primary Key in a 'database' for a bowl set.
  *
  * @param $value an integer representing a Primary Key identifier for a bowl set
  */
  public function setId($value) {
    // insist that an ID be present
    if (empty($value))
    throw new InvalidArgumentException('An Id must have a value');
    $this->id = $value;
    return $this;
  }


  /**
  * Sets the name for a bowl set.
  *
  * @param $value a string that represents a name for the bowl set.
  */
  public function setName($value) {
    // insist that a Name be present and no longer than 30 characters
    if (empty($value))
    throw new Exception('A Name cannot be empty');
    if (strlen($value) > 30)
    throw new Exception('A Name cannot be longer than 30 characters');
    $this->name = $value;
    return $this;
  }
}
