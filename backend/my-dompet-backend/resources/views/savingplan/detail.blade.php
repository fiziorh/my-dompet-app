@include('admin.header')
@include('admin.navbar')
@include('admin.sidebar')
@yield('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card mt-5">
                <div class="card-header text-bold text-center">{{ $title }}</div>
                <div class="card-body">
                    <div class="d-flex justify-content-center d-flex flex-column align-items-center">
                        <img src="{{ asset('img/pig.png') }}" class="border rounded-circle"
                            style="max-height: 100px; max-width:100px;" alt="pig">
                        <h3 class="text-bold">Saving Plan</h3>
                    </div>
                    <form action="{{ route('update.saving', $data->id_saving) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group mt-5">
                            <input type="text" class="form-control" name="title" placeholder="Name" value="{{ $data->title }}">
                        </div>
                        <div class="form-group mt-2">
                            <input type="number" class="form-control" name="target_amount" placeholder="Nominal" value="{{ $data->target_amount }}">
                        </div>
                        <div class="form-group mt-2">
                            <input type="date" class="form-control" name="target_date" placeholder="Nominal" value="{{ $data->target_date }}">
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@include('admin.footer')
