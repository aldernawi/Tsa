
<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="utf-8">
    <title>NEWSROOM - Free Bootstrap Magazine Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="/website/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">   

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- Libraries Stylesheet -->
    <link href="/website/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
    <!-- Customized Bootstrap Stylesheet -->
    <link href="/website/css/style.css" rel="stylesheet">
    <style>
        .researche-card {
            display: flex;
            flex-direction: column;
        }

        @media (min-width: 768px) {
            .researche-card {
                flex-direction: row;
            }

            .researche-image, .researche-text {
                flex: 1;
            }

            .researche-image {
                margin-right: 1rem;
            }

            .researche-text {
                display: flex;
                flex-direction: column;
                justify-content: space-between;
            }
        }

        .researche-image img {
            width: 100%;
            height: auto;
            border-radius: 0.5rem;
        }
    </style>
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
            <div>
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
            
            </div>
        </nav>
    </div>








<div class="container mt-5 text-right" dir="rtl">

    <div class="text-center mt-5">
        <h4 class="text-lg font-medium text-gray-700">الخطوات التي سيمر بها البحث</h4>
        <ul class="list-disc list-inside">
            <li>يستقبل البحث ويتم التأكدمن انه يطابق المواصفات </li>
            <li> في حال الموافقة يتم نشر البحث في المجلة</li>
            <li> في حال الرفض يتم حذف البحث </li>
            <li> يمكنك مطالعة حالة البحث من خلال الضغط على حسابك في الاعلى ومن ثم الدخول على (ابحاثي)</li>
        </ul>
    </div>
<h3 class="text-3xl font-bold mb-5">اضافة بحث</h3>
<form id="addResearchForm" action="{{ route('researche.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="title" class="block text-sm font-medium text-gray-700">العنوان:</label>
        <input type="text" name="title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" id="title" placeholder="عنوان البحث">
    </div>
    <div class="form-group">
        <label for="user_id" class="block text-sm font-medium text-gray-700">اسم الباحث:</label>
        <select name="user_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" id="user_id">
            @foreach($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="abstract" class="block text-sm font-medium text-gray-700">ملخص البحث:</label>
        <textarea name="abstract" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" id="abstract" placeholder="ملخص البحث"></textarea>
    </div>
    <div class="form-group">
        <label for="publication_date" class="block text-sm font-medium text-gray-700">تاريخ النشر:</label>
        <input type="date" name="publication_date" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" id="publication_date">
    </div>
    <div class="form-group">
        <label for="department_id" class="block text-sm font-medium text-gray-700">القسم:</label>
        <select name="department_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" id="department_id">
            @foreach ($departments as $department)
                <option value="{{ $department->id }}">{{ $department->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="file" class="block text-sm font-medium text-gray-700">الملف (PDF أو Word):</label>
        <input type="file" name="file" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" id="file" accept=".pdf,.doc,.docx">
    </div>
    <div class="form-group">
        <label for="image" class="block text-sm font-medium text-gray-700">الصورة:</label>
        <input type="file" name="image" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" id="image">
    </div>

    <button type="submit" class="btn btn-success mt-4">إضافة البحث</button>
</form>

<div id="successMessage"></div>
</div>

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
            <h4 class="font-weight-bold mb-4 text-md-center">الروابط السريعة</h4>
            <div class="d-flex flex-column justify-content-start text-right" dir="rtl">
                <a class="text-secondary mb-2" href="#">الرئيسية</a>
                <a class="text-secondary mb-2" href="#">الأقسام</a>
                <a class="text-secondary mb-2" href="#">Privacy & policy</a>
                <a class="text-secondary mb-2" href="#">Terms & conditions</a>
                <a class="text-secondary" href="#">Contact</a>
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
<script src="/website/lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Contact Javascript File -->
<script src="/website/mail/jqBootstrapValidation.min.js"></script>
<script src="/website/mail/contact.js"></script>
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