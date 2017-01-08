<?php


require_once __DIR__.'/../vendor/autoload.php';

use afilipowski\Jokes\JokesApi;

		
$http = new \GuzzleHttp\Client();
$jkoesApi = new JokesApi($http);
$randJoke = $jkoesApi->randJoke();
?>

<html>
<body>
<h1>
<?php

echo sprintf(
  'Random joke:<br> %s ',$randJoke
);

echo "All jokes";
/*
$jokesStr=$jkoesApi->all();
for(int i=0;i<10;++i){



}
*/

?>

</h1>
</body>
</html>

