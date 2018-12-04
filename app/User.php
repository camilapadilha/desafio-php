<?php
class User extends Model{
 private $id;
 private $name;
 private $phone;

 public function getId()
 { 
     return $this->id; 
 }

 public function setId($id)
 { 
     $this->id = $id; 
 }

 public function getName()
 {
     return $this->name;
 }

 public function setName($name)
 {
     $this->name = $name;
 }

 public function getPhone()
 {
     return $this->phone;
 }

 public function setPhone($phone)
 {
     $this->phone = $phone;
 }

}