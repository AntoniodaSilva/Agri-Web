<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session; // Importe o facade Session

class ChatController extends Controller
{
    public function chat_index(Chat $chat)
    {
        $chat = Chat::orderBy('created_at', 'desc')->get();
        return view('site.suporte', compact('chat'));
    }

    public function chat_store()
    {
        return view('site.suporte');
    }

    public function chat_create(Request $request)
    {
        // Obtenha a mensagem enviada pelo usuário
        $mensagem = $request->input('text');

        // Verifique se a sessão já possui uma chave para as mensagens do chat
        if (!Session::has('mensagens_chat')) {
            // Se não existir, crie um array vazio para armazenar as mensagens
            Session::put('mensagens_chat', []);
        }

        // Adicione a nova mensagem ao array de mensagens na sessão
        Session::push('mensagens_chat', $mensagem);

        // Retorne a resposta adequada ao cliente, por exemplo, redirecionando de volta à página
        return redirect()->back();
    dd($mensagem);
    }

    // Dentro do método onde você exibe o chat
    public function exibirChat()
    {
        // Recupere as mensagens da sessão
        $mensagens = Session::get('mensagens_chat', []);

        // Passe as mensagens para a sua view de chat
        return view('sua_view_de_chat', ['mensagens' => $mensagens]);
    }
}
