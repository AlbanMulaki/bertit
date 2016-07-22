<?php

namespace App\Http\Controllers;

use Validator;
use App\Http\Controllers\Controller;
use App\Comments;

class WebsiteController extends Controller {

    public function getIndex() {
        $comments = Comments::all();
        return view('website.index', ['comments' => $comments]);
    }

}
