<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator,Redirect,Response,File;
use App\Document;
// use Validator;

class DocumentController extends Controller
{

    public function index(){
        return 'ss';
    }

    public function store(Request $request)
    {
 
    //    $validator = Validator::make($request->all(), 
    //           [ 
    //           'user_id' => 'required',
    //           'file' => 'required|mimes:doc,docx,pdf,txt,jpg|max:2048',
    //          ]);   
 
    // if ($validator->fails()) {          
    //         return response()->json(['error'=>$validator->errors()], 401);                        
    //      }  
 
  
        // if ($files = $request->file('file')) {
             
            //store file into document folder
            // $file = $request->file->store('public/documents');
 
            //store your file into database
            // $document = new Document();
            // $document->title = $file;
            // $document->user_id = $request->user_id;
            // $document->save();
            $postData = $request;
            // return response()->json([
            //     "success" => true,
            //     "message" => "File successfully uploaded",
            //     "file" => $postData
            // ]);
            return response()->json($request);
  
        // }
 
  
    }
}
