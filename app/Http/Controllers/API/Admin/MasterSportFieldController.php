<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\API\BASEAPIController;
use App\Models\MstSportField;
use Illuminate\Http\Request;

class MasterSportFieldController extends BASEAPIController
{
    private $model = MstSportField::class;

    public function all()
    {
        return $this->getAll($this->model, ['sportType', 'sportCenter'], ['link']);
    }

    public function detail(Request $request)
    {
        $param = $request->json()->all();
        return $this->getDetail($this->model, $param['id']);
    }

    public function update(Request $request)
    {
        $param = $request->json()->all();
        $id = $param['id'];
        $data = $request->except('id');

        return $this->updateData($this->model, $id, $data);

    }

    public function delete(Request $request)
    {
        $param = $request->json()->all();

        return $this->responseDelete($this->model, $param['id']);
    }

    public function create(Request $request)
    {
        $param = $request->json()->all();

        return $this->responseStore($this->model, $param);
    }
}

