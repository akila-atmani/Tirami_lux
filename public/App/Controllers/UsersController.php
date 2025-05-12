<?php
require_once __DIR__ . "/../Models/UsersModel.php";

class UsersController {
    private $usersModel

    public function __construct() {
        $this->usersModel = new UsersModel();;
    }

    public function getOne(int $id) {
        $response = $usersModel->findOne($id);
        if (!empty($response)) {
            http_response_code(400);
            echo json_encode([]); // {}
        }
        http_response_code(200);
        echo json_encode($response); // { "id": "13", "name": "Akila" }
        // ApiResponse::error();
        // ApiResponse::success($response);
    }
}