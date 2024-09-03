@extends('backend.dashboard')
@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Gejala</h4>
<button href="./create.blade.php" type="button" class="btn rounded-pill btn-primary mb-3">Tambahkan</button>\
<!-- Basic Bootstrap Table -->
<div class="card">
  <h5 class="card-header">Table Basic</h5>
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Description</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        @foreach($symtomps as $symtomps)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $symtomps->nama }}</td>
          <td>{{ $symtomps->description }}</td>
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                <i class="bx bx-dots-vertical-rounded"></i>
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('symtomps.edit', $symtomps->id) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                <a class="dropdown-item" href="{{ route('symtomps.destroy', $symtomps->id) }}"><i class="bx bx-trash me-1"></i> Delete</a>
              </div>
            </div>
          </td>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>

  </div>
  @stop