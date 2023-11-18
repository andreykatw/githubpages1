<?php
include "pages/auth/model.php";
$model = new Model();
switch ($_GET['phase']) {
    default:
        include 'pages/auth/template/authentication.php';
        break;
    case 'login':
        $response = [
            'status' => 1,
            'message' => [],
        ];

        $username = $_GET['username'];
        $password = $_GET['password'];
        /*$email =  $_POST['email'];*/
        try {
            $dbRequestResult = $model->getUser($connection, $username);
            /* validate form */
            if (!($model->checkForExistingUser($dbRequestResult))) {
                $response = [
                    'status' => 0,
                    'message' => [ 'No such user'],
                ];
                echo json_encode($response);
            }
            foreach ($dbRequestResult  as $result) {
                $pswrdFromDb = $result['password'];
            }
            $pswrdCheck = $model -> validateMathcingPasswords( $password, $pswrdFromDb);
            if (!$pswrdCheck) {
                /* return error message*/
                $response = [
                    'status' => 0,
                    'message' => [ 'Wrong password '],
                ];
                echo json_encode($response);
                die;
            }

            $_SESSION['username'] = $username;
        } catch (PDOException $exception) {
            echo json_encode($response);
            die(' failed due to ' . $exception->getMessage());
        }
        echo json_encode($response);
        break;
    case 'logout':
        $_SESSION['username'] = NULL;
        header('Location: index.php');
        break;
    case 'signupForm':
        include 'pages/auth/template/signup.php';
        break;
    case 'performSignup':
        $response = [
            'status' => 1,
            'message' => [],
        ];
        /* validate form here */
        $alreadyExists =  $model->checkForExistingUser( $model -> getUser($connection, $_GET['username']) );

        if ($alreadyExists){
            $response = [
                'status' => 0,
                'message' => ['User already exists'],
            ];
            json_encode($response);
            die;
        }

        $model -> createNewUser($connection, $_GET['username'], $_GET['password']);
        echo json_encode($response);
        break;
}
