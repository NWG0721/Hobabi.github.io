<?php

interface IUsersRepository
{
 public function SelectAll();

 public function SelectByFilter($parameter);

 public function SelectById($userID);

 public function Insert($table);

 public function Upadte($table);

 public function Delete($table);

 public function DeleteById($userID);
}

?>