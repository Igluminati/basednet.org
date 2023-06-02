<?php
namespace Basednet;

require_once __DIR__."/IWebsiteGetter.php";
require_once __DIR__."/Website.php";

class WebsiteGetter implements IWebsiteGetter {

    

    /**
     * @param \mysqli $dbhandler mysqli object to access database
     */
    public function __construct(\mysqli $dbhandler){

    }
    /**
     * @param string[] $tags Tags to serach by
     * @return Website[] bundle of websites.
     */
    public function GetWebsitesByTags(Array $tags): Array {
        return [];
    }
    /**
     * @param int $id Id to get by
     * @return Website
     */
    public function GetWebsiteById(int $id): Website {
        return new Website(-1,'null','null');
    }
    /**
     * @param string $url Get URLs
     * @return Website[] bundle of websites
     */
    public function GetWebsitesByURL(string $url): Array {
        return [];
    }
    /**
     * 
     * @param int $upvotes 
     */
    public function GetWebsitesByUpvotes(int $upvotes): Array {
        return [];
    }
    
}

?>