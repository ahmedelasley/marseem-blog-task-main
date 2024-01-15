<div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">إضافة مدينة جديدة</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('admin.cities.store') }}" method="POST">
            <div class="modal-body">
                @csrf
                <div class="form-group mb-3">
                    <label for="" class="mb-1">الدولة</label>
                    <select name="country_id" id="" class="form-control">
                        <option value="">اختر الدولة</option>
                        @foreach (App\Models\Country::all() as $country)
                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="" class="mb-1">اسم المدينة</label>
                    <input type="text" name="name" id="" class="form-control">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إلغاء</button>
                <button type="submit" class="btn btn-primary">حفظ</button>
            </div>
        </form>

        </div>
    </div>
</div>
