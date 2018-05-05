<?php

return [
  'teacher' => [
    'baseLink' => '06Lesson/04view/index.php',
    'subMenu' => [
      'current time' => '?action=time',
      'md5 sum' => '?action=md5',
    ],
  ],
    'student1' => [
        'baseLink' => 'student1/',
        'subMenu' => [
            'task1 about something' => '1.php',
        ],
    ],
    'student2' => [
        'baseLink' => 'student2/',
        'subMenu' => [
            'task2 about something' => '1.php',
        ],
    ],

    'student3' => [
        'baseLink' => 'student3/',
        'subMenu' => [
            'menu-subMenu example3' => '1.php',
        ],
    ],
    
];



$studentList = ['student1', 'student2', 'student3'];

// foreach ($studentList as $value) {
// 	echo "$value\n";
// }