<?php

require_once ('E:\WEB\Server\OpenServer\domains\test.local\newFolder\Auto.php');

$BMWX5 = new auto;

$BMWX5->brand = "BMW";
$BMWX5->model = "X5";


$GTR = new auto;

$GTR->brand = "Nissan";
$GTR->model = "GTR";
?>
<pre>
<?php
print_r($GTR);
print_r($BMWX5);
?>
</pre>

<?php
Auto::service();
