<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Exception;

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

    public function responseDelete($model, $id){
        try {
            $data = $model::destroy($id);

            return response()->json([
                'status' => "data $model",
                'user' => auth()->user(),
                'messeage' => "Data Deleted",
                'data' => $data
            ], 202);

        } catch (\Exception $e) {
            return $this->responseError($model, $e);
        }
    }

    public function responseStore($model, $param){
        try {
            $data = $model::create($param);

            return response()->json([
                'status' => "data $model",
                'user' => auth()->user(),
                'messeage' => "Created Success",
                'data' => $data
            ], 201);

        } catch (\Exception $e) {
            return $this->responseError($model, $e);
        }
    }

    public function getAll($model, $eager = [], $appends = []){
        try {
            if (count($eager) > 0 || count($appends) > 0) {
                $data = $model::with($eager)->get()->append($appends);

            }else{
                $data = $model::all();
            }

            return $this->responseWithModel($model, $data, 200);

        } catch (Exception $th) {
            return $this->responseError($model, $th);
        }
    }

    public function getDetail($model, $id){
        try {
            $data = $model::find($id);
            return $this->responseWithModel($model, $data, 200);

        } catch (Exception $th) {
            return $this->responseError($model, $th);
        }
    }

    public function updateData($model, $id, $data){
        try {
            $data = $model::find($id)
            ->update($data);
            return $this->responseWithModel($model, $data, 201);

        } catch (Exception $th) {
            return $this->responseError($model, $th);
        }
    }
}
