<?php

class Mural extends AppModel {
	public $primaryKey = '_id';
	var $useDbConfig = 'mongo';
	

	var $_schema = array(
	    'usuarios_id'   => array('type' => 'integer'),
	    'nome'	    => array('type' => 'string'),
	    'titulo'        => array('type' => 'string'),
	    'texto'         => array('type' => 'text'),
	    'data_criacao'  => array('type' => 'timestamp'),
	    'like' => array( array('type' => 'integer')),
	    'dislike' => array( array('type' => 'integer')),
	    'comentarios'   => array(
		'usuarios_id'   => array('type' => 'integer'),
		'nome'		=> array('type' => 'string'),
		'texto'		=> array('type' => 'text'),
		'data_criacao'  => array('type' => 'timestamp'),
	    )
        );
	/*
	var $mongoSchema = array(
			'title' => array('type'=>'string'),
			'body'=>array('type'=>'string'),
			'hoge'=>array('type'=>'string'),
			'created'=>array('type'=>'datetime'),
			'modified'=>array('type'=>'datetime'),
			);
*/
}
