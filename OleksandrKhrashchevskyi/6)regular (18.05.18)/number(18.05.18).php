<?php
$a = "/^\+380\d{3}\d{2}\d{2}\d{2}$/";

if(preg_match($a, "+380501003119")) echo "Work good";

else echo "work bad";