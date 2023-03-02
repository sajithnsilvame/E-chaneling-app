<nav class="navbar navbar-expand-lg navbar-light bg-light">
   {{-- logo start --}}
         <div class="logo">
            <a href="{{url('/')}}">
               <img src="images/logo.png"></a>
         </div>
   {{-- end logo --}}
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
               <li class="nav-item active">
                  <a class="nav-link" href="{{url('/')}}">Home</a>
               </li>
               
               <li class="nav-item">
                  <a class="nav-link" href="{{url('my-doctors')}}">MyDoctors</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="{{url('appointment')}}">Appointment</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="{{url('pharmacy')}}">Pharmacy</a>
               </li>
               @if (Route::has('login'))
                    @auth
                    <form method="POST" action="{{ route('logout') }}">
                     @csrf
                     <button type="submit" class="nav-link">Logout</button>
                     </form>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('login')}}">Login</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('register')}}">Register</a>
                    </li>
                    @endauth
               @endif
               
            </ul>
         </div>
      </nav>