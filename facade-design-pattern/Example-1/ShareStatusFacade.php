<?php 
require_once("SocialClasses.php");

// $twitter= new CodeTwit();
// var_dump(get_class_methods($twitter));
class ShareStatusFacade{
    protected $twitter;
    protected $google;
    protected $reddit;

    function __construct( $twitter, $google, $reddit){
        $this->twitter=$twitter;
        $this->google=$google;
        $this->reddit=$reddit;
    }
    function share($url,$title,$status){
        $this->twitter->tweet($status,$url);
        $this->google->share($status,$url);
        $this->reddit->share($url,$title);
    }
}

$twitter=new CodeTwit;
$google=new Googlize;
$reddit=new Reddiator;

$shareStatue=new ShareStatusFacade( $twitter, $google, $reddit);
$shareStatue->share("https://mynurltest.com","my new title","my greate status");

?>