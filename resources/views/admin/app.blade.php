@extends('admin.index')

@section('content')

<div class="row">
  <div class="col-lg-3 col-sm-6">
    <div class="card">
        <div class="card-header p-3 pt-2">
            <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">people</i> <!-- أيقونة الباحثين -->
            </div>
            <div class="text-start pt-1">
                <p class="text-sm mb-0 text-capitalize">الباحثين</p>
                <h4 class="mb-0">{{$users}}</h4>
            </div>
        </div>
        <hr class="dark horizontal my-0">
        <div class="card-footer p-3">
            <p class="mb-0 text-start"><span class="text-success text-sm font-weight-bolder ms-1">+7% </span>مقارنة بيوم أمس</p>
        </div>
    </div>
  </div>

  <div class="col-lg-3 col-sm-6 mb-lg-0 mb-4">
      <div class="card">
          <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">supervisor_account</i> <!-- أيقونة مديرين النشر -->
              </div>
              <div class="text-start pt-1">
                  <p class="text-sm mb-0 text-capitalize">مديرين النشر</p>
                  <h4 class="mb-0">{{$user}}</h4>
              </div>
          </div>
          <hr class="dark horizontal my-0">
          <div class="card-footer p-3">
              <p class="mb-0 text-start"><span class="text-success text-sm font-weight-bolder ms-1">+33% </span>من الأسبوع الماضي</p>
          </div>
      </div>
  </div>

  <div class="col-lg-3 col-sm-6 mb-lg-0 mb-4">
      <div class="card">
          <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">school</i> <!-- أيقونة التخصصات -->
              </div>
              <div class="text-start pt-1">
                  <p class="text-sm mb-0 text-capitalize">التخصصات</p>
                  <h4 class="mb-0">{{$departments}}</h4>
              </div>
          </div>
          <hr class="dark horizontal my-0">
          <div class="card-footer p-3">
              <p class="mb-0 text-start"><span class="text-success text-sm font-weight-bolder ms-1">+5% </span>من الشهر الماضي</p>
          </div>
      </div>
  </div>

  <div class="col-lg-3 col-sm-6 mb-lg-0 mb-4">
      <div class="card">
          <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">check_circle</i> <!-- أيقونة الابحاث المقبولة -->
              </div>
              <div class="text-start pt-1">
                  <p class="text-sm mb-0 text-capitalize">الابحاث المقبولة</p>
                  <h4 class="mb-0">{{$researches1}}</h4>
              </div>
          </div>
          <hr class="dark horizontal my-0">
          <div class="card-footer p-3">
              <p class="mb-0 text-start"><span class="text-success text-sm font-weight-bolder ms-1">+55% </span>من الأسبوع الماضي</p>
          </div>
      </div>
  </div>
  
</div>

<div class="row mt-4"> <!-- إضافة تباعد بين الصفين -->
    <div class="col-lg-3 col-sm-6 mb-lg-0 mb-4">
        <div class="card">
            <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                    <i class="material-icons opacity-10">hourglass_empty</i> <!-- أيقونة الابحاث المعلقة -->
                </div>
                <div class="text-start pt-1">
                    <p class="text-sm mb-0 text-capitalize">الابحاث المعلقة</p>
                    <h4 class="mb-0">{{$researches2}}</h4>
                </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
                <p class="mb-0 text-start"><span class="text-success text-sm font-weight-bolder ms-1">+55% </span>من الأسبوع الماضي</p>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-sm-6 mb-lg-0 mb-4">
        <div class="card">
            <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                    <i class="material-icons opacity-10">cancel</i> <!-- أيقونة الابحاث المرفوضة -->
                </div>
                <div class="text-start pt-1">
                    <p class="text-sm mb-0 text-capitalize">الابحاث المرفوضة</p>
                    <h4 class="mb-0">{{$researches3}}</h4>
                </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
                <p class="mb-0 text-start"><span class="text-success text-sm font-weight-bolder ms-1">+55% </span>من الأسبوع الماضي</p>
            </div>
        </div>
    </div>
</div>

@endsection
