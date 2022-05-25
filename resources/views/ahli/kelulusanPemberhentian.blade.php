@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2>Koperasi - Kemaskini Kelulusan Pemberhentian</h2>

            <div class="card">
                <div class="card-body">
                    <h4>Kemaskini Status Anggota Berhenti</h4>
                    <form action="{{route('lulusBerhentiCari')}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <table>
                        <tr>
                            <th>
                                <label for="carian">No Anggota</label>
                            </th>
                            <td>
                                <input type="text" name="carian" class="form-control">
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
