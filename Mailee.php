<?php
/*
  // Uso
  define('MAILEE_CONFIG_SITE', 'YOUR KEY');
  $contact = new MaileeContact();
  $contacts = $contact->find('all');
  echo count($contacts . "\n");
  foreach($contacts as $c){
    echo $c->email . "\n";
  }

  $contact = new MaileeContact();
  print_r($contact->find('first'));

  $contact = new MaileeContact();
  print_r($contact->find_by_internal_id('412905575'));

*/
//  
  
  require 'ActiveResource.php';
  class MaileeConfig extends ActiveResource{
    var $site = MAILEE_CONFIG_SITE;
    var $element_name = 'contacts';
  }
  class MaileeContact extends MaileeConfig{
    function find_by_internal_id($iid){
      $find = $this->find('first', array('internal_id' => $iid));
      return $find[0];
    }
    function unsubscribe($data=array()){
      #E.g. data --> {:reason => 'Trip to nowhere', :spam => false}
      
      //if(!$data['reason']) $data['reason'] = 'Motivo não especificado';
      //, array('unsubscribe' => $data)
      return $this->put('unsubscribe');
    }
  }
  class MaileeList extends MaileeConfig{
  }

  $klass = new MaileeContact();
  $contact = $klass->find_by_internal_id('412905575');
  print_r($contact->unsubscribe());

?>
