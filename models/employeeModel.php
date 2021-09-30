<?php
class Employee
{
    public $empID, $empName;

    public function __construct($empID, $empName)
    {
        $this->empID = $empID;
        $this->empName = $empName;
    }
    public static function getAll()
    {
        $employeeList = [];
        require("connection_connect.php");
        $sql = "select * from employee";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {
            $empID = $my_row[E_ID];
            $empName = $my_row[E_Name];
            $employeeList[] = new Employee($empID, $empName);
        }
        require("connection_close.php");
        return $employeeList;
    }
}
