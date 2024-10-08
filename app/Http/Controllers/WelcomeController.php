<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{
    // invoke: indica que não há nenhum outro método
    public function __invoke(Request $request)
    {
        /* os arquivos precisam ter a extensão .blade.php
        *    blade é um "template manager" de interpretação do php
        *    importante: não é a extensão que carrega consigo essa característica
        *        é a configuração do laravel que possibilita isso. 
                 Ou seja, quando o laravel identifca um arquivo com a extensão blade.php, 
                 automaticamente já interpreta o que estiver ali com alguns padrões do php.
        *  caso esteja em subdir, a sintaxe é: nomedir.nomeview
        */

        //$user = User::find(1); // busca o user com id 1
        // User::query()->create([
        //     'name' => 'Wesley',
        //     'email' => 'wesk@outlook.com',
        //     'password' => '123456',
        // ]);

        // $user->email_verified_at = now();
        // $user->save();
        // dd($user->email_verified_at); // dump and die

        //Auth::login($user);
        //Auth::logout($user);


        //return view('teste-blade.teste');
        return view('welcome');
    }
}
