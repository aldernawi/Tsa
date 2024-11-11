@extends( 'admin.index' )

@section( 'content' )

    <div class="card">
        <div class="card-body">
            <h1 class="mb-4 text-lg">بحث</h1>

            <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                <div class="form-group">
                    <label for="title" class="block text-sm font-medium text-gray-700">العنوان:</label>
                    <p id="title">{{ $research->title }}</p>
                </div>
                <div class="form-group">
                    <label for="user_id" class="block text-sm font-medium text-gray-700">اسم الباحث:</label>
                    <p id="user_id">{{ $research->user_id == null ? 'غير مضبوط' : $research->user->name }}</p>
                </div>
                <div class="form-group">
                    <label for="status" class="block text-sm font-medium text-gray-700">الحالة:</label>
                    <p id="status">{{ $research->status }}</p>
                </div>
                <div class="form-group">
                    <label for="description" class="block text-sm font-medium text-gray-700">الملخص:</label>
                    <p id="abstract">{{ $research->abstract }}</p>
                </div>
                <div class="form-group">
                    <label for="image" class="block text-sm font-medium text-gray-700">الصورة:</label>
                    <img id="image" src="{{ asset('123/' . $research->image) }}" alt="Image">
                </div>
                <div class="form-group">
                    <label for="file" class="block text-sm font-medium text-gray-700">الملف:</label>
                    <a id="file" href="{{ asset('files/' . $research->file) }}" download>Download</a>
                </div>
            </div>
        </div>
    </div>

@endsection