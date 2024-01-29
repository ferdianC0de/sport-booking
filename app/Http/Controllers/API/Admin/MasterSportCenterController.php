<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\API\BASEAPIController;
use Illuminate\Http\Request;
use App\Models\MstSportCenter;

class MasterSportCenterController extends BASEAPIController
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function getAllMsc()
    {
        return $this->getAll(MstSportCenter::class);
    }

    public function getDetailMsc(Request $request)
    {
        $param = $request->json()->all();
        return $this->getDetail(MstSportCenter::class, $param['id']);
    }

    public function updateMsc(Request $request){
        $param = $request->json()->all();
        $id = $param['id'];
        $data = $request->except('id');
        return $data;

        // return $this->updateData();

    }

    public function deleteMsc(Request $request){
        $param = $request->json()->all();

        return $this->responseDelete(MstSportCenter::class, $param['id']);
    }

    public function createMsc(Request $request){
        $param = $request->json()->all();

        return $this->responseStore(MstSportCenter::class, $param);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
