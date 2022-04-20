<?php
  namespace App\Services;

  use App\Models\AthletesSoccer;

  class AthletesSoccerService
  {
      public function get($id = null) 
      {
          if ($id) {
              return AthletesSoccer::selectAthlete($id);
          } else {
              return AthletesSoccer::selectAthletesAll();
          }
      }

      public function post($id = null) 
      {
        if ($id) {
            $data = $_POST;
            return AthletesSoccer::updateAthlete($id, $data);
        } else {
            $data = $_POST;
            return AthletesSoccer::insertAthlete($data);
        }
      }

      public function delete($id = null) 
      {
        if ($id) {
            return AthletesSoccer::deleteAthlete($id);
        } else {
            return throw new \Exception("Falha ao deletar Atleta!");
        }
      }
  }