@extends('layout/main')

@section('title', 'Add Category')
@section('header', 'Add Category')

@section('mainContent')
<section class="add-trash">
   <div class="container">

      <form method="post" action="{{ url('/categories') }}">
         @csrf
         <div class="form-group">
            <label for="name">Category Name</label>
            <input type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" id="name" name="name">
            @error('name')
            <div id="" class="invalid-feedback">
               {{ $message }}
            </div>
            @enderror
         </div>

         <button type="submit" class="btn btn-primary btn-block btn-lg mt-4">Save</button>
      </form>
   </div>
</section>
@endsection