<?
class User extends AppModel {
    var $name = 'User';
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
        'email' => 'email');
    
    
    
}

