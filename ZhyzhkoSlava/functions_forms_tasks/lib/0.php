<?php

return [
    'description' => 'list of tasks',
    'func' => function() {
        return null;
    },
    'paramGenerator' => function () {
        return [];
    },
    'argCount' => 0,
    'view' => 'view/menu.php',
    'actionList' => [
        0 => 'menu',
        1 => 'top3',
        2 => 'infield',
        3 => 'delete all less than N',
        4 => 'Show files in given directory',
        5 => 'Show files in given directory with extention',
        6 => 'Mult file upload',
        7 => 'Guest Book',
        8 => 'Guest Book without f-words',
        9 => 'Revert given string',
        10 => 'Unique words in string',
        11 => 'Capitalize letters of each sentence',
        12 => 'Rev letter',
        13 => 'Count elem',
    ],
];