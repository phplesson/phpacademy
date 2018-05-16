<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 27.04.18
 * Time: 11:05
 */

/**
 * 'display name' => [
 *      'baseLink' => <value>, 
 *      'subMenu' => [
 *          <display> => <subLink>,
 *          .....
 *      ],
 * ],
 */
return [
    'student1' => [
        'baseLink' => 'folderStudent1Name/subfolder/',
        'subMenu' => [
            'task1 about something' => 'file1.php',
            'task2 about some another thing' => 'file2.php',
        ],
    ],
    'manA' => [
        'baseLink' => 'folderA/homework/',
        'subMenu' => [
            'task1 about something' => '1.php',
            'task2 about some another thing' => '2.php',
        ],
    ],

    'real Sashok32' => [
        'baseLink' => 'sashok32/',
        'subMenu' => [
            'menu-subMenu example' => '22042018/list.html',
            'resume' => '01basephp/resume_css.html',
        ],
    ],
    
];