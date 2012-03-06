<?php

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
?>
