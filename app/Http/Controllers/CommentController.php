<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CommentController extends Controller
{
    public function validator(Request $request)
    {
        $validData = Validator::make($request->all(), [
           'text'   => 'max:255',
        ]);

        if($validData->passes()){
            return $this->save($request);
        } else return redirect()->back();
    }

    public function save($data)
    {
        $comment = new Comment([
            'text'  => $data->text,
            'uesr_d'    => Auth::user(),
        ]);

        $comment->save();
        return redirect()->back();
    }
}
