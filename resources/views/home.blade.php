@extends('layouts.app')

@section('content')

   <div style="margin-top: 20px; margin-left: 100px; margin-right: 100px" align="center">

<div class="row text-center" align="center">

<div><h2>MENU UTAMA</h2>
<hr>
</div>
 
            <div class="col-md-4 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="http://www.propertymanagementpuntacana.com/wp-content/uploads/2014/05/Go-Punta-Cana-Real-Estate-Property-Management-Accounting-And-Bookeeping.jpg" alt="">
                    <div class="caption">
                        <h3>Data Pendaftar</h3>
                        <p>
                            <a href="{{url('/data')}}" class="btn btn-primary">Mulai</a> 
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="http://www.hremploymentscreening.com/images-blog/fraudulent-resumes-employment-background-verification-check.jpg" alt="">
                    <div class="caption">
                        <h3>Seleksi</h3>
                        <p>
                            <a href="{{url('seleksi')}}" class="btn btn-primary">Mulai</a> 
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="http://www.desktopimages.org/pictures/2013/0227/1/briefcase-full-of-money-background-354620.jpg" alt="">
                    <div class="caption">
                        <h3>Tambah Pendaftar</h3>
                        <p>
                            <a href="{{url('/form')}}" class="btn btn-primary">Mulai</a> 
                        </p>
                    </div>
                </div>
            </div>

        </div>

        </div>
@endsection
