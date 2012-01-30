<?php

class Comentario extends AppModel{
    var $name = 'Comentario';
    var $primaryKey = '_id';
    var $useDbConfig = 'mongo';

    var $mongoSchema = array(
	'nome' => array('type'=>'string'),
	'login'=>array('type'=>'string'),
	'email'=>array('type'=>'string'),
	'created'=>array('type'=>'datetime'),
	'modified'=>array('type'=>'datetime'),
	);


}
