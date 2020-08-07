@extends('layouts.master')
@section('title')
<br></br>
<h1> Bienvenue dans notre blog ! </h1>
<br></br>
@endsection
@section('content')
<h3> Liste des articles</h3>
<hr>
<div class="container-fluid">
  <div class="row">
      @foreach ($articles as $article)
      <div class="col-md-4">
        <div class="card mb-3" style="max-width: 18rem;">
          <div class="card-header bg-dark text-white">   
            {{$article->title}}
          </div>
         <div class="card-body">
              <div class="card-title">
                <h4> {{$article->title}} </h4>
              </div>
              <div class="card-text">
                 {{$article->body}} 
              </div>
             <hr>
             <a href="#" class="btn btn-primary"> Plus </a>
          </div>
        </div>
      </div>
      @endforeach

  </div>
  <div class="text-center">
  {!! $articles->links() !!}
  </div>
</div>
    

@endsection