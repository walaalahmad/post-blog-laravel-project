<x-layout>
    {{-- @include('_post_header') --}}
    {{-- <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script> --}}
<section>
    <main class="max-w-lg mx-auto mt-10">
        <x-panel>
            <h1 class="text-center font-bold text-xl">Log In!</h1>

    <form class="form-horizontal" action='/sessions' method="POST">
        @csrf
        <x-form.input name="email" type="email" />
        <x-form.input name="password" type="password" />

          {{-- <div class="control-group">
            <!-- E-mail -->
            <label class="control-label" for="email">E-mail</label>
            <div class="controls">
              <input type="email"  value='{{ old('email') }}' id="email" name="email"  placeholder="" class="input-xlarge">
            </div>
          </div> --}}
          {{-- @error('email')
          <p class="text-red-500 mt-1 ml-20"> {{ $message }}</p>
          @enderror --}}
          {{-- <div class="control-group">
            <!-- Password-->
            <label class="control-label" for="password">Password</label>
            <div class="controls">
              <input type="password" id="password" name="password" placeholder="" class="input-xlarge">
            </div>
          </div>
          @error('password')
          <p class="text-red-500 mt-1 ml-20"> {{ $message }}</p>
          @enderror --}}

{{--
          <div class="control-group">
            <!-- Button -->
            <div class="controls">
              <button class="btn btn-success" >Login</button>
            </div>
          </div> --}}
          <x-form.button> LOg in</x-form.button>

      </form>
    </x-panel>
</main>
</section>
</x-layout>
