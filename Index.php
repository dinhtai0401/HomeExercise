<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$myStudents = new Students('Tai','Nguyen', 1997, ["PHP", "JavaScript", "Math"] , 5);
echo '<h2>Student</h2>';
echo 'The first name of the student is '.' '.$myStudents->getFName();
echo '<br>';
echo 'The last name of the student is '.' '.$myStudents->getLName();
echo '<br>';
echo 'The year of birth of the student is '.' '.$myStudents->getYearOfBirth();
echo '<br>';
echo 'The courses of the student is'.' ';
print_r(implode(", ",$myStudents->getCourses()));
echo '<br>';
echo 'The credit points of the student is '.' '.$myStudents->getPoints();
echo '<br>';

$myTeachers = new Teachers('Kari','Laitinen', 1956, ["JavaScript" , "C++", "Python"], 'Kotkantie 1, 90250 Oulu, FINLAND');
echo '<h2>Teacher</h2>';
echo 'The first name of the teacher is'. ' '.$myTeachers->getFName();
echo '<br>';
echo 'The last name of the teacher is'.' '.$myTeachers->getLName();
echo '<br>';
echo 'The year of birth of the teacher is'.' '.$myTeachers->getYearOfBirth();
echo '<br>';
echo 'The subjects of the teacher is'.' ';
print_r(implode(",",$myTeachers->getSubjects()));
echo '<br>';
echo 'The department of the teacher is'.' '.$myTeachers->getdepartment();
echo '<br>';

$myFirstStaff = new Staff('Phat','Phan', 1976, 'Caretaker');
echo '<h2>First Staff</h2>';
echo 'The first name of the staff is'.' '.$myFirstStaff->getFName();
echo '<br>';
echo 'The last name of the staff is'.' '.$myFirstStaff->getLName();
echo '<br>';
echo 'The year of birth of the staff is'.' '.$myFirstStaff->getYearOfBirth();
echo '<br>';
echo 'The vacancy of the teacher is'.' '.$myFirstStaff->getvacancy();
echo '<br>';

$mySecondStaff = new Staff('Lam','Pham', 2000, 'Cleaner');
echo '<h2>Second Staff</h2>';
echo 'The first name of the staff is'.' '.$mySecondStaff->getFName();
echo '<br>';
echo 'The last name of the staff is'.' '.$mySecondStaff->getLName();
echo '<br>';
echo 'The year of birth of the staff is'.' '.$mySecondStaff->getYearOfBirth();
echo '<br>';
echo 'The vacancy of the teacher is'.' '.$mySecondStaff->getvacancy();
echo '<br>';
?>
