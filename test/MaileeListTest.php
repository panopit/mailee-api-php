<?php

require_once 'simpletest/autorun.php';
require 'TestHelper.php';
require 'Mailee.php';

class TestLists extends UnitTestCase {
  function testCreateList() {
      $list = new MaileeList(array('name'=> 'Active Users'));
      print_r($list);
      $list->save();
      $this->assertEqual($list->name,'Active Users');
      print_r($list);
  }
}
?>