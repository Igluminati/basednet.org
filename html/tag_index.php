<?php
namespace Basednet;
require_once "{$_SERVER["DOCUMENT_ROOT"]}/../php/DatabaseAuthenticator.php";
$db = $dbauth->getMysqliHandler();

# Operations on the database
$db->query("SELECT column FROM my_table WHERE id < 10");

$db->close();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./style.css">
        <title>Based Net</title>
        <meta name="description" content="Only Based websites. No ads, no tracking, nothing but based websites.">
    </head>
    <body>
        <div class="banner">
            <h1> Based Net </h1>
        </div>
        <hr/>
        <p><i>Filtering websites tagged:</i> <b>$TAGS</b></p>
    <body>
</html>