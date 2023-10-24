@extends('layouts.master')


@section("content")

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
                        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                        <li class="breadcrumb-item active">Edit Competence</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- form  -->
            <form method="post">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                {{-- <div class="text-center"></div> --}}
                                <h3 class="card-title">Compentence</h3>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="reference">Compentence Reference</label>
                                    <input name="reference" type="text" class="form-control" id="reference" placeholder="Entre reference" <?php echo isset($_GET['action']) && str_starts_with($_GET['action'], 'edit') ? 'value="' . $competence->getReference() . '"' : ''; ?>>
                                </div>

                                <div class="form-group">
                                    <label for="code">Compentence Code</label>
                                    <input name="code" type="text" class="form-control" id="code" placeholder="Enter Compentence" >
                                </div>

                                <div class="form-group">
                                    <label for="nom">Compentence Nom</label>
                                    <input name="nom" type="text" class="form-control" id="nom" placeholder="Entre nom" >
                                </div>

                                <!-- Description -->
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea name="description" id="description"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" name="" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </section>
</div>

@endsection
