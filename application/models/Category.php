<?php
class Category extends CSV_Model
{

	public $id;
	public $name;

  // insist that an ID be present
  public function setId($value) {
    if (empty($value))
    throw new InvalidArgumentException('An Id must have a value');
    $this->id = $value;
    return $this;
  }

	// Insist that name must be one of the following categories:
	// Protein, Topping, Grain, Veggie or Sauce
	public function setName($value) {
		$allowed = ['Protein', 'Topping', 'Grain', 'Veggie', 'Sauce'];
		if (!in_array($value, $allowed))
		throw new Exception('Category must be a Protein, Topping, Grain, Veggie or Sauce');
		$this->name = $value;
		return $this;
	}
}
