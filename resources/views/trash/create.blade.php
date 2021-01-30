@extends('layout/main')

@section('title', 'Add Trash')
@section('header', 'Add Trash')

@section('mainContent')
<section class="add-trash">
   <div class="container">

      <div class="form-group">
         <label for="category">Select Category</label>
         <select class="form-control form-control-lg" id="category" name="category">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
         </select>
      </div>
      <div class="form-group">
         <label for="trashName">Trash Name</label>
         <input type="text" class="form-control form-control-lg" id="trashName" name="trashName" placeholder="Trash Name">
      </div>

      <button type="submit" class="btn btn-primary btn-block btn-lg mt-4">Save</button>

   </div>
</section>
@endsection