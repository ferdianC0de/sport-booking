<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\API\BASEAPIController;
use Illuminate\Http\Request;
use App\Models\MstSportType;

class MasterSportTypeController extends BASEAPIController
{
    private $model = MstSportType::class;

    public function all()
    {
        return $this->getAll($this->model);
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
