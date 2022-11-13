<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
<head>
<title>
<?= $pageTitle ?>
</title>
</head>
<body>
<?php if(isset($content))
{
echo $content['content'];
} ?>
</body>
</html>