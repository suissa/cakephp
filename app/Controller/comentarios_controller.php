<?php 

class ComentariosController extends AppController{
    var $name = 'Comentarios';

    var $uses = array('Comentario'); 
    public $ext=".php";    

    function index(){
	     $usuarios = $this->Comentario->find('all');
	     $this->set('usuarios', $usuarios);

    }
    function add(){
	if(!empty($this->data)):
			if($this->Comentario->save($this->data)):
					$this->flash(__('Comentario Cadastrado.', true), array('action' => 'index'));
			endif;
	endif;
    }

}
