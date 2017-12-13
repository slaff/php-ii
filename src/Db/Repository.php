<?php
namespace Libs\Db;

// Example of a RepositoryClass pattern
class Repository  {

   public function findById(int $id)
   {
     // TODO: SELECT SQL and find user with id== $id

/*

Represents a record in the users table with id 13

For example:
id: 13
name: John
age: 22
*/

     $user = new User();
     $user->name = "John";
     $user->age = 22;

     return $user;
   }

   public function persist($object)
   {
      // TODO: Store the information into the database.
      return true;
   }

}
