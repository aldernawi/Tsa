@extends('admin.index')

@section('content')

    <div class="card ">
        <div class="card-body">
            <h2 class="mb-4">قائمة التخصصات</h2>
    
            <!-- زر لفتح Modal لإضافة مستخدم جديد -->
            <button type="button" class="btn btn-outline-success mb-4" data-toggle="modal" data-target="#addUserModal">
                إضافة تخصص جديد
            </button>
    
            <div class="table-responsive">
                <table id="usersTable" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>الاسم</th>
                            <th>الإجراءات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($departments as $department)
                            <tr>
                                <td>{{ $department->name }}</td>
                                <td>
                                    <a href="{{ route('department.edit', $department->id) }}" class="btn btn-primary">تعديل</a>
                                    <form action="{{ route('department.destroy', $department->id) }}" method="POST" class="d-inline">
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
                    <h5 class="modal-title" id="addUserModalLabel">إضافة تخصص جديد</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-black">
                    <!-- Form for adding a new user -->
                    <form action="{{ route('department.store') }}" method="POST">
                        @csrf
                        <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                            <div class="form-group">
                                <label for="name" class="block text-sm font-medium text-gray-700">الاسم:</label>
                                <input type="text" name="name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" id="name" placeholder="اسم القسم">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success mt-4">إضافة قسم </button>
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