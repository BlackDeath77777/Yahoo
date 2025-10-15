<x-auth-layout>
    <x-slot name="title">Infinity Project Archive</x-slot>

    <header class="border-bottom border-3 border-gold p-5 mx-auto"
        style="max-width: 1920px; border-radius: 8px;
               background-image: url('{{ asset('images/banner.jpg') }}');
               background-size: cover; background-repeat: no-repeat;
               background-position: center;">
        <div class="welcome">
            <h1 class="display-4 fw-bold">Welcome to Infinity ♾️</h1>
            <p class="lead">The archive where student innovation lives.</p>
        </div>
    </header>

    <div class="container my-5">
        <h2 class="section-title">🚀 Featured Student Projects</h2>
        <div class="row g-4">

            <div class="col-md-4">
                <div class="card p-3 h-100 shadow-sm">
                    <h5 class="card-title">A</h5>
                    <p class="card-text">A</p>
                    <a href="#" class="btn btn-sm btn-outline-dark">View Project</a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card p-3 h-100 shadow-sm">
                    <h5 class="card-title">B</h5>
                    <p class="card-text">B</p>
                    <a href="#" class="btn btn-sm btn-outline-dark">View Project</a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card p-3 h-100 shadow-sm">
                    <h5 class="card-title">C</h5>
                    <p class="card-text">C</p>
                    <a href="#" class="btn btn-sm btn-outline-dark">View Project</a>
                </div>
            </div>

        </div>
    </div>
</x-auth-layout>
