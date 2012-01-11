<?
class User extends AppModel {
    var $name = 'User';
	var $displayField = 'login';
    
    var $validate = array(
        'login' => array(
            'alphanumeric' => array(
                'rule' => 'alphaNumeric',
                'required' => true,
                'message' => 'Letras e números somente'
                ),
            'between' => array(
                'rule' => array('between', 5, 15),
            'message' => 'Entre 5 e 15 caracteres'
            )
        ),
        'pass' => array(
            'rule' => array('minLength', '8'),
            'message' => 'Mínimo de 8 caracteres'
        ),
        'email' => 'email',
        'dt_created' => array(
            'rule' => 'date',
            'message' => 'Insira uma data válida',
            'allowEmpty' => true
        )
    );
    
    public function beforeSave() {
    	if (isset($this->data[$this->alias]['pass'])) {
    		$this->data[$this->alias]['pass'] = AuthComponent::password($this->data[$this->alias]['pass']);
    	}
    	return true;
    }
}

