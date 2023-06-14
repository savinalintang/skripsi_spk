@extends('layout.app')
@section('content')

<h5 class="card-title fw-semibold mb-4">Disabled forms</h5>
<div class="card mb-0">
  <div class="card-body">
    {{-- <h5 class="card-title fw-semibold mb-4">Forms</h5>
              <div class="card">
                <div class="card-body">
                  <form method="POST" action="{{ route('kriterias.store')}}">
                    {{ csrf_field() }}
                    <div class="mb-3">
                      <label for="nama_kriteria" class="form-label">Nama Kriteria</label>
                      <input type="text" class="form-control" id="nama_kriteria" aria-describedby="nama_kriteria">
                    </div>
                    <div class="mb-3">
                        <select class="form-control" name="jenis_kriteria">
                            <option value="">Pilih Jenis Kriteria</option>
                           <option value="benefit">Benefit</option>
                           <option value="cost">Cost</option>
                    </div>
                    <button type="submit" class="btn btn-primary" id="submit">Submit</button>
                  </form>
                </div>
              </div> --}}
              <form method="POST" action="{{ route('kriterias.store')}}">
                {{ csrf_field() }}
                <div class="mb-3">
                    <label for="nama_kriteria" class="form-label">Nama Kriteria</label>
                    <input type="text" class="form-control" id="nama_kriteria" name="nama_kriteria" aria-describedby="nama_kriteria">
                </div>
                <div class="mb-3">
                    <select class="form-control" name="jenis_kriteria"  id="jenis_kriteria" required="">
                        <option value="">Pilih Jenis Kriteria</option>
                       <option value="benefit">Benefit</option>
                       <option value="cost">Cost</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary" id="submit">Submit</button>
              </form>
  </div>
</div>
</div>
@endsection
