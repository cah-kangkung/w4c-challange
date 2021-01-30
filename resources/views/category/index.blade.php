@extends('layout/main')

@section('title', 'Category')
@section('header', 'Category Data')

@section('mainContent')
<section class="trash-data">
   <div class="container">
      <a href="{{ url('/category/create')}}" class="btn btn-primary btn-block btn-lg mb-3">Add Category</a>
      <div class="card shadow-sm">
         <div class="card-body">
            <div class="more-info d-flex">
               <h5 class="card-title">Category</h5>
               <a href="" class="ml-auto delete-button">Delete</a>
            </div>
         </div>
      </div>
      <div class="card shadow-sm">
         <div class="card-body">
            <div class="more-info d-flex">
               <h5 class="card-title">Category</h5>
               <a href="" class="ml-auto delete-button">Delete</a>
            </div>
         </div>
      </div>
      <div class="card shadow-sm">
         <div class="card-body">
            <div class="more-info d-flex">
               <h5 class="card-title">Category</h5>
               <a href="" class="ml-auto delete-button">Delete</a>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection