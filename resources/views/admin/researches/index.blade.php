@extends('admin.index')

@section('content')

    <div class="card">
        <div class="card-body">
            <h1 class="mb-4 text-lg">قائمة الأبحاث</h1>

            <!-- زر لفتح Modal لإضافة بحث جديد -->
            <button type="button" class="btn btn-outline-success mb-4" data-toggle="modal" data-target="#addResearchModal">
                إضافة بحث جديد
            </button>

            <div class="table-responsive">
                <table id="researchesTable" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>العنوان</th>
                            <th>اسم الباحث</th>
                            <th>المشاهدات </th>
                            <th>الحالة</th>
                            <th>الإجراءات</th>
                            <th>الإجراءات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($researches as $research)
                            <tr id="research-{{ $research->id }}">
                                <td>{{ $research->title }}</td>
                                <td>{{ $research->user_id == null ? 'غير مضبوط' : $research->user->name }}</td>
                                <td>{{ $research->views }}</td>
                                <td class="status">{{ $research->status }}</td>
                                <td>
                                    @if($research->status == 'pending')
                                        <button class="btn btn-success approve-btn" data-id="{{ $research->id }}">Approve</button>
                                        <button class="btn btn-danger reject-btn" data-id="{{ $research->id }}">Reject</button>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('researche.show', $research->id) }}" class="btn btn-primary">عرض</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal for adding a new research -->
    <div class="modal fade" id="addResearchModal" tabindex="-1" role="dialog" aria-labelledby="addResearchModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addResearchModalLabel">إضافة بحث جديد</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-black">
                    <!-- Form for adding a new research -->
                    <form id="addResearchForm" action="{{ route('researches.save') }}" method="POST" enctype="multipart/form-data">
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
                </div>
            </div>
        </div>
    </div>

    <!-- إضافة مكتبة Tailwind CSS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.approve-btn').click(function() {
                var researchId = $(this).data('id');
                $.ajax({
                    url: '{{ route('research.approve', '') }}/' + researchId,
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        $('#research-' + researchId + ' .status').text('approved');
                        $('#research-' + researchId + ' .approve-btn').remove();
                        $('#research-' + researchId + ' .reject-btn').remove();
                    },
                    error: function(xhr) {
                        alert('حدث خطأ أثناء تحديث الحالة.');
                    }
                });
            });

            $('.reject-btn').click(function() {
                var researchId = $(this).data('id');
                $.ajax({
                    url: '{{ route('research.reject', '') }}/' + researchId,
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        $('#research-' + researchId + ' .status').text('rejected');
                        $('#research-' + researchId + ' .approve-btn').remove();
                        $('#research-' + researchId + ' .reject-btn').remove();
                    },
                    error: function(xhr) {
                        alert('حدث خطأ أثناء تحديث الحالة.');
                    }
                });
            });
        });
    </script>

@endsection
