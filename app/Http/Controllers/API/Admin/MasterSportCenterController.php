<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\API\BASEAPIController;
use Illuminate\Http\Request;
use App\Models\MstSportCenter;

class MasterSportCenterController extends BASEAPIController
{
    private $model = MstSportCenter::class;


    public function getAllMsc()
    {
        return $this->getAll($this->model);
    }

    public function getDetailMsc(Request $request)
    {
        $param = $request->json()->all();
        return $this->getDetail($this->model, $param['id']);
    }

    public function updateMsc(Request $request){
        $param = $request->json()->all();
        $id = $param['id'];
        $data = $request->except('id');

        return $this->updateData($this->model, $id, $data);

    }

    public function deleteMsc(Request $request){
        $param = $request->json()->all();

        return $this->responseDelete($this->model, $param['id']);
    }

    public function createMsc(Request $request){
        $param = $request->json()->all();

        return $this->responseStore($this->model, $param);
    }
}
