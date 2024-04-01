<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    //

    public function createFeedback(Request $request) // Corrigido para usar Request como parâmetro
    {
        Feedback::create([
            'nome' => $request->nome , 
            'identidade' => $request->identidade , 
            'feedback' => $request->feedback , 
        ]);


        // Redirecionar para uma rota ou retornar uma resposta adequada
        return redirect()->back()->with('success', 'Feedback enviado com sucesso!');
    
    }

    public function index()
    {
        $feedbacks = Feedback::all();
        return view('portifolio')->with('feedbacks', Feedback::all());
    }
}
