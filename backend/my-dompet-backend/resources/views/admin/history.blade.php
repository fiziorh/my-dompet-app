@include('admin.header')
@include('admin.navbar')
@include('admin.sidebar')
@yield('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            @forelse($histories as $history)
                <div class="card history-card mt-5 {{ !is_null($history->id_income) ? 'bg-success' : (!is_null($history->id_spending) ? 'bg-danger' : '') }}">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                @if (!is_null($history->id_income))
                                    <h5 class="card-title text-bold mb-3">{{ $history->income->title }}</h5>
                                @elseif(!is_null($history->id_spending))
                                    <h5 class="card-title text-bold mb-3">{{ $history->spending->title }}</h5>
                                @endif
                                @if (!is_null($history->id_income))
                                    <p class="card-text">{{ $history->income->description }}</p>
                                @elseif(!is_null($history->id_spending))
                                    <p class="card-text">{{ $history->spending->description }}</p>
                                @endif
                            </div>
                            <div class="col-md-6 d-flex justify-content-end">
                                <h3 class="text-bold">
                                    @if (!is_null($history->id_income))
                                        {{ !is_null($history->id_income) ? '+' : '-' }}Rp{{ number_format($history->income->nominal, 2, ',', '.') }}
                                    @elseif(!is_null($history->id_spending))
                                        {{ !is_null($history->id_spending) ? '-' : '-' }}Rp{{ number_format($history->spending->nominal, 2, ',', '.') }}
                                    @endif
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="text-center">You have not made any transactions yet.</div>
            @endforelse
        </div>
    </div>
    </div>


    @include('admin.footer')
