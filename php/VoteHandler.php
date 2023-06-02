<?php
declare(strict_types=1);
namespace Basednet;

# dependencies
require_once __DIR__."/DatabaseAuthenticator.php";
require_once __DIR__."/Website.php";


class VoteHandler {

    // Predefined STMT statements to prepare
    protected const GET_SITE_INFO = "SELECT id,url,hashtags,upvotes,downvotes FROM websites WHERE id = ?";
    protected const GET_SITE_INFO_PARAMS = "i";
    protected const TEST_FOR_DOUBLES = "SELECT id,url FROM websites WHERE url LIKE ?";
    protected const TEST_FOR_DOUBLES_PARAMS = "s";
    protected const ADD_WEBSITE = "INSERT INTO websites (url, hashtags, upvotes, downvotes) VALUES (?,?,?,?)";
    protected const ADD_WEBSITE_PARAMS = "ssii";
    protected const UPVOTE = "UPDATE websites SET (upvotes = upvotes + 1) WHERE id = ?";
    protected const UPVOTE_PARAMS = "i";
    protected const DOWNVOTE = "UPDATE websites SET (downvotes = downvotes + 1) WHERE id = ?";
    protected const DOWNVOTE_PARAMS = "i";

    private \mysqli $db;
    
    /**
     * @param \mysqli|null $db Valid mysqli object for database operations (if empty new is created)
     */
    public function __construct(?\mysqli $db=null) {
        if($db === null) {
            $dbauth = new DatabaseAuthenticator();
            $this->db = $dbauth->getMysqliHandler();
        } else {
            $this->db = $db;
        }
    }
    public function __destruct() { /* $this->db->close(); */ }
    public function addVote(Website $site, int $votevalue): Website {
        $upvotes = $site->getUpvotes();
        return new Website(-1,"null","null");
    }
    
    public function addWebsite(string $url, string $hashtags): Website {
        $upvotes = $downvotes = 0;
        if(!$stmt = $this->db->prepare(self::ADD_WEBSITE)){
            throw new \RuntimeException("STMT prepare failed.");
        }
        if(!$stmt->bind_param(self::ADD_WEBSITE_PARAMS,$url,$hashtags,$upvotes,$downvotes)){
            throw new \RuntimeException("STMT bind param failed.");
        }
        if(!$stmt->execute()){
            throw new \RuntimeException("STMT execute failed.");
        }
        $id = $stmt->insert_id;
        if(!$stmt->close()){
            throw new \RuntimeException("STMT close failed.");
        }
        return new Website($id, $url, $hashtags, $upvotes, $downvotes);

    }
    public function findWebsite(int $id, string $url) {

    }
    public function getWebsite(int $id): Website {
        return new Website(-1,"www.thisman.org","#schizo",20,3);
    }
    private function STMTExecuter(\mysqli_stmt $stmt_handler,string $param_types,Array $params): bool {
        $status = true;
        $status = !!(call_user_func_array([$stmt_handler,"bind_param"],array_merge($params)));
        
        
        return $status;
    }
}


?>