<?php
  namespace App\Controllers;

  use App\Models\AthletesTenis;

  class AthletesTenisController
  {
    public function getAllAthletes()
    {
      echo json_encode(AthletesTenis::selectAthletesAll());
    }

    public function getOneAthlete($id)
    {
      echo json_encode(AthletesTenis::selectAthlete(intval($id["id"])));
    }

    public function createAthlete($data) 
    {
      echo json_encode(AthletesTenis::insertAthlete($data));
    }

    public function updateAthlete($data)
    {
      echo json_encode(AthletesTenis::updateAthlete(intval($data["id"]), $data));
    }

    public function deleteAthlete($id) 
    {
      echo json_encode(AthletesTenis::deleteAthlete(intval($id["id"])));
    }
  }