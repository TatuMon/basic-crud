<header>
    <div id="register" x-data="{show : false}" @click.away="show = false">
        <button @click="show = !show">Register</button>
        <form action="/register" method="POST" id="register-form" class="header-form" x-show="show">
            <label for="email">e-mail</label>
            <input type="email" name="email" autocomplete="email" value="{{ old('email') }}">

            <label for="password">password</label>
            <input type="password" name="password">

            <label for="confirm-psw">confirm password</label>
            <input type="password" name="confirm-psw">
        </form>
    </div>
    
    <div id="login" x-data="{show : false}" @click.away="show = false">
        <button @click="show = !show">Log In</button>
        <form action="/login" method="POST" id="login-form" class="header-form" x-show="show">
            <label for="email">email</label>
            <input type="email" name="email" autocomplete="email" value="{{ old('email') }}">

            <label for="password">password</label>
            <input type="password" name="password">
        </form>
    </div>
</header>