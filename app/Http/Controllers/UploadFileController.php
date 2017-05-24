<?php

namespace Server\Http\Controllers;

use Illuminate\Http\Request;

use Server\Http\Requests;

class UploadFileController extends Controller {
   public function index(){
      return view('uploadfile');
   }
   public function showUploadFile(Request $request){
      $file = $request->file('file');
   
      //Display File Name
      echo 'File Name: '.$file->getClientOriginalName();
      echo '<br>';
   
      //Display File Extension
      echo 'File Extension: '.$file->getClientOriginalExtension();
      echo '<br>';
   
      //Display File Real Path
      echo 'File Real Path: '.$file->getRealPath();
      echo '<br>';
   
      //Display File Size
      echo 'File Size: '.$file->getSize();
      echo '<br>';
   
      //Display File Mime Type
      echo 'File Mime Type: '.$file->getMimeType();
   
      //Move Uploaded File
      $destinationPath = 'uploads/rerort';
      $file->move($destinationPath,$file->getClientOriginalName());
   }
}
