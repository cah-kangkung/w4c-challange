@extends('layout/main')

@section('title', 'W4C Web Engineer Challange')
@section('header', 'Trash Data')

@section('mainContent')
<section class="trash-data">
   <div class="container">
      <div class="card shadow-sm">
         <div class="card-body">
            <h5 class="card-title">Trash Name</h5>
            <div class="more-info d-flex">
               <p class="card-text mb-0">Category</p>
               <a href="" class="ml-auto delete-button">Delete</a>
            </div>
         </div>
      </div>
      <div class="card shadow-sm">
         <div class="card-body">
            <h5 class="card-title">Trash Name</h5>
            <div class="more-info d-flex">
               <p class="card-text mb-0">Category</p>
               <a href="" class="ml-auto delete-button">Delete</a>
            </div>
         </div>
      </div>
      <div class="card shadow-sm">
         <div class="card-body">
            <h5 class="card-title">Trash Name</h5>
            <div class="more-info d-flex">
               <p class="card-text mb-0">Category</p>
               <a href="" class="ml-auto delete-button">Delete</a>
            </div>
         </div>
      </div>
   </div>

   <!-- Button trigger modal -->
   <a class="add-button" data-toggle="modal" data-target="#addModal">
      <div class="plus-sign"></div>
      <div class="plus-sign"></div>
   </a>

   <!-- Modal -->
   <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-sm">
         <div class="modal-content">
            <div class="modal-body">
               <a class="btn btn-primary btn-block mb-3" href="{{ url('/trashes/create')}}">
                  <h4>Add Trash</h4>
               </a>
               <a class="btn btn-primary btn-block" href="{{ url('/categories')}}">
                  <h4>Manage Category</h4>
               </a>
            </div>

         </div>
      </div>
   </div>
</section>
@endsection