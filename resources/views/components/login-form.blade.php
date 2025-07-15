<div class="login-content">
    <form id="loginForm" method="POST" action="/login" class="loginFormContent shadow">
        @csrf
        <div>
            <img src="{{asset('build/assets/TaskuBlack.png')}}" alt="TaskU Logo" class="watermark">
        </div>
        <div class="form-box">
            Email:
            <input
            id="email"
            class="register-input"
            type="email"
            name="email"
            required>
        </div>
        <div class="form-box">
            Password:
            <input
            id="password"
            class="register-input"
            type="password"
            name="password"
            pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}"
            title="Debe tener al menos 8 caracteres, una mayúscula, una minúscula, un número y un carácter especial."
            required>
        </div>
         <div style="margin-block: 20px;">
            <button type="submit">
                Login
            </button>
        </div>
        <div style="margin-top:20px; margin-bottom:-20px;">
            ¿Don't you have an account yet?
            <a href="/signup" Style="text-decoration-line: none;"> Sign up </a>
        </div>
    </form>
</div>
