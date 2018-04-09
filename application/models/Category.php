<?php
/**
* Model Entity to hold the ID (a Primary Key) and name to identify a category
* of bowl item.
**/
class Category extends Entity
{

	protected $id;
	protected $name;

	/**
  * Sets the ID which represents a Primary Key in a 'database' for a category
	* of item.
  *
  * @param $value an integer representing a Primary Key identifier for a category
  */
  public function setId($value) {
		// insist that an ID be present
    if (empty($value))
    throw new InvalidArgumentException('An Id must have a value');
    $this->id = $value;
    return $this;
  }

	/**
  * Sets the name for an item category.
  *
  * @param $value a string that represents a name for a category.
  */
	public function setName($value) {
		// Insist that name must be one of the following categories:
		// Protein, Topping, Grain, Veggie or Sauce
		$allowed = ['Protein', 'Topping', 'Grain', 'Veggie', 'Sauce'];
		if (!in_array($value, $allowed))
		throw new Exception('Category must be a Protein, Topping, Grain, Veggie or Sauce');
		$this->name = $value;
		return $this;
	}
}
