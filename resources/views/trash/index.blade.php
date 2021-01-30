@extends('layout/main')

@section('title', 'Manage Trash')
@section('header', 'Trash Data')

@section('mainContent')
<section class="trash-data">
   <div class="container">
      <div class="card shadow-sm">
         <div class="card-body">
            <h5 class="card-title">Trash Name</h5>
            <p class="card-text">Category</p>
         </div>
      </div>
      <div class="card shadow-sm">
         <div class="card-body">
            <h5 class="card-title">Trash Name</h5>
            <p class="card-text">Category</p>
         </div>
      </div>
      <div class="card shadow-sm">
         <div class="card-body">
            <h5 class="card-title">Trash Name</h5>
            <p class="card-text">Category</p>
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
            <div class="modal-body add-menu">
               <a class="btn btn-primary btn-block menu-item mb-3" href="">
                  <h4>Add Trash</h4>
               </a>
               <a class="btn btn-primary btn-block menu-item" href="">
                  <h4>Add Category</h4>
               </a>
            </div>

         </div>
      </div>
   </div>
</section>
@endsection