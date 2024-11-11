<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="utf-8">
    <title>NEWSROOM - Free Bootstrap Magazine Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="website/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">   

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- Libraries Stylesheet -->
    <link href="website/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/website/css/style.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>
<body class="tajawal-bold" dir="rtl" >
    <style>
        .tajawal-extralight {
      font-family: "Tajawal", sans-serif;
      font-weight: 200;
      font-style: normal;
    }

    .tajawal-light {
      font-family: "Tajawal", sans-serif;
      font-weight: 300;
      font-style: normal;
    }

    .tajawal-regular {
      font-family: "Tajawal", sans-serif;
      font-weight: 400;
      font-style: normal;
    }

    .tajawal-medium {
      font-family: "Tajawal", sans-serif;
      font-weight: 500;
      font-style: normal;
    }

    .tajawal-bold {
      font-family: "Tajawal", sans-serif;
      font-weight: 700;
      font-style: normal;
    }

    .tajawal-extrabold {
      font-family: "Tajawal", sans-serif;
      font-weight: 800;
      font-style: normal;
    }

    .tajawal-black {
      font-family: "Tajawal", sans-serif;
      font-weight: 900;
      font-style: normal;
    }
    </style>
     <style>
        .blur-image {
            filter: blur(5px); 
        }
    </style>
    
    <!-- Topbar End -->


    <!-- Navbar Start --> 
    <div class="container-fluid p-0 mb-3 " dir="rtl">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-2 py-lg-0 px-lg-5" dir="rtl">
            <a href="" class="navbar-brand d-block d-lg-none">
                <h3 class="m-0 display-5 text-uppercase"><span class="text-primary">مجلة</span>العلوم الشاملة</h3>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-0 px-lg-3 tajawal-bold" id="navbarCollapse">
                <div class="navbar-nav mx-auto py-0">
                    <a href="index.html" class="nav-item nav-link active mx-2">الرئيسية</a>
                    <a href="{{route('researche.create')}}" class="nav-item nav-link hover mx-2">انشر بحثك لدينا</a>
                    <a href="category.html" class="nav-item nav-link mx-2">الأقسام</a>
                </div>
            
                <div class="ms-md-auto pe-lg-10 relative" dir="rtl">
                    @auth
                        <x-dropdown align="left" width="48">
                            <x-slot name="trigger" class="cursor-pointer hover:text-gray-700 focus:text-gray-700 focus:outline-none w-5 h-5">
                                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                    <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                        <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                    </button>
                                @else
                                    <span class="inline-flex rounded-md">
                                        <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                            {{ Auth::user()->name }}
                                            <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                            </svg>
                                        </button>
                                    </span>
                                @endif
                            </x-slot>
            
                            <x-slot name="content" class="w-60">
                                <!-- Account Management -->
                                <div class="block px-4 py-2 text-xs text-gray-400">
                                    {{ __('Manage Account') }}
                                </div>
            
                                <x-dropdown-link href="{{ route('profile.show') }}">
                                    {{ __('Profile') }}
                                </x-dropdown-link>
                                <x-dropdown-link href="{{ route('ownresearch') }}">
                                    {{ __('الابحاث الخاصة بي') }}
                                </x-dropdown-link>
            
                                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                    <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                        {{ __('API Tokens') }}
                                    </x-dropdown-link>
                                @endif
            
                                <div class="border-t border-gray-200"></div>
            
                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}" x-data>
                                    @csrf
            
                                    <x-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-primary">تسجيل الدخول</a>
                    @endauth
                </div>
            </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="container">
            <nav class="breadcrumb bg-transparent m-0 p-0">
                <a class="breadcrumb-item" href="#">الرئيسية</a>
                <a class="breadcrumb-item" href="#">  الأقسام </a>
          <span class="breadcrumb-item active">{{ $reserches->first()->department->name }}</span>
            
            </nav>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- News With Sidebar Start -->
    <div class="container-fluid py-3 text-right">
        <div class="container">
            <div class="row">
                @foreach ($reserches as $reserche)
                <div class="col-lg-4 mb-3">
                    <div class="d-flex">
                        <img src="{{ asset('123/'.$reserche->image)}}" style="width: 100px; height: 100px; object-fit: cover;">
                        <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                            <div class="mb-1" style="font-size: 13px;">
                                <a href="#">{{$reserche->department->name}}</a>
                                <span class="px-1">/</span>
                                <span>{{ $reserche->publication_date }}</span>
                            </div>
                            <a class="h6 m-0" href="{{ route('researche.show', $reserche->id)}}">{{ $reserche->title }}</a>
                        </div>
                    </div>
                </div>
                @endforeach
           
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>

            
            <div class="text-center">
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span class="fa fa-angle-double-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span class="fa fa-angle-double-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        
    
    
    </div>
    <!-- News With Sidebar End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-light pt-5 px-sm-3 px-md-5 " dir="rtl">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-5 mx-5 place-items-start"  dir="rtl">
                <a href="index.html" class="navbar-brand">
                    <h3 class="mb-2 mt-n2 display-5 text-uppercase">مجلة العلوم الشاملة</h3>
                </a>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3350.3369672104222!2d11.980617725285729!3d32.88925797824315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13abdd4a6a8a51cd%3A0x333ed5daa5b3537d!2z2KfZhNmF2LnZh9ivINin2YTYudin2YTZiiDZhNmE2LnZhNmI2YUg2YjYp9mE2KrZgtmG2YrYqSDYsdmC2K_Yp9mE2YrZhg!5e0!3m2!1sar!2sly!4v1722001034532!5m2!1sar!2sly" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> 
            </div>
            <div class="col-lg-3 col-md-6 mb-5 mx-5 text-right" dir="rtl">
                <h4 class="font-weight-bold mb-4 text-md-left">ابرز المعلومات</h4>
                <p><i class="fa fa-tags  text-primary"></i> (ردمد ISSN) 2518-5799 </p>
                <p><i class="fa fa-newspaper  text-primary"></i>  مجلة دولية علمية محكمة نصف سنوية </p>
                <p><i class="fa fa-envelope text-primary"></i> mmfhsh1973@gmail.com</p>
                <a href="https://www.facebook.com/regdalin.high.institute"><p><i class="fab fa-facebook text-primary"></i>صفحة الفيسبوك الخاصة بالمعهد </p></a>
                
            </div>
            <div class="col-lg-3 col-md-6  mx-5" dir="rtl">
                <h4 class="font-weight-bold mb-4 text-md-center"> الروابط السريعة</h4>
                <div class="d-flex flex-column justify-content-start text-right" dir="rtl">
                    <a class="text-secondary mb-2" href="{{route('main')}}">الرئيسية</a>
        <a class="text-secondary mb-2" href="{{route('researche.create')}}">انشر بحث </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-dark back-to-top"><i class="fa fa-angle-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="/website/lib/easing/easing.min.js"></script>
    <script src="website/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="/website/mail/jqBootstrapValidation.min.js"></script>
    <script src="/website/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="/website/js/main.js"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
          var options = {
            damping: '0.5'
          }
          Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
      </script>
      <!-- Github buttons -->
      <script async defer src="https://buttons.github.io/buttons.js"></script>
      <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
      <script src="../assets/js/material-dashboard.min.js?v=3.0.0"></script>
      @stack('modals')
    
      @livewireScripts
</body>

</html>