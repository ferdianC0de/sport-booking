<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class BASEAPIController extends Controller
{
    //
    public function responseWithModel($model, $data, $code){
        return response()->json([
            'status' => "data $model",
            'user' => auth()->user(),
            'data' => $data ?? "Data Empty"
        ], $code);
    }

    function responseError($model, $error){
        return response()->json([
            'status' => "Failed $model",
            'user' => auth()->user(),
            'error' => $error
        ], 500);
    }

    public function getAll($model){
        try {
            $data = $model::all();
            return $this->responseWithModel($model, $data, 200);

        } catch (Exception $th) {
            $this->responseError($model, $th);
        }
    }

    public function getDetail($model, $id){
        try {
            $data = $model::find($id);
            return $this->responseWithModel($model, $data, 200);

        } catch (Exception $th) {
            $this->responseError($model, $th);
        }
    }

    public function updateData($model, $id, $data){
        try {
            $data = $model::find($id)
            ->update($data);
            return $this->responseWithModel($model, $data, 200);

        } catch (Exception $th) {
            $this->responseError($model, $th);
        }
    }
}
