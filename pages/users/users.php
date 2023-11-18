<?php
require_once 'model.php';
$model = new Model();
switch ($_GET['phase']) {
    default:
        include 'pages/users/template/users.php';
    break;
    case 'getTable':
        $response = [
            'status' => 1,
            'message' => [],
            'template' => ''
        ];

        $allUsers = $model -> getAllUsers($connection);

        $response['template'] = $model -> getAllUsersTemplate($allUsers);

        echo json_encode($response);

    break;
}
