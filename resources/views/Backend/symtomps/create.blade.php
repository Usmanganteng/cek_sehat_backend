@extends('backend.dashboard')
@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms /</span>Gejala</h4>

<div class="row">
    <div class="col-md-12">
        <div class="card mb-4">
            <h5 class="card-header">Gejala</h5>
            <div class="card-body">
            <form method="POST" action="{{ route('symtomps.store') }}">
                    @csrf
                <div class="form-floating">
                    <input
                        type="text"
                        class="form-control"
                        id="nama"
                        name="nama"
                        placeholder="Gejala"
                        aria-describedby="floatingInputHelp" />
                    <label for="nama">Nama Gejala</label>
                    <div id="floatingInputHelp" class="form-text">
                        Pastikan Kalo Form Terisi Dengan Benar
                    </div>
                </div>
            </div>
            <h5 class="card-header">Description</h5>
            <div class="card-body">
                <div class="form-floating">
                    <input
                        type="text"
                        class="form-control"
                        id="description"
                        name="description"
                        placeholder="Description Gejala"
                        aria-describedby="floatingInputHelp" />
                    <label for="description">Description Gejala</label>
                    <div id="floatingInputHelp" class="form-text">
                        Pastikan Kalo Form Terisi Dengan Benar
                    </div>
                </div>
            </div>
            <div class="demo-inline-spacing ms-auto mb-4 me-4">
                    <button type="button" class="btn rounded-pill btn-primary" onclick="window.history.back()">Kembali</button>
                    <button href="" type="submit    " class="btn rounded-pill btn-primary">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>
@stop