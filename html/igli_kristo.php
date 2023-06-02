<?php
namespace Basednet;
require_once "{$_SERVER["DOCUMENT_ROOT"]}/../php/DatabaseAuthenticator.php";
require_once __DIR__."/../php/Website.php";
require __DIR__."/igli_style.php";
//$db = $dbauth->getMysqliHandler();
?>
<!DOCTYPE html>
<html>
    <head>
	<!-- [edit] ~mfw @ Tue Mar 30 07:13:33 2021
		<meta charse="UTC-8"> -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./style.css?version=433332332230">
        <title>Igli Kristo</title>
        <link rel="shortcut icon" href="favicon.ico?version=5" type="image/x-icon">
        <meta name="description" content="Only Based websites. No ads, no tracking, nothing but based websites.">
    </head>
    <body>
        <?php echo $header;?>
        <h1 style=text-align:center;>📚 Articles</h1>
        <div style=float:center;width:100%;>
        <ul id=box><a href="linux.php"><li>🐧</li><a><a href="technology.php"><li>⚙️</li><a><a href="philosophy.php"><li>🎓</li><a><a href="science.php"><li>yo</li><a></ul>
        </div>
        <h1 style=text-align:center;>⚙️ Projects</h1>
        <div style=float:center;width:100%;>
        <ul id=box style=color:black;>
            <h2>💻WeObserve</h2><a href='https://github.com/Igluminati/WeObserve'>😺Github<a><br><a>A program which watches an array of directories indicated in a json config file for changes such as file creation,
deletion and modification. These events are then outputted into a txt file with information of the type of event, file
directory and private IP address of the user.</a><br><img src="images/wegt.png" alt="WIP">
            </br><a><h2>🤖Jobot</h2><br><img src="images/shrek_wip.jpg?version=3" alt="WIP"></ul>
        </div>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <?php echo $footer;?>
    </body>
</html>
<?php $db->close(); ?>
