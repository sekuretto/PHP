<?php

class CustomersDb {
  private $dbConnection;

  public function __construct() {
    try {
        $this->dbConnection = new PDO('mysql:host=mysql.labranet.jamk.fi;dbname=N1234;charset=utf8',
                  'K8691', 'mjJEVf133cWUTxTVNtW9V8E3Q1RNxkqV');
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

}