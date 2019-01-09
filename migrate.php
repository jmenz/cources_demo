<?php

const DOCKROOT = __DIR__;

include_once __DIR__ . "/vendor/autoload.php";

$db = new \Shop\Database();

if (isset($_GET['model'])) {
    $modelClassName = $_GET['model'];

    if (class_exists($modelClassName)) {
        $model = new $_GET['model']();

        if ($model->getPersistence()->migrate()) {
            echo 'Success';
            die();
        }
    }
}

echo "please specify correct model class name, for example: ?model=\Shop\Customer\Customer";

