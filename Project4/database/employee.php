<?php
class EmployeeDB {
    public static function getemployees() {
        global $db;
        //$db = Database::getDB();
        $query = 'SELECT * FROM employee
                  ORDER BY employeeID';
        $statement = $db->prepare($query);
        $statement->execute();
        
        $employees = array();
        foreach ($statement as $row) {
            $employee = new Employee($row['employeeID'],
                                     $row['first_name'],
                                     $row['last_name']);
            $employees[] = $employee;
        }
        return $employees;
    }
}
?>