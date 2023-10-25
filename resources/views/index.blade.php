@extends('layouts.master')

@section("content")


{{-- @dd($data) --}}

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Gestion des Competences</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Home</li>
                        <li class="breadcrumb-item "><a href="{{route('create')}}">Ajouter Competence</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
                <!-- /.card-header -->
                <div class="card-header">
                    <h3 class="card-title">Tableau des competences</h3>
                </div>
                <div class="card-body  p-0">
                <table class="table table-light table-hover">
                <thead>
                    <tr>
                        <th>References</th>
                        <th>Code</th>
                        <th>Nom</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($data as $competene)
                        <tr>
                            <th scope="row">{{ $competene->References }}</th>
                            <td>{{ $competene->Code }}</td>
                            <td>{{ $competene->Nom }}</td>
                            <td>{{ $competene->Description }}</td>
                            <td>
                            <div class="btn-group" style="gap: 8px;">
                                <a href="#edit" class="btn btn-success">
                                <i class="fas fa-edit"></i>
                                </a>
                                <a class="btn btn-danger">
                                <i class="fas fa-trash"></i>
                                </a>
                            </div>
                            </td>
                        </tr>
                    @empty
                    <tr>
                        <td colspan="5">Empty Data Competences</td>
                    </tr>
                    @endforelse
                </tbody>
                </table>
                </div>
            </div>
          </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

@endsection
