<?php
  namespace App\Services;

  use App\Models\AthletesTenis;

  class AthletesTenisService
  {
      public function get($id = null) 
      {
          if ($id) {
              return AthletesTenis::selectAthlete($id);
          } else {
              return AthletesTenis::selectAthletesAll();
          }
      }

      public function post($id = null) 
      {
        if ($id) {
            $data = $_POST;
            return AthletesTenis::updateAthlete($id, $data);
        } else {
            $data = $_POST;
            return AthletesTenis::insertAthlete($data);
        }
      }

      public function delete($id = null) 
      {
        if ($id) {
            return AthletesTenis::deleteAthlete($id);
        } else {
            return throw new \Exception("Falha ao deletar Atleta!");
        }
      }
  }