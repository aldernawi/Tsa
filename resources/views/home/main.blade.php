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
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
    <!-- Customized Bootstrap Stylesheet -->
    <link href="website/css/style.css" rel="stylesheet">
    
</head>

<body class="tajawal-bold">
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
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row align-items-center bg-light px-lg-5 ">
            <div class="col-12 col-md-8 pb-2">
                <div class="d-flex justify-content-between">
                    <div class="owl-carousel owl-carousel-1 tranding-carousel position-relative d-inline-flex align-items-center ml-3" style="width: calc(100% - 100px); padding-left: 90px;">
                        <div class="text-truncate"><a class="text-secondary" href=""> مجلة دولية علمية محكمة نصف سنوية </a></div>
                        <div class="text-truncate"><a class="text-secondary" href=""> مجلة العلوم الشاملة</a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-right d-none d-md-block" dir="rtl">
                (ردمد ISSN) 2518-5799
            </div>
        </div>
        <div class="row align-items-center py-2 px-lg-5">
            <div class="col-lg-4">
                <a href="" class="navbar-brand d-none d-lg-block">
                </a>
            </div>
            <div class="col-lg-8 text-center text-lg-right">
                <img class="img-fluid" src="img/ads-700x70.jpg" alt="">
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0 mb-3" dir="rtl">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-2 py-lg-0 px-lg-5">
            <a href="#" class="navbar-brand">
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


    <!-- Top News Slider Start -->
    
    <!-- Top News Slider End -->

<section class="container-fluid py-3" dir="rtl">
     <div class="container d-flex justify-content-center align-items-center mt-5">
        <form id="searchForm" class="w-50">
            <h3 class="text-primary text-center mb-3">ابحث هنا</h3>
            <div class="form-group">
                <input type="text" id="searchInput" placeholder="ابحث  هنا" class="form-control form-control-lg">
            </div>
            <div class="form-group mt-2">
                <select id="searchResults" class="form-control form-control-lg" size="5" style="display: none;"></select>
            </div>
        </form>
    </div>

    <script>
        document.getElementById('searchInput').addEventListener('input', function () {
            const query = this.value;
            const results = document.getElementById('searchResults');
            if (query.length > 2) {
                fetch(`/search?query=${query}`)
                    .then(response => response.json())
                    .then(data => {
                        results.innerHTML = '';
                        if (data.length > 0) {
                            data.forEach(item => {
                                const option = document.createElement('option');
                                option.value = item.id;
                                option.textContent = item.title;
                                results.appendChild(option);
                            });
                            results.style.display = 'block';
                        } else {
                            results.style.display = 'none';
                        }
                    })
                    .catch(error => {
                        console.error('Error fetching search results:', error);
                        results.style.display = 'none';
                    });
            } else {
                results.style.display = 'none';
            }
        });

        document.getElementById('searchResults').addEventListener('change', function () {
            const selectedOption = this.options[this.selectedIndex];
            if (selectedOption) {
                window.location.href = `/researche/${selectedOption.value}`;
            }
        });
    </script>
</section>
    <!-- Main News Slider Start -->
    <div class="container-fluid py-3" >
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="owl-carousel owl-carousel-2 carousel-item-1 position-relative mb-3 mb-lg-0">
                        @foreach($reserches as $reserch)

                        <div class="position-relative overflow-hidden" style="height: 435px;" dir="rtl">
                            <img class="img-fluid h-100" src="{{asset('123/'.$reserch->image)}}"   style="object-fit: cover;">
                            <div class="overlay">
                                <div class="mb-1">
                                    <a class="text-white" href="">قسم {{ $reserch->department->name }}</a>
                                    <span class="px-2 text-white">/</span>
                                    <a class="text-white" href=""> تاريخ النشر {{ $reserch->publication_date }}</a>
                                </div>
                                <a class="h2 m-0 text-white font-weight-bold" href="{{ route('researche.show', $reserch->id)}}">{{ $reserch->title }}</a>
                            </div>
                        </div>
                        @endforeach
                      
                    </div>
                </div>
                <div class="col-lg-4" dir="rtl">
                    <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                        <h3 class="m-0">الأقسام</h3>
                        <a class="text-secondary font-weight-medium text-decoration-none" href="">عرض الكل</a>
                    </div>
                    @foreach ($Departments as $department)
                    <div class="position-relative overflow-hidden mb-3" style="height: 80px;">
                        <img class="img-fluid w-100 h-100 blur-image hover-shadow" src="website/img/cat-500x80-2.jpg" style="object-fit: cover;">
                        <a href="{{route('department.explore', $department->id)}}" class="overlay align-items-center justify-content-center h4 m-0 text-white text-decoration-none">
                            {{$department->name}}
                        </a>
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Main News Slider End -->


    <!-- Featured News Slider Start -->
    
    <!-- Featured News Slider End -->


    <!-- Category News Slider Start -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 py-3">
                    <div class="bg-light py-2 px-4 mb-3">
                        <h3 class="m-0">تقنية المعلومات</h3>
                    </div>
                    <div class="owl-carousel owl-carousel-3 carousel-item-2 position-relative">
                        @foreach($reserche1 as $dd)

                        <div class="position-relative" style="max-height: 400px" dir="rtl">
                            <img class="img-fluid w-100" src="{{asset('123/'.$dd->image)}}" alt="" style="object-fit: cover;max-height: 200px">
                            <div class="overlay position-relative bg-light">
                                <div class="mb-2" style="font-size: 13px;">
                                    <a href="{{ route('researche.show', $dd->id)}}">{{$dd->title}}</a>
                                    <span class="px-1">/</span>
                                    <span>{{$dd->publication_date}}</span>
                                </div>
                                <style>
                                    .truncate {
                                        white-space: nowrap;
                                        overflow: hidden;
                                        text-overflow: ellipsis;
                                        max-width: 200px;
                                        max-height: 200px; /* يمكنك تغيير العرض حسب الحاجة */
                                    }
                                </style>
                                
                                <a href="" class="truncate">{{ $dd->abstract }}</a>
                                
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-6 py-3">
                    <div class="bg-light py-2 px-4 mb-3">
                        <h3 class="m-0">العلوم الادارية والمالية</h3>
                    </div>
                    <div class="owl-carousel owl-carousel-3 carousel-item-2 position-relative">
                        @foreach($reserche2 as $bb)
                        <div class="position-relative" style="max-height: 400px" dir="rtl">
                            <img class="img-fluid w-100" src="{{asset('123/'.$bb->image)}}" alt="" style="object-fit: cover;max-height: 200px">
                            <div class="overlay position-relative bg-light">
                                <div class="mb-2" style="font-size: 13px;">
                                    <a href="{{ route('researche.show', $bb->id)}}">{{$bb->title}}</a>
                                    <span class="px-1">/</span>
                                    <span>{{$bb->publication_date}}</span>
                                </div>
                                <style>
                                    .truncate {
                                        white-space: nowrap;
                                        overflow: hidden;
                                        text-overflow: ellipsis;
                                        max-width: 200px;
                                        max-height: 200px; /* يمكنك تغيير العرض حسب الحاجة */
                                    }
                                </style>
                                
                                <a href="" class="truncate">{{ $bb->abstract }}</a>
                                
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                     
                    </div>
                </div>
            </div>

    <!-- Category News Slider End -->


    <!-- Category News Slider Start -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 py-3">
                    <div class="bg-light py-2 px-4 mb-3">
                        <h3 class="m-0">العمارة والانشاء</h3>
                    </div>
                    <div class="owl-carousel owl-carousel-3 carousel-item-2 position-relative">
                        @foreach($reserche3 as $cc)
                        <div class="position-relative" style="max-height: 400px" dir="rtl">
                            <img class="img-fluid w-100" src="{{asset('123/'.$cc->image)}}" alt="" style="object-fit: cover;max-height: 200px">
                            <div class="overlay position-relative bg-light">
                                <div class="mb-2" style="font-size: 13px;">
                                    <a href="{{ route('researche.show', $cc->id)}}">{{$cc->title}}</a>
                                    <span class="px-1">/</span>
                                    <span>{{$cc->publication_date}}</span>
                                </div>
                                <style>
                                    .truncate {
                                        white-space: nowrap;
                                        overflow: hidden;
                                        text-overflow: ellipsis;
                                        max-width: 200px;
                                        max-height: 200px; /* يمكنك تغيير العرض حسب الحاجة */
                                    }
                                </style>
                                
                                <a href="" class="truncate">{{ $cc->abstract }}</a>
                                
                            </div>
                        </div>
                        @endforeach
                </div>
                </div>

                <div class="col-lg-6 py-3">
                    <div class="bg-light py-2 px-4 mb-3">
                        <h3 class="m-0">الكهربائية والميكانيكية</h3>
                    </div>
                    <div class="owl-carousel owl-carousel-3 carousel-item-2 position-relative">
                        @foreach($reserche4 as $aa)
                        <div class="position-relative" style="max-height: 400px" dir="rtl">
                            <img class="img-fluid w-100" src="{{asset('123/'.$aa->image)}}" alt="" style="object-fit: cover;max-height: 200px">
                            <div class="overlay position-relative bg-light">
                                <div class="mb-2" style="font-size: 13px;">
                                    <a href="{{ route('researche.show', $aa->id)}}">{{$aa->title}}</a>
                                    <span class="px-1">/</span>
                                    <span>{{$aa->publication_date}}</span>
                                </div>
                                <style>
                                    .truncate {
                                        white-space: nowrap;
                                        overflow: hidden;
                                        text-overflow: ellipsis;
                                        max-width: 200px;
                                        max-height: 200px; /* يمكنك تغيير العرض حسب الحاجة */
                                    }
                                </style>
                                
                                <a href="" class="truncate">{{ $aa->abstract }}</a>
                                
                            </div>
                        </div>
                        @endforeach
                </div>
                </div>
        </div>
    </div>
    </div>
<section class="py-4" dir="rtl" id="departments">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-12">
                        <h1 class="h3 mb-0 text-center text-lg-center">كافة الاقسام</h1>
                        <br>
                        <div class="d-flex align-items-center bg-light rounded py-2 px-4 mb-3">
                            <div class="d-flex flex-wrap m-n1">
                                @foreach ($Department as $Departments)
                                <a href="{{route('department.explore', $Departments->id)}}" class="btn btn-sm btn-outline-secondary m-1">{{ $Departments->name }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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
                    <a class="text-secondary mb-2" href="#departments">الأقسام</a>
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
    <script src="website/lib/easing/easing.min.js"></script>
    <script src="website/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="website/mail/jqBootstrapValidation.min.js"></script>
    <script src="website/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="website/js/main.js"></script>
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