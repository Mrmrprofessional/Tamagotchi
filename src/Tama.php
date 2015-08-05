<?php
class Tama
{
    private $feed;
    private $play;
    private $sleep;


    function __construct($feed, $play, $sleep)
    {
        $this->feed = $feed;
        $this->play = $play;
        $this->sleep = $sleep;
    }

    function setFeed ($new_feed)
    {
        $this->feed = (integer) $new_feed;
    }

    function getFeed()
    {
        return $this->feed;
    }

    function setPlay ($new_play)
    {
        $this->play = (integer) $new_play;

    }

    function getPlay()
    {
        return $this->play;
    }

    function setSleep ($new_sleep)
    {
        $this->sleep = (integer) $new_sleep;

    }

    function getSleep()
    {
        return $this->sleep;
    }

    function feedTama()
    {
        $current_feed = $this->getFeed();
        $this->setFeed($current_feed + 1);
        $current_play = $this->getPlay();
        $this->setPlay($current_play - 1);
        $current_sleep = $this->getSleep();
        $this->setSleep($current_sleep - 1);
    }

    function playTama()
    {
        $current_feed = $this->getFeed();
        $this->setFeed($current_feed - 1);
        $current_play = $this->getPlay();
        $this->setPlay($current_play + 1);
        $current_sleep = $this->getSleep();
        $this->setSleep($current_sleep - 1);
    }

    function sleepTama()
    {
        $current_feed = $this->getFeed();
        $this->setFeed($current_feed - 1);
        $current_play = $this->getPlay();
        $this->setPlay($current_play - 1);
        $current_sleep = $this->getSleep();
        $this->setSleep($current_sleep + 1);
    }
    function save()
    {
        array_push($_SESSION['list_of_places'], $this);
    }

    static function getAll()
    {
        return $_SESSION['list_of_places'];
    }

    static function deleteAll()
    {
        $_SESSION['list_of_places'] = array();
    }

}
?>
