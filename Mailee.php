<?php
/*

  // Instalação
  sudo apt-get install php5 php5-cli php5-curl

  // Uso
  Ver o sample.php

*/
require 'ActiveResource.php';

class MaileeConfig extends ActiveResource{
  var $site = MAILEE_CONFIG_SITE;
}

class MaileeContact extends MaileeConfig{
  var $element_name = 'contacts';
  function find_by_internal_id($iid){
    $find = $this->find('first', array('internal_id' => $iid));
    return $find[0];
  }
  function unsubscribe($data=array()){
    #E.g. data --> {:reason => 'Trip to nowhere', :spam => false}
    return $this->put('unsubscribe', $data);
  }
  function list_subscribe($data=array()){
	  #E.g. data --> {:list_id => 111} or {:list => 'MyList'} in the second case if the list doesnt exist it will be created
    return $this->put('list_subscribe', $data);
  }
  function list_unsubscribe($data=array()){
	  #E.g. data --> {:list_id => 111} or {:list => 'MyList'}
    return $this->put('list_unsubscribe', $data);
  }
}

class MaileeList extends MaileeConfig{
  var $element_name = 'lists';
}

class MaileeTemplate extends MaileeConfig{
  var $element_name = 'templates';
}

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
