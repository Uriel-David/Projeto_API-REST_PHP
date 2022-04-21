<?php
  namespace App\Models;

  use App\Services\RequestsAPI;
  use App\Services\RequestsTenisAPI;

  class AthletesTenis
  {
      private static $table = 'athletes_tenis';

    public static function selectAthlete(int $id)
    {
        $connectionPDO = new \PDO(DBDRIVE.': host='.DBHOST.'; dbname='.DBNAME, DBUSER, DBPASS);
        return RequestsAPI::selectAthleteRequest($connectionPDO, self::$table, $id);
    }

    public static function selectAthletesAll()
    {
        $connectionPDO = new \PDO(DBDRIVE.': host='.DBHOST.'; dbname='.DBNAME, DBUSER, DBPASS);
        return RequestsAPI::selectAthletesAllRequest($connectionPDO, self::$table);
    }

    public static function insertAthlete(array $data)
    {
        $connectionPDO = new \PDO(DBDRIVE.': host='.DBHOST.'; dbname='.DBNAME, DBUSER, DBPASS);
        return RequestsTenisAPI::insertAthleteRequest($connectionPDO, self::$table, $data);
    }

    public static function updateAthlete(int $id, array $data)
    {
        $connectionPDO = new \PDO(DBDRIVE.': host='.DBHOST.'; dbname='.DBNAME, DBUSER, DBPASS);
        return RequestsTenisAPI::updateAthleteRequest($connectionPDO, self::$table, $id, $data);
    }

    public static function deleteAthlete(int $id)
    {
        $connectionPDO = new \PDO(DBDRIVE.': host='.DBHOST.'; dbname='.DBNAME, DBUSER, DBPASS);
        return RequestsAPI::deleteAthleteRequest($connectionPDO, self::$table, $id);
    }
  }