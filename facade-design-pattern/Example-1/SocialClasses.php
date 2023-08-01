<?php
// Class to tweet on Twitter.
class CodeTwit {
    function tweet($status, $url)
    {
      var_dump('Tweeted:'.$status.' from:'.$url);
    }
  }
  
  // Class to share on Google plus.
  class Googlize {
    function share($url)
    {
      var_dump('Shared on Google plus:'.$url);
    }
  }
  
  // Class to share in Reddit.
  class Reddiator {
    function share($url, $title)
    {
      var_dump('Reddit! url:'.$url.' title:'.$title);
    }
  }
  
?>