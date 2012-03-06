<?php

class MaileeMessage extends MaileeConfig{
  var $element_name = 'messages';
  function test($contacts){
    $str = join($contacts,'&contacts[]=');
    return $this->put('test', array('contacts[]' => $str), false);
  }
  function ready($when = 'now', $date = '', $hour = ''){
    return $this->put('ready', array('when' => $when, 'after[date]' => $date, 'after[hour]' => $hour), false);
  }
}

?>
