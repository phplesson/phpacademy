
<?php
	$domain = ['a.ru' => true,
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
	
	$input = array_rand($domain);
	$regexp = '/^([a-z]+[a-z0-9-]*[a-z0-9]*.)+[a-z]{2,4}/';
	 
	 if (preg_match ($regexp, $input)) {
		 
		 echo "<br>Домен {$input} введен корректно<br>";
	 } else {
		  
		  echo "<br>Домен {$input} - не корректный!<br>";
	 }

?>

