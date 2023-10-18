<?php 
$studentGrades=[
    ['math'=>70,'english'=>80,'science'=>75],
    ['math'=>80,'english'=>75,'science'=>75],
    ['math'=>90,'english'=>70,'science'=>65],
];

function calculateGrades($studentGrade){
    $grades=count($studentGrade);
    for($i= 0;$i<$grades;$i++){
        $grade=$studentGrade[$i];
        $totalGrades = array_sum($grade);
        $subjectCount = count($grade);
        $studentAverageGrade =(int)( $totalGrades / $subjectCount ).PHP_EOL;
        // result print
        print_r($studentAverageGrade);
    }
}
calculateGrades($studentGrades);