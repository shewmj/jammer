<?php
/**
* Model Entity to hold the ID (Primary Key), name, category, image reference,
* calories, salt and price to create a bowl item (Accessory).
*/
class Accessory extends Entity
{
  protected $id; // PK
  protected $name;
  protected $category; // FK
  protected $imageLocation;
  protected $calories;
  protected $salt;
  protected $price;

  /**
  * Sets the ID which represents a Primary Key in a 'database' for a bowl item.
  *
  * @param $value an integer representing a Primary Key identifier for a bowl item
  */
  public function setId($value) {
    // insist that an ID be present
    if (empty($value))
    throw new InvalidArgumentException('An Id must have a value');
    $this->id = $value;
    return $this;
  }

  /**
  * Sets the name which represents the name of a bowl item.
  *
  * @param $value a string representing the name of a bowl item
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

  /**
  * Sets the Category for a bowl item
  *
  * @param $value a string that represents a category of bowl item
  */
  public function setCategory($value) {
    // Insist that value must be one of the following categories:
    // Protein, Topping, Grain, Veggie or Sauce
    $allowed = ['Protein', 'Topping', 'Grain', 'Veggie', 'Sauce'];
    if (!in_array($value, $allowed))
    throw new Exception('Category must be a Protein, Topping, Grain, Veggie or Sauce');
    $this->category = $value;
    return $this;
  }

  /**
  * Sets the calorie content of a bowl item.
  *
  * @param $value an integer representing a calorie total for a bowl item
  */
  public function setCalories($value) {
    // insist that calorie count is a positive number, and less than 500 (calories)
    if (!is_numeric($value))
    throw new Exception('Calories must be numeric');
    if ($value > 500)
    throw new Exception('A bowl item cannot be greater than 500 calories');
    $this->calories = $value;
    return $this;
  }

  /**
  * Sets the salt content of a bowl item
  *
  * @param $value an integer representing the salt content in grams
  */
  public function setSalt($value) {
    // insist that salt amount is a positive number, and less than 200 (grams)
    if (!is_numeric($value))
    throw new Exception('Salt must be numeric');
    if ($value > 200)
    throw new Exception('Salt content cannot be greater than 200 grams');
    $this->salt = $value;
    return $this;
  }

  /**
  * Sets the price of a bowl item.
  *
  * @param $value an float representing the dollar amount of a bowl item
  */
  public function setPrice($value) {
    // insist that a Weight be a positive number, and less than 1000 (grams)
    if (!is_numeric($value))
    throw new Exception('Price must be numeric');
    if ($value > 0.50)
    throw new Exception('Price of a food item must be greater than $ 0.50');
    $this->price = $value;
    return $this;
  }
}
