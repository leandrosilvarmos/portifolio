<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    //

    public function createFeedback(Request $request) // Corrigido para usar Request como parÃ¢metro
    {
        $feedback = new Feedback();
        $feedback->nome = $request->nome;
        $feedback->identidade = $request->identidade;
        $feedback->feedback = $request->feedback;
        $feedback->nota = $request->nota; // Adicione essa linha para incluir a avaliação selecionada
        $feedback->save();


        // Redirecionar para uma rota ou retornar uma resposta adequada
        return redirect()->back()->with('success', 'Feedback enviado com sucesso!');
    
    }

    public function index()
    {
        $feedbacks = Feedback::all();
        return view('portifolio')->with('feedbacks', Feedback::all());
    }
}
