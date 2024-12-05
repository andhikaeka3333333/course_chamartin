<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <main>
        <div class="container py-4">
          <header class="pb-3 mb-4 border-bottom">
              <div class="row">
                  <div class="col-md-1">


                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                      </form>
                  </div>
              </div>

          </header>

          <div class="p-5 mb-4 bg-light rounded-3">
            <div class="container-fluid py-5">

              @session('success')
                  <div class="alert alert-success" role="alert">
                    {{ $value }}
                  </div>
              @endsession

              <h1 class="display-5 fw-bold">Hi, {{ auth()->user()->name }}</h1>
              <p class="col-md-8 fs-4">Welcome to dashboard.<br/>Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
              <button class="btn btn-primary btn-lg" type="button">Dashboard</button>
            </div>
          </div>

        </div>
      </main>
</x-app-layout>






