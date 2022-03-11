@extends('layout')
@section('content')
<div class="container">
<div class="card row mt-5">
  <h5 class="card-header text-center">Project Details</h5>
  <div class="card-body text-center">
   
 
        <div class="card-body">
        <h5 class="card-title">Project Name : {{ $project->name }}</h5>
        <p class="card-email">Description: {{ $project->description }}</p>
        <p class="card-text">Technology : {{ $project->technology }}</p>
        <p class="card-text">Start Date : {{ $project->start_date }}</p>
        <p class="card-text">End Date : {{ $project->end_date }}</p>

        <a class="btn btn-secondary" href="{{ route('project.index') }}">Back </a></br>
  </div>
       
    </hr>
  
  </div>
</div>