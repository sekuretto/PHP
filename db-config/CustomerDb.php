<?php

class CustomersDb {
  private $dbConnection;

  public function __construct() {
    try {
        $this->dbConnection = new PDO('mysql:host=mysql.labranet.jamk.fi;dbname=N1234;charset=utf8',
                  'N1234', 'se-pitka-mysql-salasana');
        //$this->dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
        //$this->dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
         $this->dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $ex) {
        echo "ErrMsg to enduser!<hr>";
        echo "CatchErrMsg: " . $ex->getMessage() . "<hr>";
        //logError($ex->getMessage());
    }
  }


  /******************************************  getCustomers   ******************************** *****/
  public function getCustomers($searchterm) {
    $customers = array();
    $sql = <<<EndOfSQL
      SELECT
        id,
        name,
        birth_date,
        DATE_FORMAT(created_at, "%d.%m.%Y %H:%i:%s") AS created_at
    FROM customer WHERE name
    LIKE :searchterm 
EndOfSQL;

    $resultObj = $this->dbConnection->prepare($sql);
    $resultObj->bindValue(':searchterm', "%$searchterm%", PDO::PARAM_STR);
    $resultObj->execute();

    while ($obj = $resultObj->fetch(PDO::FETCH_OBJ)) {
      $customers[] = $obj;
    }

    return $customers;
  }


  /******************************************  addCustomer   ***********************************/

  public function addCustomer($name, $birth_date) {
    $addResult = 0;


    $sql = <<<EndOfSQL
      INSERT INTO customer (name, birth_date, created_at)  VALUES
      (:name, :birth_date, (select now()))
EndOfSQL;


    $result = $this->dbConnection->prepare($sql);
    $result->bindValue(':name', $name, PDO::PARAM_STR);
    $result->bindValue(':birth_date', $birth_date, PDO::PARAM_STR);
    $result->execute(); 

    if ($result->rowCount() == 1) {
      $addResult = $this->dbConnection->lastInsertId();
    } else {
      $addResult = 0; // voi katsoa myös echo $this->dbConnection->error;
    }

    return $addResult;
  }

    /******************************************  updateCustomer   ***********************************/

    public function updateCustomer($id, $name, $birth_date) {
        $updateResult = 0;
    
    
        $sql = <<<EndOfSQL
          UPDATE customer 
          SET name = :name, birth_date = :birth_date
          WHERE id = :id
    EndOfSQL;
    
    
        $result = $this->dbConnection->prepare($sql);
        $result->bindValue(':id', $id, PDO::PARAM_STR);
        $result->bindValue(':name', $name, PDO::PARAM_STR);
        $result->bindValue(':birth_date', $birth_date, PDO::PARAM_STR);
        $result->execute(); 
    
        if ($result->rowCount() == 1) {
          $updateResult = 1;
        } else {
          $updateResult = 0;
        }
    
        return $updateResult;
      }

}

?>