<?php require_once('initialize.php'); 

class Booking {

	protected static $table_name = "qhbooking";
	protected static $db_fields = array('id','user_id', 'name', 'reason', 'start', 'end','room' );
	public $id;
	public $user_id;
	public $name;
	public $reason;
	public $start;
	public $end;
	public $room;


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
	}

	public function save() {
		// A new record won't have an id yet.
		return isset($this->id) ? $this->update() : $this->create();
	}

	public function create() {

		global $database;
		// Don't forget your SQL syntax and good habits:
		// - INSERT INTO table (key,key) VALUES ('value', 'value')
		// - single-quotes around al  values
		// - escape all values to prevent SQL injection
		$attributes = $this->sanitized_attributes();
		$sql  = "INSERT INTO ".self::$table_name." (";
		$sql .= join(", ", array_keys($attributes));
		$sql .= ") VALUES ('";
		$sql .= join("', '", array_values($attributes));
		$sql .= "')";
		if($database->query($sql)) {
			$this->id = $database->insert_id();
			return true;
		} else {
			return false;
		}
	}

	public function update() {
			global $database;
			// Don't forget your SQL syntax and good habits:
			// - UPDATE table SET key='value', key='value' WHERE condition
			// - single-quotes arounda l  values
			// - escape all values to prevent SQL injection
			$attributes = $this->sanitized_attributes();
			$attribute_pairs = array();
			foreach ($attributes as $key => $value) {
				$attribute_pairs[] = "$key = '$value'";
			}

			$sql  = "UPDATE ".self::$table_name." SET ";
			$sql .= join(", ", $attribute_pairs);
			$sql .= " WHERE id=". $database->escape_value($this->id);
			$database->query($sql);
			return ($database->affected_rows() == 1) ? true : false;
	}

	public function delete() {

			global $database;
			// Don't forget your SQL syntax and good habits:
			// - DELETE FROM table WHERE condition LIMIT 1
			// - escape all values to prevent SQL injection
			// - use LIMIT 1
			$sql  = "DELETE FROM ".self::$table_name." ";
			$sql .= "WHERE id=". $database->escape_value($this->id);
			$sql .= " LIMIT 1";
			$database->query($sql);
			return ($database->affected_rows() == 1) ? true : false;
	}


	



}



//$new_booking = new Booking();

?>