<?php
class UserFixture extends CakeTestFixture {

		public $fixtures = array('app.user');
		public $fields = array(
		'id' => array('type' => 'integer', 'key' => 'primary'),
		'username' => array('type' => 'string', 'length' => 15, 'null' => false),
		'password' => 'text',
		'fname' => 'text',
		'lname' => 'text',
		'email' => 'text',
		'profile_id' => array('type' => 'integer', 'default' => '2', 'null' => false),
		'active' => array('type' => 'integer', 'default' => '0', 'null' => false),
		'created' => 'datetime',
		'modiefied' => 'datetime'
      );
      public $records = array(
          array ('id' => 1, 'username' => 'testfix01', 'password' => '55d5bc2cc74098c22a9ba6616bfdb413ade65c95', 'fname' => 'Teste', 'lname' => 'Fixture 01', 'email' => 'email@domain.com', 'profile_id' => '2',  'active' => '1', 'created' => '2012-01-01 10:20:30', 'modiefied' => '2012-01-01 10:20:40'),
          array ('id' => 2, 'username' => 'testfix02', 'password' => '55d5bc2cc74098c22a9ba6616bfdb413ade65c95', 'fname' => 'Teste', 'lname' => 'Fixture 02', 'email' => 'email@domain.com', 'profile_id' => '2',  'active' => '1', 'created' => '2012-01-01 10:20:30', 'modiefied' => '2012-01-01 10:20:40'),
          array ('id' => 3, 'username' => 'testfix03', 'password' => '55d5bc2cc74098c22a9ba6616bfdb413ade65c95', 'fname' => 'Teste', 'lname' => 'Fixture 03', 'email' => 'email@domain.com', 'profile_id' => '2',  'active' => '1', 'created' => '2012-01-01 10:20:30', 'modiefied' => '2012-01-01 10:20:40'),
          );
 }
