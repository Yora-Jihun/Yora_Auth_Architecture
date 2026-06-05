<?php

namespace App\Services;

#manual_insert 
use App\Models\User; 
use Illuminate\Support\Facades\Hash; 
use Illuminate\Support\Facades\Auth; 
use Illuminate\Auth\Events\Registered; 
use Illuminate\Auth\AuthenticationException; 
use Exception; 

class AuthService
{
   public function register(array $data): User
   {
      $user = User::create([
          'first_name'  => ucfirst(strtolower($data['first_name'])),
          'middle_name' => $data['middle_name'],
          'last_name'   => ucfirst(strtolower($data['last_name'])),
          'suffix'      => ucfirst(strtolower($data['suffix'])),
          'email'       => strtolower($data['email']),
          'password'    => Hash::make($data['password']),
      ]);

      event(new Registered($user));
      return $user;
   }
}
