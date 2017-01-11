<?php

class Student {
    #constructs a student with last name, first name, emails, and grades
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }

    #adds an email to student
    function add_email($which,$address) {
        $this->emails[$which] = $address;
    }

    #adds a grade to student
    function add_grade($grade) {
        $this->grades[] = $grade;
    }

    #calculates average grades
    function average() {
        $total = 0;
        foreach ($this->grades as $value)
            $total += $value;
        return $total / count($this->grades);
    }

    #displays student to screen in formatted style
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' ('.$this->average().")\n";
        foreach($this->emails as $which=>$what)
            $result .= $which . ': '. $what. "\n";
        $result .= "\n";
        return '<pre>'.$result.'</pre>';
    }
}