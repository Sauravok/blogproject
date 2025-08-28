    <div class="header_main">
            <div class="mobile_menu">
               <nav class="navbar navbar-expand-lg navbar-light bg-light">
                  <div class="logo_mobile"><a href="{{route('home')}}"><img src="images/logo.png"></a></div>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                     <ul class="navbar-nav">
                        <li class="nav-item">
                           <a  href="">Home</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="about.html">About</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="services.html">Services</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link " href="blog.html">Blog</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link " href="contact.html">Contact</a>
                        </li>
                     </ul>
                  </div>
               </nav>
            </div>
            <div class="container-fluid">
               <div class="logo"><a href="{{route('home')}}"><img height="auto" width="100px" border-radius:50% src="images/ho.jpg"></a></div>
               <div class="menu_main">
                  <ul>
                     <li class="active"><a href="{{route('home')}}">Home</a></li>
                     <li><a href="{{route('about')}}">About</a></li>
                     {{-- <li><a href="{{route('services')}}">Services</a></li> --}}
                     <li><a href="{{route('blog')}}">Blog</a></li>
                     <li><a href="/form">Login</a></li>
                     <li><a href="/register">Register</a></li>

                  </ul>
               </div>
            </div>
         </div>