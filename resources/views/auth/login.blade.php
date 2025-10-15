<x-auth-reglog>

    <style>
.custom-login-btn {
    width: 100%;
    background: linear-gradient(135deg, #4b6cb7, #182848);
    color: white;
    border: none;
    padding: 12px 20px;
    font-size: 16px;
    border-radius: 5px;
    transition: background 0.3s ease;
}
.custom-login-btn:hover {
    background: linear-gradient(135deg, #3a4e9a, #121d36);
}
</style>


    <x-slot name="title">Login</x-slot>

    <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <form method="POST" action="/login">
            @csrf <!-- cross site request forgery token --> <!-- to protect from cross site request forgery attacks -->

            <div class="card frosted-card p-4 text-gold" style="width: 30rem;">
                <div class="text-center mb-4">
                    <img src="{{ asset('images/infinity.png') }}" alt="INFINITY Logo" class="img-fluid" style="max-height: 100px;">
                    <h3 class="mt-2">Login to your INFINITY account</h3>
                </div>

                <div class="text-center">
                    
                    <input type="email" class="form-control mb-3" placeholder="Email" name="email" required />
                    <input type="password" class="form-control mb-3" placeholder="Password" name="password" required />
                    <p>Not yet registered? <a href="register">Go to Register Page</a></p>

                </div>

                <div class="text-center">
                    <button type="submit" class="custom-login-btn">Login</button>
                </div>
            </div>
        </form>
    </div>

</x-auth-reglog>
