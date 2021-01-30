@extends('layout/main')

@section('title', 'Add Trash')
@section('header', 'Add Trash')

@section('mainContent')
<section class="add-trash">
   <div class="container">

      <form method="post" action="{{ url('/trashes') }}">
         @csrf
         <div class="form-group">
            <label for="category_id">Select Category</label>
            <select class="form-control form-control-lg" id="category_id" name="category_id">
               @foreach($categories as $category)
               <option value="{{ $category->id }}">{{ $category->name }}</option>
               @endforeach
            </select>
         </div>
         <div class="form-group">
            <label for="trashName">Trash Name</label>
            <input type="text" class="form-control form-control-lg @error('trashName') is-invalid @enderror" id="trashName" name="trashName" placeholder="Trash Name">
            @error('trashName')
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