<?php

class User extends CI_Model{




  public function getUsers()
  {
    return [
       [ 'name' => "ola"],
       [ 'name' => "Philip"]
    ];
  }
}
