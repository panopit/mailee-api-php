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
}

class MaileeList extends MaileeConfig{
  var $element_name = 'lists';
}

class MaileeTemplate extends MaileeConfig{
  var $element_name = 'templates';
}

class MaileeMessage extends MaileeConfig{
  var $element_name = 'messages';
  function test($data=array()){
    #E.g. data --> {:reason => 'Trip to nowhere', :spam => false}
    return $this->put('test', $data);
  }
  function ready($data=array()){
    #E.g. data --> {:reason => 'Trip to nowhere', :spam => false}
    return $this->put('ready', $data);
  }
}

?>