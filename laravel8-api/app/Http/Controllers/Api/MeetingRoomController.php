<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MeetingRoom;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class MeetingRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return response()->json(MeetingRoom::all());
        return response()->json([
            'rooms' => MeetingRoom::all(),
            'category' => []
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $response = null;
        $user = (object) ['file' => ""];

        if ($request->hasFile('file')) {
            $original_filename = $request->file('file')->getClientOriginalName();
            $original_filename_arr = explode('.', $original_filename);
            $file_ext = end($original_filename_arr);
            $destination_path = './upload/rooms/';
            $image = 'U-' . time() . '.' . $file_ext;

            if ($request->file('file')->move($destination_path, $image)) {
                $user->image = '/upload/user/' . $image;
                $model = new MeetingRoom();
                $model->name = $request->name;
                $model->description = $request->description;
                $model->photo = $image;
                $model->save();
                unset($model->created_at,$model->updated_at);
                return response()->json($model);
            } else {
                return $this->responseRequestError('Cannot upload file');
            }
        } else {
            return $this->responseRequestError('File not found');
        }
    }



    protected function responseRequestSuccess($ret)
    {
        return response()->json(['status' => 'success', 'data' => $ret], 200)
            ->header('Access-Control-Allow-Origin', '*')
            ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
    }

    protected function responseRequestError($message = 'Bad request', $statusCode = 200)
    {
        return response()->json(['status' => 'error', 'error' => $message], $statusCode)
            ->header('Access-Control-Allow-Origin', '*')
            ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
    }



    public function uploadimage(Request $request)
{
//  $validator = Validator::make($request->all(), [
//     'file' => 'required|image:jpeg,png,jpg,gif,svg|max:2048'
//  ]);
//  if ($validator->fails()) {
//     return sendCustomResponse($validator->messages()->first(),  'error', 500);
//  }
//  $uploadFolder = 'users';
//  $image = $request->file('file');
//  $image_uploaded_path = $image->store($uploadFolder, 'public');
// //  $uploadedImageResponse = array(
// //     "image_name" => basename($image_uploaded_path),
// //     "image_url" => Storage::disk('public')-  >url($image_uploaded_path),
// //     "mime" => $image->getClientMimeType()
// //  );
//  return sendCustomResponse('File Uploaded Successfully', 'success',   200, $uploadedImageResponse);

return response()->json($request->all());
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
