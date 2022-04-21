<?php
  namespace App\Services;

  class RequestsAPI
  {
    public static function selectAthleteRequest($connection, string $table, string $id) {
      $sql = 'SELECT * FROM '.$table.' WHERE id = :id';
      $stmt = $connection->prepare($sql);
      $stmt->bindValue(':id', $id);
      $stmt->execute();

      if ($stmt->rowCount() > 0) {
          return $stmt->fetch(\PDO::FETCH_ASSOC);
      } else {
          throw new \Exception("Nenhum Atleta encontrado!");
      }
    }

    public static function selectAthletesAllRequest($connection, string $table) {
      $sql = 'SELECT * FROM '.$table;
      $stmt = $connection->prepare($sql);
      $stmt->execute();

      if ($stmt->rowCount() > 0) {
          return $stmt->fetchAll(\PDO::FETCH_ASSOC);
      } else {
          throw new \Exception("Nenhum Atleta encontrado!");
      }
    }

    public static function deleteAthleteRequest($connection, string $table, int $id)
    {
      $sql = 'DELETE FROM '.$table.' WHERE '.$table.'.id = :id';
      $stmt = $connection->prepare($sql);
      $stmt->bindValue(':id', $id);
      $stmt->execute();

      if ($stmt->rowCount() > 0) {
          return 'Atleta deletado com sucesso!';
      } else {
          throw new \Exception("Falha ao deletar Atleta!");
      }
    }
  }
?>