<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MeetingRoom;

class MeetingRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(MeetingRoom::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new MeetingRoom();
        $model->name = $request->name;
        $model->description = $request->description;
        $model->save();
        return response()->json([
            'id' => $model->id,
            'name' => $model->name,
            'description' => $model->description
        ]);
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // return response()->json($id);
        if (MeetingRoom::where('id', $id)->exists()) {
            $model = MeetingRoom::find($id);
    
            $model->name = is_null($request->name) ? $model->name : $request->name;
            $model->description = is_null($request->description) ? $model->description : $request->description;
            $model->save();
    
            return response()->json([
              "message" => 'Success'
            ], 200);
          } else {
            return response()->json([
              "message" => "MeetingRoom not found"
            ], 404);
          }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
       $model = MeetingRoom::destroy($id);
        return response()->json($model);
    }
}
