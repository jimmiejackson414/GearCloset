<?php

namespace App\GraphQL\Mutations;

use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class AuthMutator
{
  public function login($root, array $args)
  {
    $credentials = Arr::only($args, ['email', 'password']);

    if (Auth::once($credentials)) {
      $token = Str::random(60);

      $user = auth()->user();
      $user->api_token = $token;
      $user->save();

      return [
        'me' => $user,
        'token' => $token
      ];
    }

    return null;
  }
}