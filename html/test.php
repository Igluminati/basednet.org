<?php
namespace Basednet;
require_once "{$_SERVER["DOCUMENT_ROOT"]}/../php/DatabaseAuthenticator.php";
require_once "{$_SERVER["DOCUMENT_ROOT"]}/../php/VoteHandler.php";
require_once "{$_SERVER["DOCUMENT_ROOT"]}/../php/WebsiteGetter.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<pre>
    <?php
        $dbhandler = $dbauth->getMysqliHandler();
        $webgetter = new WebsiteGetter($dbhandler);

        $webgetter->GetWebsitesByTags([
            "based", "imageboard", "schizo"
        ]);
        
        $votehandler = new VoteHandler();

        $website = $votehandler->getWebsite(1);
        
        echo $website;

        echo "\n";
        
    ?>
</pre>
</body>
</html>