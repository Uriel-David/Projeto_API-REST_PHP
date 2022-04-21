<?php
  namespace App\Controllers;

  use App\Models\AthletesKarate;

  class AthletesKarateController
  {
    public function getAllAthletes()
    {
      echo json_encode(AthletesKarate::selectAthletesAll());
    }

    public function getOneAthlete($id)
    {
      echo json_encode(AthletesKarate::selectAthlete(intval($id["id"])));
    }

    public function createAthlete($data) 
    {
      echo json_encode(AthletesKarate::insertAthlete($data));
    }

    public function updateAthlete($data)
    {
      echo json_encode(AthletesKarate::updateAthlete(intval($data["id"]), $data));
    }

    public function deleteAthlete($id) 
    {
      echo json_encode(AthletesKarate::deleteAthlete(intval($id["id"])));
    }
  }