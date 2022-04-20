<?php
  namespace App\Models;

  class AthletesKarate
  {
      private static $table = 'athletes_karate';

      public static function selectAthlete(int $id) {
        $connectionPDO = new \PDO(DBDRIVE.': host='.DBHOST.'; dbname='.DBNAME, DBUSER, DBPASS);

        $sql = 'SELECT * FROM '.self::$table.' WHERE id = :id';
        $stmt = $connectionPDO->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            return $stmt->fetch(\PDO::FETCH_ASSOC);
        } else {
            throw new \Exception("Nenhum Atleta encontrado!");
        }
    }

    public static function selectAthletesAll() {
        $connectionPDO = new \PDO(DBDRIVE.': host='.DBHOST.'; dbname='.DBNAME, DBUSER, DBPASS);

        $sql = 'SELECT * FROM '.self::$table;
        $stmt = $connectionPDO->prepare($sql);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        } else {
            throw new \Exception("Nenhum Atleta encontrado!");
        }
    }

    public static function insertAthlete($data)
    {
        $connectionPDO = new \PDO(DBDRIVE.': host='.DBHOST.'; dbname='.DBNAME, DBUSER, DBPASS);

        $sql = 'INSERT INTO '.self::$table.
        ' (`id`, `nome`, `nif`, `morada`, `telefone`, `email`, `data_nascimento`, `altura`, `peso`, `modalidade`, `cinturao`, `estilo`) VALUES
        (NULL, :nome, :nif, :morada, :telefone, :email, :nascimento, :altura, :peso, :modalidade, :cinturao, :estilo)';
        $stmt = $connectionPDO->prepare($sql);
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

    public static function updateAthlete($id, $data)
    {
      $connectionPDO = new \PDO(DBDRIVE.': host='.DBHOST.'; dbname='.DBNAME, DBUSER, DBPASS);

      $sqlSupport = 'SELECT * FROM '.self::$table.' WHERE id = '.$id;
      $stmt = $connectionPDO->prepare($sqlSupport);
      $stmt->execute();
      $athleteData = $stmt->fetchAll(\PDO::FETCH_ASSOC);

      $sql = 'UPDATE '.self::$table.' SET nome = :nome, nif = :nif, morada = :morada, telefone = :telefone, email = :email, data_nascimento = :nascimento, altura = :altura, peso = :peso, modalidade = :modalidade, cinturao = :cinturao, estilo = :estilo WHERE '.self::$table.'.id = '.$id;
      $stmt = $connectionPDO->prepare($sql);
      
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
          $athleteData[0]["morada"];
      } else {
          $stmt->bindValue(':morada', $data['morada']);
      }

      if($data['telefone'] == null || "") {
          $athleteData[0]["telefone"];
      } else {
          $stmt->bindValue(':telefone', $data['telefone']);
      }

      if($data['email'] == null || "") {
          $athleteData[0]["email"];
      } else {
          $stmt->bindValue(':email', $data['email']);
      }

      if($data['data_nascimento'] == null || "") {
          $athleteData[0]["data_nascimento"];
      } else {
          $stmt->bindValue(':nascimento', $data['data_nascimento']);
      }
      
      if($data['altura'] == null || "") {
          $athleteData[0]["altura"];
      } else {
          $stmt->bindValue(':altura', $data['altura']);
      }

      if($data['peso'] == null || "") {
          $athleteData[0]["peso"];
      } else {
          $stmt->bindValue(':peso', $data['peso']);
      }

      if($data['modalidade'] == null || "") {
          $athleteData[0]["modalidade"];
      } else {
          $stmt->bindValue(':modalidade', $data['modalidade']);
      }

      if($data['cinturao'] == null || "") {
          $athleteData[0]["cinturao"];
      } else {
          $stmt->bindValue(':cinturao', $data['cinturao']);
      }

      if($data['estilo'] == null || "") {
          $athleteData[0]["estilo"];
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

    public static function deleteAthlete($id)
    {
      $connectionPDO = new \PDO(DBDRIVE.': host='.DBHOST.'; dbname='.DBNAME, DBUSER, DBPASS);

      $sql = 'DELETE FROM '.self::$table.' WHERE '.self::$table.'.id = '.$id;
      $stmt = $connectionPDO->prepare($sql);
      $stmt->execute();

      if ($stmt->rowCount() > 0) {
          return 'Atleta deletado com sucesso!';
      } else {
          throw new \Exception("Falha ao deletar Atleta!");
      }
    }
  }