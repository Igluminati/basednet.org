<?php declare(strict_types=1);

namespace Basednet;


/**
 * @class Website
 * Storage class for website data. Generated when receiving data from the database.
 */
class Website {
    protected int $id;
    protected int $upvotes;
    protected int $downvotes;
    protected int $rating;
    protected float $voteratio;
    protected string $url;
    protected string $hashtags;

    public function __construct(int $id, string $url, string $hashtags, int $upvotes=0, int $downvotes=0) {
        $this->id = $id;
        $this->url = $url;
        $this->hashtags = $hashtags;
        $this->upvotes = $upvotes;
        $this->downvotes = $downvotes;
        $this->rating = $upvotes + $downvotes;
        $this->voteratio = $downvotes > 0 ? (float) ($upvotes / $downvotes) : 1.0;
    }

    public function getId(): int          { return $this->id; }
    public function getUpvotes(): int     { return $this->upvotes; }
    public function getDownvotes(): int   { return $this->downvotes; }
    public function getRating(): int      { return $this->rating; }
    public function getVoteRatio(): float { return $this->voteratio; }
    public function getUrl(): string      { return $this->url; }
    public function getHashtags(): string { return $this->hashtags; }
    public function __toString(): string  { return $this->getUrl(); }
        
}
?>
