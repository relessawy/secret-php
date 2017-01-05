<h1> Get username:password from Secret </h1>
<div>
<?php
echo $_ENV["USERNAME"];
echo ":";
echo $_ENV["PASSWORD"];
?>
</div>
<h1> Get country:language from ConfigMap </h1>
<div>
<?php
echo $_ENV["COUNTRY"];
echo ":";
echo $_ENV["LANGUAGE"];
?>
</div>

