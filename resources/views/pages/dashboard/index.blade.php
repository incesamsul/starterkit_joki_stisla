@extends('layouts.v_template')


@section('content')
    <section class="section">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-customs">
                        Dashboard
                    </div>
                    <div class="card-body">
                        <h5>Hi, Selamat datang Sistem informasi Bimbingan online</h5>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection

@section('script')
    <script>
        $('#liDashboard').addClass('active');
    </script>
@endsection
