<?php

class Employee {
    public $Employee_ID;
    public $First_Name;
    public $Last_Name;
    public $Department_Name;
    public $Manager_Name;
    public $Email;
    public $Phone_Number;
    public $Hire_Date;
    public $Salary;
    public $Date_As_On;

    public function __construct($Employee_ID, $First_Name, $Last_Name, $Department_Name, $Manager_Name, $Email, $Phone_Number, $Hire_Date, $Salary, $Date_As_On) {
        $this->Employee_ID = $Employee_ID;
        $this->First_Name = $First_Name;
        $this->Last_Name = $Last_Name;
        $this->Department_Name = $Department_Name;
        $this->Manager_Name = $Manager_Name;
        $this->Email = $Email;
        $this->Phone_Number = $Phone_Number;
        $this->Hire_Date = $Hire_Date;
        $this->Salary = $Salary;
        $this->Date_As_On = $Date_As_On;
    }
}

function readCSV($file) {
    $employees = [];
    if (($handle = fopen($file, 'r')) !== FALSE) {
        $header = fgetcsv($handle);
        while (($data = fgetcsv($handle)) !== FALSE) {
            if (count($data) >= 10) {
                $employee = new Employee(
                    $data[0],
                    $data[1],
                    $data[2],
                    $data[3],
                    $data[4],
                    $data[5],
                    $data[6],
                    $data[7],
                    $data[8],
                    $data[9]
                );
                $employees[$data[5]] = $employee;
            }
        }
        fclose($handle);
    } else {
        echo "Error: Could not open CSV file.\n";
        exit(1);
    }
    return $employees;
}

function isValidEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

function searchEmployeeByEmail($employees, $emails) {
    foreach ($emails as $email) {
        if (!isValidEmail($email)) {
            echo "Error: Invalid email format for '$email'. Skipping...\n";
            continue;
        }

        if (isset($employees[$email])) {
            $employee = $employees[$email];
            echo "Employee found:\n";
            echo "Employee ID: $employee->Employee_ID\n";
            echo "Name: $employee->First_Name $employee->Last_Name\n";
            echo "Department: $employee->Department_Name\n";
            echo "Manager: $employee->Manager_Name\n";
            echo "Phone: $employee->Phone_Number\n";
            echo "Hire Date: $employee->Hire_Date\n";
            echo "Salary: $employee->Salary\n";
            echo "Date As On: $employee->Date_As_On\n\n";
        } else {
            echo "Error: No employee found with email '$email'.\n";
        }
    }
}

function main() {
    $csvFile = '/Users/hariharan/Downloads/employee_details(1).csv';

    if (!file_exists($csvFile)) {
        echo "Error: The CSV file '$csvFile' does not exist.\n";
        exit(1);
    }

    $employees = readCSV($csvFile);

    if (isset($GLOBALS['argc']) && $GLOBALS['argc'] < 2) {
        echo "Error: Please provide at least one email address.\n";
        exit(1);
    }

    $emailsToSearch = array_slice($GLOBALS['argv'], 1);

    searchEmployeeByEmail($employees, $emailsToSearch);
}

main();
?>