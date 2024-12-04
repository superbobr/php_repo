<?php
class Student {
    public string $name;
    public string $group;
    public int $average_grade;


    public function __construct($name, $group, $average_grade) {
        $this->name = $name;
        $this->group = $group;
        $this->average_grade = $average_grade;
    }
    public function get_info(): string {
        return <<<HEREDOC
ФИО: $this->name
Группа: $this->group
Средний балл: $this->average_grade
HEREDOC;

    }
}

$first_student = new Student('Ivanov', 'math', 10);

echo $first_student->get_info();
