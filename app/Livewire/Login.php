<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Auth;

#[Title('Login')]
#[Layout('layouts.guest')]
class Login extends Component
{
    public $close="";
    public string $username='';
    public string $password='';
    
    public function render()
    {
        return view('livewire.login');
    }
    public function generateSession()
    {
        $this->username=Auth::user()->username;
        $this->password=Auth::user()->password;
    }
    public function authenticate()
    {
        
        $this->close="";
        $credentials=$this->validate([
            'username'=>'required',
            'password'=>'required'
        ]);
        if(Auth::attempt($credentials)){
            $this->generateSession();
            return redirect()->route('dashboard.admin');
        }
        return back()->with('Error','Invalid Credentials');
    }

    public function func_close()
    {
        
        $this->close="d-none d-lg-block";
    }
}