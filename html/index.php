<?php
namespace Basednet;
require_once "{$_SERVER["DOCUMENT_ROOT"]}/../php/DatabaseAuthenticator.php";
require_once __DIR__."/../php/Website.php";
require __DIR__."/style.php";
//$db = $dbauth->getMysqliHandler();
?>
<!DOCTYPE html>
<html>
    <head>
	<!-- [edit] ~mfw @ Tue Mar 30 07:13:33 2021
		<meta charse="UTC-8"> -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./style.css?version=6969696969">
        <title>Based Net</title>
        <link rel="shortcut icon" href="favicon.ico?version=5" type="image/x-icon">
        <meta name="description" content="Only Based websites. No ads, no tracking, nothing but based websites.">
    </head>
    <body>
        <?php echo $header;?>
        <h2 style=text-align:center;>📚 Articles</h2>
        <div style=float:left;width:50%;>
        <h3>Recent</h3>
        <ul><li>2021 Jul 03 &ndash; <a href=".">Article About -</a></li><li>2021 Jul 11 &ndash; <a href=".">Article About -</a></li><li>2021 Jul 18 &ndash; <a href=".">Article About -</a></li></ul>
        </div>
        <div style=float:left;width:50%;>
        <h3>Topics</h3>
        <ul id=box><a href="linux.php"><li>🐧Linux</li><a><a href="technology.php"><li>⚙️Technology</li><a><a href="philosophy.php"><li>🎓Philosophy</li><a><a href="science.php"><li>🥼Science</li><a></ul>
        </div>
        <?php echo $workinprogress;?>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <?php echo $footer;?>
    </body>
</html>
<?php $db->close(); ?>