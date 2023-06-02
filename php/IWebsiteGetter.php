<?php
namespace Basednet;
require_once __DIR__."/Website.php";

interface IWebsiteGetter {
    /**
     * @param string[] $tags Tags to serach by
     * @return Website[] bundle of websites.
     */
    public function GetWebsitesByTags(Array $tags): Array;
    /**
     * @param int $id Id to get by
     * @return Website
     */
    public function GetWebsiteById(int $id): Website;
    /**
     * @param string $url Get URLs
     * @return Website[] bundle of websites
     */
    public function GetWebsitesByURL(string $url): Array;
    /**
     * @param int $upvotes 
     */
    public function GetWebsitesByUpvotes(int $upvotes): Array;
    
}

?>