<?php

include( 'Mailee.php' );
define('MAILEE_CONFIG_SITE', 'http://api.525636841fe05.testclientfoo.mailee.me');

/* LISTING ELEMENTS */

// $contact = new MaileeContact();
// $contacts = $contact->find('all');
// print_r($contacts)

// $list = new MaileeList();
// $lists = $list->find('all');
// print_r($lists)

// $tpl = new MaileeTemplate();
// $tpls = $tpl->find('all');
// print_r($tpls)

// $message = new MaileeTemplate();
// $messages = $message->find('all');
// print_r($messages)

/* GETTING ITEMS */

// $contact = new MaileeContact();
// print_r( $contact->find(2994619) );

// $list = new MaileeList();
// print_r( $list->find(23748) );

// $tpl = new MaileeTemplate();
// print_r( $tpl->find(4083) );

/* CREATING STUFF */
// $contact = new MaileeContact(array('email' => 'php@php.com'));
// $c = $contact->save();
// print_r( $c );

// $message = new MaileeMessage(array('from_name' => 'Maiz', 'from_email' => 'maiz@softa.com.br', 'title' => 'PHP', 'subject' => 'PHP', 'emails' => 'maiz@softa.com.br', 'html' => 'Yo'));
// $m = $message->save();
// print_r( $m );

/* UPDATING STUFF */
// $contact = new MaileeContact(array('id' => 4921639, 'name' => 'Yo'));
// print_r( $contact->save() );

?>