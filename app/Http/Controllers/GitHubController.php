<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;

class GitHubController extends Controller
{
    public function redirectToGit()
    {
        return Socialite::driver('github')->redirect();
    }

    // public function handleGitCallback()
    // {
    //     try {
    //         $githubUser = Socialite::driver('github')->user();

    //         $user = User::where('email', $githubUser->getEmail())->first();
    //         dd($githubUser);

    //         if (!$user) {
    //             // Crear usuario sin contraseña
    //             $user = User::updateOrCreate([
    //                 'email' => $githubUser->getEmail(),
    //             ], [
    //                 'name' => $githubUser->getName() ?? $githubUser->getNickname(),
    //                 'github_id' => $githubUser->getId(),
    //                 'proveedor' => "GitHub",
    //                 'avatar' => $githubUser->getAvatar(),
    //             ]);
    //         } else {
    //             // Actualizar datos
    //             $user->update([
    //                 'github_id' => $githubUser->getId(),
    //                 'avatar'    => $githubUser->getAvatar(),
    //             ]);
    //         }
    //         Auth::login($user);
    //         return redirect('/');
    //     } catch (\Exception $e) {
    //         dd("gaaa");
    //         return redirect('/')->with('error', 'Algo salió mal con Google Login');
    //     }
    // }

    public function handleGitCallback()
    {
        try {
            $githubUser = Socialite::driver('github')->user();

            $user = User::where('email', $githubUser->getEmail())->first();

            if (!$user) {
                $user = User::create([
                    'name'      => $githubUser->getName() ?? $githubUser->getNickname(),
                    'email'     => $githubUser->getEmail() ?? "{$githubUser->getId()}@github.local",
                    'github_id' => $githubUser->getId(),
                    'proveedor' => "GitHub",
                    'avatar'    => $githubUser->getAvatar(),
                    'password'  => bcrypt(str()->random(16)), // contraseña aleatoria
                ]);
            } else {
                $user->update([
                    'github_id' => $githubUser->getId(),
                    'avatar'    => $githubUser->getAvatar(),
                ]);
            }

            Auth::login($user);
            return redirect('/');
        } catch (\Exception $e) {
            // dd($e->getMessage());
            return redirect('/')->with('error', 'Error en GitHub Login: ' . $e->getMessage());
        }
    }
}
