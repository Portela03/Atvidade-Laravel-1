<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContatoController extends Controller
{
    public function enviarEmail(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data = [
            'nome' => $request->input('name'),
            'email' => $request->input('email'),
            'telefone' => $request->input('phone'),
            'mensagem' => $request->input('message'),
        ];

        try {
            Mail::send('emails.contato', $data, function ($message) {
                $message->to('joao.portela03@gmail.com')->subject('Nova mensagem de contato');
            });

            return redirect()->back()->with('success', 'Mensagem enviada com sucesso!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Erro ao enviar a mensagem: ' . $e->getMessage());
        }
    }
}
