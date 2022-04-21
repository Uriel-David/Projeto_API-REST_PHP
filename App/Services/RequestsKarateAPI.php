<?php
  namespace App\Services;

  class RequestsKarateAPI
  {
    public static function insertAthleteRequest($connection, string $table, array $data)
    {
      $sql = 'INSERT INTO '.$table.' (`id`, `nome`, `nif`, `morada`, `telefone`, `email`, `data_nascimento`, `altura`, `peso`, `modalidade`, `cinturao`, `estilo`) VALUES
      (NULL, :nome, :nif, :morada, :telefone, :email, :nascimento, :altura, :peso, :modalidade, :cinturao, :estilo)';
      $stmt = $connection->prepare($sql);
      $stmt->bindValue(':nome', $data['nome']);
      $stmt->bindValue(':nif', $data['nif']);
      $stmt->bindValue(':morada', $data['morada']);
      $stmt->bindValue(':telefone', $data['telefone']);
      $stmt->bindValue(':email', $data['email']);
      $stmt->bindValue(':nascimento', $data['data_nascimento']);
      $stmt->bindValue(':altura', $data['altura']);
      $stmt->bindValue(':peso', $data['peso']);
      $stmt->bindValue(':modalidade', $data['modalidade']);
      $stmt->bindValue(':cinturao', $data['cinturao']);
      $stmt->bindValue(':estilo', $data['estilo']);
      $stmt->execute();

      if ($stmt->rowCount() > 0) {
          return 'Atleta inserido com sucesso!';
      } else {
          throw new \Exception("Falha ao inserir Atleta!");
      }
    }

    public static function updateAthleteRequest($connection, string $table, int $id, array $data)
    {
      $sqlSupport = 'SELECT * FROM '.$table.' WHERE id = :id';
      $stmt = $connection->prepare($sqlSupport);
      $stmt->bindValue(':id', $id);
      $stmt->execute();
      $athleteData = $stmt->fetchAll(\PDO::FETCH_ASSOC);

      $sql = 'UPDATE '.$table.' SET nome = :nome, nif = :nif, morada = :morada, telefone = :telefone, email = :email, data_nascimento = :nascimento, altura = :altura, peso = :peso, modalidade = :modalidade, cinturao = :cinturao, estilo = :estilo WHERE '.$table.'.id = :id';
      $stmt = $connection->prepare($sql);
      $stmt->bindValue(':id', $id);
      
      if($data['nome'] == null || "") {
          $stmt->bindValue(':nome', $athleteData[0]["nome"]);
      } else {
          $stmt->bindValue(':nome', $data['nome']);
      }

      if($data['nif'] == null || "") {
          $stmt->bindValue(':nif', $athleteData[0]["nif"]);
      } else {
          $stmt->bindValue(':nif', $data['nif']);
      }

      if($data['morada'] == null || "") {
        $stmt->bindValue(':morada', $athleteData[0]["morada"]);
      } else {
          $stmt->bindValue(':morada', $data['morada']);
      }

      if($data['telefone'] == null || "") {
        $stmt->bindValue(':telefone', $athleteData[0]["telefone"]);
      } else {
          $stmt->bindValue(':telefone', $data['telefone']);
      }

      if($data['email'] == null || "") {
        $stmt->bindValue(':email', $athleteData[0]["email"]);
      } else {
          $stmt->bindValue(':email', $data['email']);
      }

      if($data['data_nascimento'] == null || "") {
        $stmt->bindValue(':data_nascimento', $athleteData[0]["data_nascimento"]);
      } else {
          $stmt->bindValue(':nascimento', $data['data_nascimento']);
      }
      
      if($data['altura'] == null || "") {
        $stmt->bindValue(':altura', $athleteData[0]["altura"]);
      } else {
          $stmt->bindValue(':altura', $data['altura']);
      }

      if($data['peso'] == null || "") {
        $stmt->bindValue(':peso', $athleteData[0]["peso"]);
      } else {
          $stmt->bindValue(':peso', $data['peso']);
      }

      if($data['modalidade'] == null || "") {
        $stmt->bindValue(':modalidade', $athleteData[0]["modalidade"]);
      } else {
          $stmt->bindValue(':modalidade', $data['modalidade']);
      }

      if($data['cinturao'] == null || "") {
        $stmt->bindValue(':cinturao', $athleteData[0]["cinturao"]);
      } else {
          $stmt->bindValue(':cinturao', $data['cinturao']);
      }

      if($data['estilo'] == null || "") {
        $stmt->bindValue(':estilo', $athleteData[0]["estilo"]);
      } else {
          $stmt->bindValue(':estilo', $data['estilo']);
      }

      $stmt->execute();

      if ($stmt->rowCount() > 0) {
          return 'Atleta atualizado com sucesso!';
      } else {
          throw new \Exception("Falha ao atualizar Atleta!");
      }
    }
  }
?>