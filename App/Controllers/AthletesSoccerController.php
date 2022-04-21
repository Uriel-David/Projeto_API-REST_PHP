<?php
  namespace App\Controllers;

  use App\Models\AthletesSoccer;

  class AthletesSoccerController
  {
      public function getAllAthletes()
      {
        echo json_encode(AthletesSoccer::selectAthletesAll());
      }

      public function getOneAthlete($id)
      {
        echo json_encode(AthletesSoccer::selectAthlete(intval($id["id"])));
      }

      public function createAthlete($data) 
      {
        echo json_encode(AthletesSoccer::insertAthlete($data));
      }

      public function updateAthlete($data)
      {
        echo json_encode(AthletesSoccer::updateAthlete(intval($data["id"]), $data));
      }

      public function deleteAthlete($id) 
      {
        echo json_encode(AthletesSoccer::deleteAthlete(intval($id["id"])));
      }
  }