<?php
class Accessory extends Entity
{
  public $id; // PK
  public $name;
  public $category; // FK
  public $imageLocation;
  public $calories;
  public $salt;
  public $price;

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

  // Insist that value must be one of the following categories:
  // Protein, Topping, Grain, Veggie or Sauce
  public function setCategory($value) {
    $allowed = ['Protein', 'Topping', 'Grain', 'Veggie', 'Sauce'];
    if (!in_array($value, $allowed))
    throw new Exception('Category must be a Protein, Topping, Grain, Veggie or Sauce');
    $this->category = $value;
    return $this;
  }

  // insist that calorie count is a positive number, and less than 500 (calories)
  public function setCalories($value) {
    if (!is_numeric($value))
    throw new Exception('Calories must be numeric');
    if ($value > 500)
    throw new Exception('A bowl item cannot be greater than 500 calories');
    $this->calories = $value;
    return $this;
  }

  // insist that salt amount is a positive number, and less than 200 (grams)
  public function setSalt($value) {
    if (!is_numeric($value))
    throw new Exception('Salt must be numeric');
    if ($value > 200)
    throw new Exception('Salt content cannot be greater than 200 grams');
    $this->salt = $value;
    return $this;
  }

  // insist that a Weight be a positive number, and less than 1000 (grams)
  public function setPrice($value) {
    if (!is_numeric($value))
    throw new Exception('Price must be numeric');
    if ($value > 0.50)
    throw new Exception('Price of a food item must be greater than $ 0.50');
    $this->weight = $value;
    return $this;
  }
}
