<?php

App::uses('AuthComponent', 'Controller/Component');

class User extends AppModel {

  public $name = 'User';
  public $hasMany = array(
      'Order' => array(
          'dependent' => true
      )
  );


}
