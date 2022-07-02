@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <center>
                    <a href="/index"><input style="width: 120px;" type="button" value="BARANG"></a> <br>
                    <br>
                    <a href="/siswa"><input style="width: 120px;" type="button" value="SISWA"></a> <br>
                    <br>
                    <a href="/distributor"><input style="width : 120px;" type="button" value="DISTRIBUTOR"></a> <br>
                    You are logged in Admin Dashboard!
                </center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
