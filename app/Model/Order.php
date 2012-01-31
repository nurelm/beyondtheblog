<?php

class Order extends AppModel {
  public $name = 'Order';
  public $belongsTo = 'User';
}