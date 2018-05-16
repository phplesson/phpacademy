<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 4/29/18
 * Time: 1:11 PM
 */
$configArray = array(
    'dzNumber1' => array(
        'studentID' => array(
            'studentName' => 'Full Name',
            'basePath' => '../../../',
            'stFolder' => 'workfolder',
            'taskList' => array(
                'taskName1' => 'fileName1.php',
                'taskName2' => 'fileName2.php',
            ),
        ),
    ),

    'DZ04' => array(
        'andrey_kaplunenko' => array(
            'studentName' => 'Andrey Kaplunenko',
            'basePath' => '../../../',
            'stFolder' => 'akaplunenko',
            'taskList' => array(
                'taskName1' => 'fileName1.php',
                'taskName2' => 'fileName2.php',
            ),
        ),
        'sashok32' => array(
            'studentName' => 'Alexandr',
            'basePath' => '../../../',
            'stFolder' => 'sashok-work',
            'taskList' => array(
                'taskName1' => 'fileName1.php',
                'taskName2' => 'fileName2.php',
            ),
        ),
    ),
);

//пример обращения к элементу массива-структуры:
echo $configArray['DZ04']['sashok32']['taskList']['taskName2'];