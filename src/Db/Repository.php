<?php
namespace Libs\Db;

// Example of a RepositoryClass pattern
class Repository  
{
   private $pdo;

   public function __construct($dbConfig) 
   {
       	$this->pdo = new \PDO($dbConfig['dsn'],
                             $dbConfig['username'],
                             $dbConfig['password'],
                             $dbConfig['options']
                             );
   }

   public function findById(int $id)
   {
      $sql = "SELECT * FROM customers WHERE id= :id "; 
      // $id=" =0; DELETE FROM customers;   "  SQL injection!  
 
      $stmt = $this->pdo->prepare($sql);
      $stmt->bindParam(':id', $id);
      $stmt->execute();

      $rows = $stmt->fetchAll(\PDO::FETCH_ASSOC);

      if(!count($rows)) {
         return null;
      }

      // ClassProperties hydration, Class Methods getName(), setName()
      $user = new User();

      $row = $rows[0];
      foreach($row as $key => $value) {
         $user->{$key} = $value; 
      }

      return $user;
   }

   public function persist($object)
   {
      // TODO: Store the information into the database.

      // PLUS Points: Use prepared statements to store the data

      return true;
   }
}
