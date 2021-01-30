@extends('layout/main')

@section('title', 'Category')
@section('header', 'Category Data')

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

      <a href="{{ url('/categories/create')}}" class="btn btn-primary btn-block btn-lg mb-3">Add Category</a>
      @foreach ($categories as $category)
      <div class="card shadow-sm">
         <div class="card-body d-flex">
            <h5 class="card-title">{{ $category->name }}</h5>
            <form action="{{ url('categories/' . $category->id) }}" method="post" class="ml-auto">
               @method('delete')
               @csrf
               <button type="submit" class="delete-button">Delete</button>
            </form>
         </div>
      </div>
      @endforeach

   </div>
</section>
@endsection