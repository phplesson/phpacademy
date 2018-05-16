<?php


$name = "Oleksandr";
$age = "21";



if ($age >= 18 && $age <= 59)

{
    echo "Вам еще работать и работать";
}

elseif ($age < 59)



{
    echo "Вам пора на пенсию";
}


elseif ($age >= 0 && $age <= 17)


{
    echo "Вам ещё рано работать";
}


else

    {
    echo "Неизвестный возраст";
}