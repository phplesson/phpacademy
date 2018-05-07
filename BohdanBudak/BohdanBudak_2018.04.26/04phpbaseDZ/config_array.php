<?php
/**
 * Created by PhpStorm.
 * User: Богдан
 * Date: 05.05.2018
 * Time: 11:38
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
        'BohdanBudak' => array(
            'studentName' => 'Bohdan Budak',
            'basePath' => '../../../',
            'stFolder' => 'BohdanBudak',
            'taskList' => array(
                'taskName1' => '1.php',
                'taskName2' => '2.php',
                'taskName3' => '3.php',
                'taskName4' => '4.php',
                'taskName5' => '5.php',
                'taskName6' => '6.php',
                'taskName7' => '7.php',
                'taskName8' => '8.php',
                'taskName9' => '9.php',
                'taskName10' => '10.php',
                'taskName11' => '11.php',
                'taskName12' => '12.php',
                'taskName13' => '13.php',
            ),
        ),
    ),
);

//пример обращения к элементу массива-структуры:
echo $configArray['DZ04']['sashok32']['taskList']['taskName2'];