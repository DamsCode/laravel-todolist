<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Login Component!!!</div>

          <div class="card-body">
            <div class="flex-center position-ref full-height">
              @if (Route::has('login'))
              <div class="top-right links">
                @auth
                <a href="{{ url('/home') }}">Home</a>
                @else
                <a href="{{ route('login') }}">Login</a>
                @if (Route::has('register'))
                <a
                  href="{{ route('register') }}"
                >Register</a>
                @endif
                @endauth
              </div>@endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  mounted() {
    console.log("Component mounted.");
  }
};
</script>