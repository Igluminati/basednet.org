<?php
namespace Basednet;
require_once "{$_SERVER["DOCUMENT_ROOT"]}/../php/DatabaseAuthenticator.php";
require_once __DIR__."/../php/Website.php";
require __DIR__."/style.php";
//$db = $dbauth->getMysqliHandler();
?>
<!DOCTYPE html>
<html>
    <?php echo $head;?>
    <body>
    <?php echo $header;?>
    <div>
        <h1 style=text-align:center;>🐧Linux Articles</h1>
        <ul><li></li></ul>
        </div>
    <?php echo $footer;?>
    </body>
</html>
<?php $db->close(); ?>