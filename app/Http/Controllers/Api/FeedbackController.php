<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function store(Request $request)
    {
        $feedbacks = new Feedback();
        $feedbacks->type = $request->type;
        $feedbacks->comment = $request->comment;
        $feedbacks->screenshot = $request->screenshot;

        if ($feedbacks->save()) {
            return response()->json(['message' => 'Feedback cadastrado com sucesso'], 201);
        }

        return response()->json(['message' => 'Algo de errado aconteceu!'], 500);
    }
}