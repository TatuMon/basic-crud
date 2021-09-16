<header>
    @auth
        <a href="/logout">Log Out</a>
    @else
        <div id="register" x-data="{show : false}" @click.away="show = false">
            <button @click="show = !show">Register</button>
            <form action="/register" method="POST" id="register-form" class="header-form" x-show="show">
                @csrf
                <label for="email">e-mail</label>
                <input type="email" name="email" autocomplete="email" value="{{ old('email') }}" required>

                <label for="password">password</label>
                <input type="password" name="password" required>

                <label for="confirm-psw">confirm password</label>
                <input type="password" name="password_confirmation" required>

                <input type="submit" value="register">

                @error('email')
                    <p class="error-msg">{{ $message }}</p>
                @enderror

                @error('password')
                    <p class="error-msg">{{ $message }}</p>
                @enderror

                @error('password_confirmation')
                    <p class="error-msg">{{ $message }}</p>
                @enderror
            </form>
        </div>
        
        <div id="login" x-data="{show : false}" @click.away="show = false">
            <button @click="show = !show">Log In</button>
            <form action="/login" method="POST" id="login-form" class="header-form" x-show="show">
                @csrf
                <label for="email">email</label>
                <input type="email" name="email" autocomplete="email" value="{{ old('email') }}" required>

                <label for="password">password</label>
                <input type="password" name="password" required>

                <input type="submit" value="log in">

                @error('email')
                    <p class="error-msg">{{ $message }}</p>
                @enderror

                @error('password')
                    <p class="error-msg">{{ $message }}</p>
                @enderror
            </form>
        </div>
    @endauth
</header>