<?php
  namespace App\Services;

  use App\Models\AthletesKarate;

  class AthletesKarateService
  {
      public function get($id = null) 
      {
          if ($id) {
              return AthletesKarate::selectAthlete($id);
          } else {
              return AthletesKarate::selectAthletesAll();
          }
      }

      public function post($id = null) 
      {
        if ($id) {
            $data = $_POST;
            return AthletesKarate::updateAthlete($id, $data);
        } else {
            $data = $_POST;
            return AthletesKarate::insertAthlete($data);
        }
      }

      public function delete($id = null) 
      {
        if ($id) {
            return AthletesKarate::deleteAthlete($id);
        } else {
            return throw new \Exception("Falha ao deletar Atleta!");
        }
      }
  }