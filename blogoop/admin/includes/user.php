<?php
class User extends Db_object
{

    protected static $db_table = "users";
    protected static $db_table_fields = array('username', 'password', 'first_name', 'last_name');

    public $id;
    public $username;
    public $password;
    public $first_name;
    public $last_name;

    public static function verify_user($user, $pass)
    {
        global $database;
        $username = $database->escape_string($user);
        $password = $database->escape_string($pass);

        // $sql = "SELECT * FROM users WHERE ";
        $sql = "SELECT * FROM " . self::$db_table . " WHERE ";
        $sql .= "username = '{$username}' ";
        $sql .= "AND password = '{$password}' ";
        $sql .= "LIMIT 1";

        $the_result_array = self::find_this_query($sql);
        return !empty($the_result_array) ? array_shift($the_result_array) : false;
    }

    // public static function instantie($result)
    // {
    //     $the_object = new self();
    //     // $the_object->id = $result['id'];
    //     // $the_object->username = $result['username'];
    //     // $the_object->password = $result['password'];
    //     // $the_object->first_name = $result['first_name'];
    //     // $the_object->last_name = $result['last_name'];

    //     foreach ($result as $the_attribute => $value) {
    //         if ($the_object->has_the_attribute($the_attribute)) {
    //             $the_object->$the_attribute = $value;
    //         }
    //     }
    //     return $the_object;
    // }

    // private function has_the_attribute($the_attribute)
    // {
    //     $object_properties = get_object_vars($this);
    //     return array_key_exists($the_attribute, $object_properties);
    // }

    // public static function find_this_query($sql)
    // {
    //     global $database;
    //     $result = $database->query($sql);
    //     $the_object_array = array();
    //     while ($row = mysqli_fetch_array($result)) {
    //         $the_object_array[] = self::instantie($row);
    //     }
    //     return $the_object_array;
    // }

    // public static function find_all()
    // {
    //     return self::find_this_query("SELECT * FROM " . self::$db_table);
    // }

    // public static function find_by_id($id)
    // {
    //     $result = self::find_this_query("SELECT * FROM " . self::$db_table . " WHERE id=$id LIMIT 1");
    //     // $result = self::find_this_query("SELECT * FROM users WHERE id=$user_id");
    //     // $user_found = mysqli_fetch_array($result);
    //     // return $user_found;
    //     // if (!empty($result)) {
    //     //     return array_shift($result);
    //     // } else {
    //     //     return false;
    //     // }
    //     return !empty($result) ? array_shift($result) : false;
    // }

    // public function create()
    // {
    //     global $database;
    //     // $properties = $this->properties();
    //     $properties = $this->clean_properties();

    //     // $sql = "INSERT INTO users (username, password, first_name, last_name)";
    //     // $sql = "INSERT INTO " . self::$db_table . " (username, password, first_name, last_name)";
    //     $sql = "INSERT INTO " . self::$db_table . " (" . implode(",", array_keys($properties)) . ")";
    //     $sql .= " VALUES ('" . implode("','", array_values($properties)) . "')";
    //     // $sql .= " VALUES ('";
    //     // $sql .= $database->escape_string($this->username) . "', '";
    //     // $sql .= $database->escape_string($this->password) . "', '";
    //     // $sql .= $database->escape_string($this->first_name) . "', '";
    //     // $sql .= $database->escape_string($this->last_name) . "')";

    //     if ($database->query($sql)) {
    //         $this->id = $database->the_insert_id();
    //         return true;
    //     } else {
    //         return false;
    //     }
    //     $database->query($sql);
    // }

    // public function update()
    // {
    //     global $database;
    //     $properties = $this->clean_properties();
    //     $properties_assoc = array();

    //     foreach ($properties as $key => $value) {
    //         $properties_assoc[] = "{$key}='{$value}'";
    //     }

    //     // $sql = "UPDATE users SET ";
    //     $sql = "UPDATE " . self::$db_table . " SET ";
    //     $sql .= implode(",", $properties_assoc);
    //     // $sql .= "username = '" . $database->escape_string($this->username) . "', ";
    //     // $sql .= "password = '" . $database->escape_string($this->password) . "', ";
    //     // $sql .= "first_name = '" . $database->escape_string($this->first_name) . "', ";
    //     // $sql .= "last_name = '" . $database->escape_string($this->last_name) . "' ";
    //     $sql .= "WHERE id = " . $database->escape_string($this->id);

    //     $database->query($sql);
    //     return (mysqli_affected_rows($database->connection) == 1) ? true : false;
    // }

    // public function delete()
    // {
    //     global $database;

    //     // $sql = "DELETE FROM users ";
    //     $sql = "DELETE FROM " . self::$db_table;
    //     $sql .= "WHERE id = " . $database->escape_string($this->id);
    //     $sql .= " LIMIT 1";

    //     $database->query($sql);
    //     return (mysqli_affected_rows($database->connection) == 1) ? true : false;
    // }

    // protected function properties()
    // {
    //     // return get_object_vars($this);
    //     $properties = array();
    //     foreach (self::$db_table_fields as $db_field) {
    //         if (property_exists($this, $db_field)) {
    //             $properties[$db_field] = $this->$db_field;
    //         }
    //     }
    //     return $properties;
    // }

    // protected function clean_properties()
    // {
    //     global $database;
    //     $clean_properties = array();
    //     foreach ($this->properties() as $key => $value) {
    //         $clean_properties[$key] = $database->escape_string($value);
    //     }
    //     return $clean_properties;
    // }

    // public function save()
    // {
    //     return isset($this->id) ? $this->update() : $this->create();
    // }
}