<?php 

require_once('initialize.php'); 

class Listofbooking {

	protected static $table_name = 'room';
	protected static $db_fields = array('id', 'name','description' );
	public $id;
	public $name;
	public $description;


	//Common Database Methods
	public static function find_all() {

		return self::find_by_sql("SELECT * FROM ".self::$table_name."");

	}


	public static function find_by_sql($sql="") {
		global $database;
		$result_set = $database->query($sql);
		$object_array = array();
		while ($row = $database->fetch_array($result_set)) {
			$object_array[] = self::instantiate($row);
		}
		return $object_array;
	}

	


	public static function instantiate($record) {
		// Could check that $record exists and is an array
		// Simple, long-form approach:
		$object = new self;
		// $object->id         = $record['id'];
		// $object->username   = $record['username'];
		// $object->password   = $record['password'];
		// $object->first_name = $record['first_name'];
		// $object->last_name  = $record['last_name'];
		//return object;

		// More dynamic, shor-form approach:
		foreach($record as $attribute => $value) {
			if($object->has_attribute($attribute)) {
				$object->$attribute = $value;
			}
		}
		return $object;
	}

	private function has_attribute($attribute) {
		// get_object_vars returns an associative array with all attributes
		//(incl.private ones!) as the keys and their current values as the value
		$object_vars = get_object_vars($this);
		return array_key_exists($attribute, $object_vars);
	}

	public function attributes() {
		// return an array of attributes keys and their values
		$attributes = array();
		foreach (self::$db_fields as $field) {
			if(property_exists($this, $field)) {
				$attributes[$field] = $this->$field;
			}
		}
		return $attributes;
	}

	protected function sanitized_attributes() {
		global $database;
		$clean_attributes = array();
		// sanitize the values before submitting
		// Note: does not alter the actual value of each attribute
		foreach ($this->attributes() as $key => $value) {
			$clean_attributes[$key] = $database->escape_value($value);
		}
		return $clean_attributes;
	}}




$Listofbooking = new Listofbooking();	

?>