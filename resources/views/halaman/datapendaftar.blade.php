@extends('layouts.app')

@section('content')
<style type="text/css">

    table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}
</style>


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                
                    <table>

                    <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>IPK</th>
                    <th>Prestasi</th>
                    <th>Tingkat</th>
                    <th>Pengalaman Kerja</th>
                    <th>Lama Kerja</th>
                    <th>Pengalaman Organisasi</th>
                    <th>Posisi</th>
                    </tr>

                    @foreach($pendaftar as $pendafta)
                    
                    <tr>
                    <td>{{ $pendafta->nama }}</td>
                    <td>{{ $pendafta->email }}</td>
                    <td>{{ $pendafta->ipk }}</td>
                    <td>{{ $pendafta->prestasi }}</td>
                    <td>
                    @if($pendafta->tingkat == "1")

                    Regional

                    @endif
                
                    @if($pendafta->tingkat == "2")

                    Nasional

                    @endif

                    @if($pendafta->tingkat == "3")

                    Internasional

                    @endif


                    </td>
                    <td>{{ $pendafta->pengalaman_kerja }}</td>
                    <td>{{ $pendafta->lama_kerja }} Tahun</td>
                    <td>{{ $pendafta->pengalaman_organisasi }}</td>
                    <td>{{ $pendafta->posisi }}</td>
                    </tr>
                    @endforeach
                    </table>

{!!$pendaftar->render()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
