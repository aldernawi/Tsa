@extends('admin.index')

@section('content')

    <div class="card ">
        <div class="card-body">
            <h2 class="mb-4">قائمة المستخدمين</h2>
    
            <!-- زر لفتح Modal لإضافة مستخدم جديد -->
            <button type="button" class="btn btn-outline-success mb-4" data-toggle="modal" data-target="#addUserModal">
                إضافة مستخدم جديد
            </button>
    
            <div class="table-responsive">
                <table id="usersTable" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>الاسم</th>
                            <th>الدرجة الأكاديمية</th>
                            <th>البريد الإلكتروني</th>
                            <th>نوع المستخدم</th>
                            <th>العنوان</th>
                            <th>مكان العمل</th>
                            <th>الإجراءات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->degree }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->userType }}</td>
                                <td>{{ $user->address }}</td>
                                <td>{{ $user->Workplace }}</td>
                                <td>
                                    <a href="{{ route('user.edit', $user->id) }}" class="btn btn-primary">تعديل</a>
                                    <form action="{{ route('user.destroy', $user->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">حذف</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="addUserModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addUserModalLabel">إضافة مستخدم جديد</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-black">
                    <!-- Form for adding a new user -->
                    <form action="{{ route('user.store') }}" method="POST">
                        @csrf
                        <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                            <div class="form-group">
                                <label for="name" class="block text-sm font-medium text-gray-700">الاسم:</label>
                                <input type="text" name="name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" id="name" placeholder="اسم المستخدم">
                            </div>
                            <div class="form-group">
                                <label for="degree" class="block text-sm font-medium text-gray-700">الدرجة الأكاديمية:</label>
                                <input type="text" name="degree" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" id="degree" placeholder="الدرجة الأكاديمية">
                            </div>
                        </div>
                        <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                            <div class="form-group">
                                <label for="email" class="block text-sm font-medium text-gray-700">البريد الإلكتروني:</label>
                                <input type="email" name="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" id="email" placeholder="البريد الإلكتروني">
                            </div>
                            <div class="form-group">
                                <label for="password" class="block text-sm font-medium text-gray-700">كلمة المرور:</label>
                                <input type="password" name="password" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" id="password" placeholder="كلمة المرور">
                            </div>
                        </div>
                        <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                            <div class="form-group">
                                <label for="userType" class="block text-sm font-medium text-gray-700">نوع المستخدم:</label>
                                <select name="userType" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" id="userType">
                                    <option value="admin">مدير النشر</option>
                                    <option value="user">الباحث </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="address" class="block text-sm font-medium text-gray-700">العنوان:</label>
                                <input type="text" name="address" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" id="address" placeholder="العنوان">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Workplace" class="block text-sm font-medium text-gray-700">مكان العمل:</label>
                            <input type="text" name="Workplace" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" id="Workplace" placeholder="مكان العمل">
                        </div>
                        <button type="submit" class="btn btn-success mt-4">إضافة المستخدم</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <!-- إضافة مكتبة Tailwind CSS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    
    @endsection