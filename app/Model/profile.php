<?
class Profile extends AppModel{
 
 public $name = 'Profile';
        
    var $hasMany = array(
                'User' => array('className' => 'User',
                            'joinTable' => 'users',
                            'foreignKey' => 'profile_id',
                            'unique' => true
    )
    );
 
}
?>