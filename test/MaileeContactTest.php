<?php

require_once 'simpletest/autorun.php';
require 'TestHelper.php';
require 'Mailee.php';

class TestContacts extends UnitTestCase {
  function testCreateContact() {
      $contact = new MaileeContact(array('name'=> 'teste', 'email' => 'teste@mailee.me', 'internal_id' => 10));
      $contact->save();
      $this->assertEqual($contact->name,'teste');
      $this->assertEqual($contact->email,'teste@mailee.me');
      $this->assertEqual($contact->internal_id,10);
  }

/* not working 
  function testFindContact() {
      $c = new MaileeContact(array('name'=> 'teste', 'email' => 'teste@mailee.me', 'internal_id' => 10));
      $c->save();

      $table = new MaileeContact();
      $contact = $table->find_by_internal_id(10);
      $this->assertEqual($contact->email, 'teste@mailee.me');

  }
  */

  function testUpdateContact() {
      $c = new MaileeContact(array('name'=> 'teste', 'email' => 'teste@mailee.me', 'internal_id' => 10));
      $c->save();
      $c->name = "John";
      $c->save();
      $this->assertEqual($c->name, "John");
  }

/* not working
  function testGetAllContacts() {
    $table = new MaileeContact;
    print_r($table->find('all'));
  }
}
*/

?>
