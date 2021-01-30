@extends('layout/main')

@section('title', 'W4C Web Engineer Challange')
@section('header', 'Trash Data')

@section('mainContent')
<section class="trash-data">
   <div class="container">

      @if (session('status'))
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
         {{ session('status') }}
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
         </button>
      </div>
      @endif

      @if (count($trashes) === 0)
      <h4 class="text-center mt-5">You don't have any trash. Add them!</h4>
      @endif

      @foreach($trashes as $trash)
      <div class="card shadow-sm">
         <div class="card-body">
            <h5 class="card-title">{{ $trash->name }}</h5>
            <div class="more-info d-flex">
               <p class="">{{ $trash->category_name }}</p>
               <form action="{{ url('trashes/' . $trash->id) }}" method="post" class="ml-auto">
                  @method('delete')
                  @csrf
                  <button type="submit" class="delete-button">Delete</button>
               </form>
            </div>
         </div>
      </div>
      @endforeach
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