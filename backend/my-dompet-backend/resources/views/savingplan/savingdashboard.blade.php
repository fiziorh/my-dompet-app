@include('admin.header')
@include('admin.navbar')
@include('admin.sidebar')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 mt-5">
                <a href="{{ route('create.savingplan') }}">
                    <div class="card">
                        <div class="card-body btn btn-success d-flex flex-column align-items-center">
                            <button class="border-white rounded-circle bg bg-success" style="font-size:50px;">
                                <i class="fas fa-plus"></i>
                            </button>
                            <span class="text-light text-bold mb-4" style="margin-top: 20px;">Add Saving Plan</span>
                        </div>
                    </div>
                </a>
            </div>
            @forelse ($saving as $s)
                <div class="col-md-4 mt-5">
                    <div class="card">
                        <div class="card-body text-center text-bold">
                            <h2>{{ ucfirst($s->title) }}</h2>
                        </div>
                        <div class="text-center text-bold">
                            <h5>Rp{{ number_format($s->target_amount, 2, ',', '.') }}</h5>
                        </div>
                        <div class="text-center text-bold"><span>{{ $s->target_date }}</span></div>
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('detail.saving', $s->id_saving) }}" class="btn btn-primary mr-3 mb-3"><i class="fas fa-info"></i> Detail</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="text-center">Empty Saving Plan</div>
            @endforelse
        </div>
    </div>
    @include('admin.footer')
