<form id="registerForm" method="POST" action ="/create" class="formContent shadow">
    @csrf
    <h1>Register</h1>
    <div class="form-box">
        Name:
        <input
        id="name"
        class="register-input"
        type="text"
        name="name"
        placeholder="Full name"
        autofocus
        required>
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
        Create Password:
        <input
        id="password"
        class="register-input"
        type="password"
        name="password"
        pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}"
        title="Debe tener al menos 8 caracteres, una mayúscula, una minúscula, un número y un carácter especial."
        required>
    </div>
    <div class="form-box">
        Confirm Password:
        <input
        id="password_confirmation"
        class="register-input"
        type="password"
        name="password_confirmation"
        pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}"
        title="Debe tener al menos 8 caracteres, una mayúscula, una minúscula, un número y un carácter especial."
        required>
    </div>
    <div>
        <button type="submit">
            Signup
        </button>
    </div>
    <div style="margin-top:20px; margin-bottom:-20px;">
        ¿Do you already have an account?
        <a href="/login" Style="text-decoration-line: none;"> Login</a>
    </div>
</form>
