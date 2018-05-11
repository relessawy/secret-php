<h1> Get username:password from Secret </h1>
<div>
<?php
echo $_ENV["username"];
echo ":";
echo $_ENV["password"];
?>
</div>
<h1> Get country:language from ConfigMap </h1>
<div>
<?php
echo $_ENV["country"];
echo ":";
echo $_ENV["language"];
?>
</div>
</div>
<h1> Connection URL </h1>
<div>
<?php
echo $_ENV["connectionURL"];
?>
</div>
<div>
  <?php 
 echo "My Pod IP is : ".$_SERVER['SERVER_ADDR'] ;
 ?>
  </div>



