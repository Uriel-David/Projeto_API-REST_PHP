<?php
    header('Content-Type: application/json');
    require '../vendor/autoload.php';

    use CoffeeCode\Router\Router;
    
    /**
     * routes
     * The controller must be in the namespace App\Controllers
     * this produces routes for api/v1/soccer, api/v1/soccer/{id}, etc.
     */
    $routerSoccer = new Router(BASE_URL);
    $routerSoccer->namespace("App\Controllers");
    $routerSoccer->group("api/v1/soccer");
    $routerSoccer->get("/", "AthletesSoccerController:getAllAthletes");
    $routerSoccer->get("/{id}", "AthletesSoccerController:getOneAthlete");
    $routerSoccer->post("/", "AthletesSoccerController:createAthlete");
    $routerSoccer->put("/{id}", "AthletesSoccerController:updateAthlete");
    $routerSoccer->delete("/{id}", "AthletesSoccerController:deleteAthlete");

    $routerSoccer->dispatch();

    /**
     * routes
     * The controller must be in the namespace App\Controllers
     * this produces routes for api/v1/karate, api/v1/karate/{id}, etc.
     */
    $routerKarate = new Router(BASE_URL);
    $routerKarate->namespace("App\Controllers");
    $routerKarate->group("api/v1/karate");
    $routerKarate->get("/", "AthletesKarateController:getAllAthletes");
    $routerKarate->get("/{id}", "AthletesKarateController:getOneAthlete");
    $routerKarate->post("/", "AthletesKarateController:createAthlete");
    $routerKarate->put("/{id}", "AthletesKarateController:updateAthlete");
    $routerKarate->delete("/{id}", "AthletesKarateController:deleteAthlete");

    $routerKarate->dispatch();

    /**
     * routes
     * The controller must be in the namespace App\Controllers
     * this produces routes for api/v1/karate, api/v1/karate/{id}, etc.
     */
    $routerTenis = new Router(BASE_URL);
    $routerTenis->namespace("App\Controllers");
    $routerTenis->group("api/v1/tenis");
    $routerTenis->get("/", "AthletesTenisController:getAllAthletes");
    $routerTenis->get("/{id}", "AthletesTenisController:getOneAthlete");
    $routerTenis->post("/", "AthletesTenisController:createAthlete");
    $routerTenis->put("/{id}", "AthletesTenisController:updateAthlete");
    $routerTenis->delete("/{id}", "AthletesKarateController:deleteAthlete");

    $routerTenis->dispatch();
?>