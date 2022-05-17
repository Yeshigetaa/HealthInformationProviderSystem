@extends('layouts.app')
@section('content')
<div class="container pb-2">
 <a class="btn btnsuccess" href="{{ route('Disease/register') }}" role="button"> {{ __('New Disease') }}
</a>
</div>
<div class="container">
 <div class="row justify-content-center">
 <div class="col-md-8">
 <div class="card">
 <div class="card-header">
 {{ __('Diseases List') }}
 </div>
 <div class="card-body">
 <table class="table table-striped table-bordered ">
 <thead class="thead-inverse">
 <tr>
 <th>
 id
 </th>
<th>
name
 </th>
<th>
description
 </th>
 <th>
cause
 </th>
 <th>
symptom
 </th>
 <th>
treatment
 </th>
 <th>
transmition
 </th>
 <th></th>
 </tr>
 </thead>
 <tbody>
 @foreach($Disease as $Disease)
 <tr>
 <td> {{ $Disease->id }}</td>
 <td> {{ $Disease->name }}</td>
 <td> {{ $Disease->description }}</td>
 <td> {{ $Disease->cause }}</td>
 <td> {{ $Disease->symptom}}</td>
 <td> {{ $Disease->treatment }}</td>
 <td> {{ $Disease->transmition}}</td>
 <td>
 <a class="btn btn-xs btninfo" title="Detail" href="/Disease/search/{{ $Disease->id }}">Details</a>
 <a class="btn btn-xs btnsuccess" title="Edit" href="/Disease/edit/{{$Disease->id }}">Edit</a>
 <a class="btn btn-xs btndanger" title="Delete" href="/Disease/delete/{{ $Disease->id }}">Delete</a>
 </td>
 </tr>
@endforeach
 </tbody>
 </table>
 </div>
 </div>
 </div>
 </div>
</div>
@endsection