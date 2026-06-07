<?php

namespace App\Livewire\Auth;

use App\Services\AuthService;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Validate;
use Livewire\Component;

class RegisterForm extends Component
{
    public ?string $first_name = '';

    public ?string $middle_name = '';

    public ?string $last_name = '';

    public ?string $suffix = '';

    public ?string $email = '';

    public ?string $password = '';

    public ?string $password_confirmation = '';

    public function register(AuthService $authService): void
    {
        $this->validate();

        $authService->register($this->only([
            'first_name',
            'middle_name',
            'last_name',
            'suffix',
            'email',
            'password',
        ]));

        session()->flash('status', 'Registration successful! Please login.');

        $this->redirect(route('login'));
    }

    protected function rules(): array
    {
        return [
            'first_name' => ['required', 'string', 'max:255'],
            'middle_name' => ['nullable', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'suffix' => ['nullable', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string', 'min:8'],
            'password_confirmation' => ['required', 'string', 'same:password'],
        ];
    }

    public function render()
    {
        return view('livewire.auth.register-form');
    }
}
