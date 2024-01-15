<?php
  // namespace UtilController;

  class Utils{
    public static function generateSessionID(){
      return uniqid(date('YmdHis'), true);
    }

    public function fetchRecord(PDO $conn_id, string $table_name, array $select_fields, array $column_filter = [], string $select_type = "single", bool $debug = false){
      $selected_columns = implode(", ", $select_fields);
      $filter = $this->filterParams($column_filter);

      $query = "SELECT $selected_columns FROM $table_name";

      if(!empty($filter['string'])){
        $query .= " WHERE ". $filter['string'];
      }

      try{
        $statement = $conn_id->prepare($query);
        $statement->execute($filter['params']);
        $results = $select_type === "single" ? $statement->fetch(PDO::FETCH_ASSOC) : $statement->fetchAll(PDO::FETCH_ASSOC);
      }
      catch(PDOException $e){
        $error_info = $e->getMessage();

        if($debug){
          echo "<pre>";
          var_dump("Error: ". $error_info);
          echo "</pre><br/>";
          $this->sqlDebug($statement);
        }

        return ['error'=> $error_info];
      }

      if($debug){
        $this->sqlDebug($statement);
      }

      return $results;
    }

    public function updateRecord(PDO $conn_id, string $table_name, array $update_params, array $column_filter = [], bool $debug = false){
      $update_set = $this->updateSets($update_params);
      $filter = $this->filterParams($column_filter);

      $query = "UPDATE $table_name SET $update_set";

      if(!empty($filter['string'])){
        $query .= " WHERE ". $filter['string'];
      }

      try{
        $statement = $conn_id->prepare($query);
        $statement->execute($filter['params']);
      }
      catch(PDOException $e){
        $error_info = $e->getMessage();

        if($debug){
          echo "<pre>";
          var_dump("Error: ". $error_info);
          echo "</pre><br/>";
          $this->sqlDebug($statement);
        }

        return ['error'=> $error_info];
      }

      if($debug){
        $this->sqlDebug($statement);
      }
    }

    private function updateSets(array $arr_details){
      if(empty($arr_details)){
        return "";
      }

      $string = "";

      foreach($arr_details as $key => $value){
        $string .= "$key = '$value', ";
      }

      return rtrim($string, ", ");

    }

    private function filterParams(array $arr_details){
      if(empty($arr_details)){
        return ["string" => "", "params" => []];
      }

      $condition = "";
      $params = [];

      foreach($arr_details as $key => $value){
        $condition .= " AND $key = ?";
        $params[] = $value;
      }
      $string = ltrim($condition, " AND");

      return compact("string", "params");
    }

    private function sqlDebug($statement){
      echo "<pre>";
      var_dump($statement->debugDumpParams());
      echo "</pre>";
      die;
    }
  }
?>