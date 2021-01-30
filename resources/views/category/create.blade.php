@extends('layout/main')

@section('title', 'Add Trash')
@section('header', 'Add Trash')

@section('mainContent')
<section class="add-trash">
   <div class="container">

      <div class="form-group">
         <label for="cateogory">Category</label>
         <input type="text" class="form-control form-control-lg" id="cateogory" name="cateogory" placeholder="Category">
      </div>

      <button type="submit" class="btn btn-primary btn-block btn-lg mt-4">Save</button>

   </div>
</section>
@endsection