@extends('layouts.app')
@section('content')

 <div class="row-justify-content-center">
     <div class="card">
         <div class="card-header">KOPERASI - Daftar Syarikat</div>
         <div class="card-body">
             <table>
                 <tr>
                     <td style="padding: 5px;">Status Pendaftaran</td>
                     <th style="padding: 5px;">Berjaya</th>
                 </tr>
                 <tr>
                     <td style="padding: 5px;">Syarikat</td>
                     <th style="padding: 5px;">{{$nama}}</th>
                 </tr>
             </table>
         </div>
     </div>
 </div>

@endsection