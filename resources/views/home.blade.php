@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body card text-white bg-dark mb-3" style="max-width: 1000rem;">{{ __('Dashboard') }}
                <h2>Selamat Datang Di Portal Website Kota Kisaran Asahan </h2>

<section aside class="card">
<h2 class="text-black-50">PROFIL SINGKAT KOTA KISARAN</h2>
<h3 class="text-black-50">SEJARAH KOTA KISARAN</h3>
    <P class="text-secondary">Kisaran adalah ibukota Kabupaten Asahan, Provinsi Sumatera Utara. 
    Kisaran meliputi dua kecamatan, yakni Kota Kisaran Barat dan Kota Kisaran Timur. Kisaran selain dilintasi oleh 
    Jalan Raya Lintas Sumatera juga terletak di jalur KA Sumatera bagian utara. Status Kisaran sebelumnya adalah 
    kota administratif, yang kemudian dihapuskan menjadi kecamatan biasa pada tahun 2003 karena tidak memenuhi 
    persyaratan peningkatan daerah otonom.. </P>

    <h3>LOKASI KOTA KISARAN</h3>
    <P class="text-secondary">Kota Kisaran Timur, Kabupaten Asahan, provinsi Sumatera Utara, Indonesia. </P>
            
            
            
            
            </div>
                
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    
                    

</section>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
