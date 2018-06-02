<?php
$domains = ['a.ru' => true,
    'a.ruru' => true,
    'a.rurur' => false,
    '.ruru' => false,
    '2.ruru' => false,
    'a2-.ruru' => false,
    '-a2.ruru' => false,
    'a-b.ruru' => true,
    'a-b.a.ruru' => true,
    'a-b.a3.ruru' => true,
    'a-b.a-c.ruru' => true,
    'a-b.a.z.ruru' => true,
    'a-b.a3.g3.ruru' => true,
    'a-b.a-c.h-k.ruru' => true,
    'a-b.a.z.z.ruru' => true,
    'a-b.a3.g3.g3.ruru' => true,
    'a-b.a-c.h-k.h-k.ruru' => true,
    'a-b.1.ruru' => false,
    'a-b..ruru' => false,
    'a-b.-a3.ruru' => false,
    'a-b.1a-c.ruru' => false,
    'a-b.a.z..ruru' => false,
    'a-b.a3.g3-.ruru' => false,
    'a-b.a-c.h-k.123.ruru' => false,
    'a-b.a.-.z.z.ruru' => false,
    'a-b.a3.-g3.g3.ruru' => false,
    'a-b.a-c.h-k.2h-k.ruru' => false,
];
$structure = '/^([a-z]([-a-z0-9]*[a-z0-9])*.)+[a-z]{2,4}/';


foreach($domains as $domain => $result)
{
    $r = preg_match ($structure, $domain);

    echo sprintf('%25s : %b', $domain, ($result==$r)) . PHP_EOL;
}

