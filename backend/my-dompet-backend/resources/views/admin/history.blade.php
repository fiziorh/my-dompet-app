@include('admin.header')
@include('admin.navbar')
@include('admin.sidebar')
@yield('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card history-card mt-5">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="card-title text-bold mb-3">History Title</h5>
                            <p class="card-text">Description.</p>
                        </div>
                        <div class="col-md-6 d-flex justify-content-end">
                            <h3 class="text-bold">+ Nominal</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('admin.footer')
