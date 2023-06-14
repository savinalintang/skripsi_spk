@extends('layout.app')
@section('content')
    <!--  Header End -->
    <div class="container-fluid">
        <div class="col-lg-12">
            <a href="{{ route('kriterias.create') }}" class="btn btn-primary btn-rounded btn-fw"><i class="fa fa-plus"></i>
                Add Data Kriteria </a>
        </div>
        <!--  Row 1 -->
        <div class="row" style="margin-top:20px">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data Kriteria</h4>

                        <div class="table-responsive">
                            <table class="table table-striped" id="table">
                                <thead>
                                    <tr>
                                        <th>
                                            No
                                        </th>
                                        <th>
                                            Nama Kriteria
                                        </th>
                                        <th>
                                            Jenis Kriteria
                                        </th>
                                        <th>
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kriteria as $kriterias)
                                        <tr>
                                            <td>
                                                {{ $kriterias->id }}
                                            </td>
                                            <td>
                                                    {{ $kriterias->nama_kriteria }}
                                            </td>
                                            <td>
                                                {{ $kriterias->jenis_kriteria }}
                                            </td>
                                            <td>
                                                <form action="{{ route('kriterias.destroy', $kriterias->id) }}" method="POST">
                                                    <a class="btn btn-info" id="nama_kriteria" href="{{ route('kriterias.show', $kriterias->id) }}">Show</a>
                                                    <a class="btn btn-success" href="{{ route('kriterias.edit', $kriterias->id) }}">Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
