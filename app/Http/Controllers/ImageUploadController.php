<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageUploadController extends Controller
{
    // Controller used to handle Submission creation, storage, and viewing.


    // Submit image logic
    public function addImage(){
        return view('submit');
    }

    // Storing submission logic
    public function storeImage(){
        /* Image storage logic goes here */
    }

    // Viewing submission logic
    public function viewImage(){
        return view('view-submission');
    }
}
