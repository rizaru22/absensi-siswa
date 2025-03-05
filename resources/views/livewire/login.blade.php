<div>
    @if (\Illuminate\Support\Facades\Auth::user())
        @if (\Illuminate\Support\Facades\Auth::user()->role == 'admin' || \Auth::user()->role == 'guru')
            <script>
                window.location = "/dash-admin"
            </script>
        @elseif (\Illuminate\Support\Facades\Auth::user()->role == 'siswa')
            <script>
                window.location = "/dash-siswa"
            </script>
        @endif
    @endif
    <div class="row h-100">
        <div class="col-lg-5 col-12">
            <div id="auth-left">
                <div class="auth-logo">
                    <h2>{{ config('app.name') }}</h2>
                </div>
                <h1 class="auth-title">LogIn.</h1>

                @if (session()->has('Error'))
                    <div class="alert alert-danger alert-dismissible fade show {{ $close }}"  role="alert">
                        <i class="fa fa-exclamation-circle me-2"></i>{{ session('Error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" wire:click="func_close"></button>
                    </div>
                @endif
                <form wire:submit.prevent="authenticate">
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="text" class="form-control form-control-xl" placeholder="Username" id="username"
                            name="username" required wire:model="username">
                        <div class="form-control-icon">
                            <i class="bi bi-person"></i>
                        </div>
                    </div>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="password" class="form-control form-control-xl" placeholder="Password"
                            id="password" name="password" required wire:model="password">
                        <div class="form-control-icon">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                    </div>
                    <div class="form-check form-check-lg d-flex align-items-end">
                        <input class="form-check-input me-2" type="checkbox" id="showpassword" name="showpassword"
                            onclick="this.form.password.type=this.checked ? 'text' : 'password'">
                        <label class="form-check-label text-gray-600" for="flexCheckDefault">
                            Lihat Password
                        </label>
                    </div>
                    <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5"><i
                            class="fas fa-user-check me-3"></i> Log In</button>
                </form>
            </div>
        </div>
        <div class="col-lg-7 d-none d-lg-block">
            <div id="auth-right">
                <img src="{{ asset('assets/static/images/bg/bg.jpg') }}" alt="Login Image" class="login-img">
            </div>
        </div>
    </div>
</div>
