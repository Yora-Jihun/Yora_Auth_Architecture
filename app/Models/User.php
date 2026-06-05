<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

#manual_insert
use App\Helpers\NameHelper;

#[Fillable(['first_name', 'middle_name', 'last_name', 'suffix', 'email', 'password', 'remember_token'])]
#[Hidden(['password', 'remember_token'])]
class User extends Authenticatable
{

    protected function setFirstNameAttribute($value)
    {
        $this->attributes['first_name'] = NameHelper::normalize($value);
    }

    protected function setMiddleNameAttribute($value)
    {
        if (is_null($value) || trim($value) === '')
        {
           $this->attributes['middle_name'] = null;
           return;
        }    

        $this->attributes['middle_name'] = NameHelper::normalize($value);
    }

protected function setLastNameAttribute($value)
    {
        $this->attributes['last_name'] = NameHelper::normalize($value);
    }
    

protected function setSuffixAttribute($value)
    {
        if (is_null($value) || trim($value) === '')
        {
           $this->attributes['suffix'] = null;
           return;
        }

        $normalized = NameHelper::normalize($value);

        if(preg_match('/^(Jr|Sr)$/i', $normalized) && !preg_match('/\.$/', $normalized))
        {
            $normalized .= '.';
        }
        
        $this->attributes['suffix'] = $normalized;
    }
    

    public function fullname()
    {
        $middleInitial = $this->middle_name ? mb_substr($this->middle_name, 0, 1, 'UTF-8') . '. ' : '';

        return trim($this->first_name . ' ' . $middleInitial . $this->last_name . '' . $this->suffix );
    }


    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function initials(): string
    {
        return Str::of($this->fullname())
            ->explode(' ')
            ->take(2)
            ->map(fn ($word) => Str::substr($word, 0, 1))
            ->implode('');
    }
}
