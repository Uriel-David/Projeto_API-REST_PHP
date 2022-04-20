<?php
    header('Content-Type: application/json');
    require_once '../vendor/autoload.php';

    if ($_GET['url']) {
        $url = explode('/', $_GET['url']);

        if ($url[0] === 'api') {
            array_shift($url);
            $service = 'App\Services\\Athletes'.ucfirst($url[0]).'Service';
            array_shift($url);
            $method = strtolower($_SERVER['REQUEST_METHOD']);

            try {
                $response = call_user_func_array(array(new $service, $method), $url);
                http_response_code(200);
                echo json_encode(array('status' => 'sucess', 'data' => $response));
                exit;
            } catch (\Exception $erroResponse) {
                http_response_code(404);
                echo json_encode(array('status' => 'error', 'data' => $erroResponse->getMessage()), JSON_UNESCAPED_UNICODE);
                exit;
            }
        }
    }
?>