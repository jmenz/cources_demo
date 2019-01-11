<?php

namespace Shop\Services\Database;

use Shop\Services\ControllerInterface;

class MigrateController implements ControllerInterface
{
    public function execute($request, $response)
    {
        $modelClassName = $request->param('model');
        if (!is_null($modelClassName)) {

            if (class_exists($modelClassName)) {
                $model = new $_GET['model']();

                if ($model->getPersistence()->migrate()) {
                    return 'Success';
                }
            }
        }

        return "please specify correct model class name, for example: ?model=\Shop\Customer\Customer";
    }
}