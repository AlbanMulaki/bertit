<?php

namespace App\Http\Controllers;

use Validator;
use App\Http\Controllers\Controller;
use App\Comments;

class WebsiteController extends Controller {

    public function getIndex() {
        $comments = Comments::orderBy('id', 'DESC')->get();
        return view('website.index', ['comments' => $comments]);
    }

    public function getLatestComments() {
        $comments = Comments::orderBy('id', 'DESC')->take(16);
        return $comments;
    }

    public function postComments() {
        $comments = new Comments();
        $comments->ipaddress = request()->getClientIp();
        $comments->comments = request()->input('comments');
        $comments->save();
        return array('success');
    }

    public function postUpLikes() {
        $this->validate(request(), [
            'commentId' => 'required|numeric'
        ]);

        $comments = Comments::find(request()->input('commentId'));
        $comments->likes = $comments->likes + 1;
        $comments->save();
        return array('success');
    }

}
