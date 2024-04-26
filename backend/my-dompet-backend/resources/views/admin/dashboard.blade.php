@include('admin.header')
@include('admin.navbar')
@include('admin.sidebar')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Hello, {{ session('name') }}</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<section class="content">
    <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
            <div class="col-12 col-sm-6 col-md-6">
                <div class="info-box">
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-university"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Main Balance</span>
                        <span class="info-box-number">Rp{{ number_format($main_balance, 2, ',', '.') }}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-6">
                <a href="{{route('saving')}}">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-university"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Saving Target</span>
                            <span class="info-box-number">Rp{{ number_format($total_goals, 2, ',', '.') }}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </a>
            </div>
        </div>
        <div class="col-12 d-flex justify-content-center">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">History</div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th style="width:10%">No</th>
                                    <th style="width:20%">Date</th>
                                    <th style="width:35%">Income</th>
                                    <th style="width:35%">Spending</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                use Carbon\Carbon;
                                @endphp
                                @foreach($income_records as $key => $income)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ Carbon::parse($income->created_at)->format('d F Y') }}</td>
                                    <td>Rp{{ number_format($income->nominal, 2, ',', '.') }}</td>
                                    <td>-</td>
                                </tr>
                                @endforeach
                                @foreach($spending_records as $key => $spending)
                                <tr>
                                    <td>{{ count($income_records) + $key + 1}}</td>
                                    <td>{{ Carbon::parse($spending->created_at)->format('d F Y') }}</td>
                                    <td>-</td>
                                    <td>Rp{{ number_format($spending->nominal, 2, ',', '.') }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('admin.footer')