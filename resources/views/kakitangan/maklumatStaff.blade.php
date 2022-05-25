@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2>Koperasi - Maklumat Kakitangan</h2>

            <div class="card">
                <div class="card-body">
                    <h4>Maklumat Kakitangan</h4>
                    <form action="{{route('maklumatStaffCari')}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <table>
                        <tr>
                            <th>
                                <label for="carian">Masukkan Carian Anda</label>
                            </th>
                            <td>
                                <input type="text" name="carian" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="jenisCarian">Jenis Carian</label>
                            </th>
                            <td>
                                <select name="jenisCarian" id="jenisCarian" class="form-select">
                                    <option value="noStaff">No Staff</option>
                                    <option value="noKPBaru">No Kp Baru</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <button type="submit" class="btn btn-secondary">Cari</button>
                            </td>
                        </tr>
                    </table>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
@endsection
