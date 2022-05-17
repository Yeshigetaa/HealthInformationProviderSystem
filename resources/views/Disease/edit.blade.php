@extends('layouts.app')
@section('content')
<div class="container">
 <div class="row justify-content-center">
 <div class="col-md-8">
 <div class="card">
 <div class="card-header">{{ ('DISEASE EDIT') }}</div>
 <div class="card-body">
 <form method="POST" action="{{ route('Disease/update') }}">
 @csrf
<input type="hidden" value="{{ $Disease->id }}" name ='id'>
 <div class="form-group row">
 <label for="name" class="col-md-4 col-form-label text-md-right">{{ ('Disease') }}</label>
 <div class="col-md-6">
 <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $Disease->name}}" required autocomplete="name" autofocus>
 @error('name')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="description" class="col-md-4 col-form-label text-md-right">{{ ('description') }}</label>
 <div class="col-md-6">
 <input id="description" type="text" class="form-control @error('cause') is-invalid @enderror" name="description" value="{{ $Disease->description }}" autocomplete="description">
 @error('description')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="cause" class="col-md-4 col-form-label text-md-right">{{ ('cause') }}</label>
 <div class="col-md-6">
 <input id="cause" type="text" class="form-control @error('cause') is-invalid @enderror" name="cause" value="{{ $Disease->cause }}" autocomplete="cause">
 @error('cause')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="symptom" class="col-md-4 col-form-label text-md-right">{{ ('symptom') }}</label>
 <div class="col-md-6">
 <input id="symptom" type="text" class="form-control @error('symptom') is-invalid @enderror" name="symptom" value="{{ $Disease->symptom }}" autocomplete="symptom">
 @error('symptom')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="treatment" class="col-md-4 col-form-label text-md-right">{{ ('treatment') }}</label>
 <div class="col-md-6">
 <input id="treatment" type="text" class="form-control @error('treatment') is-invalid @enderror" name="treatment" value="{{ $Disease->treatment }}" autocomplete="treatment">
 @error('treatment')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="transmition" class="col-md-4 col-form-label text-md-right">{{ ('transmition') }}</label>
 <div class="col-md-6">
 <input id="transmition" type="text" class="form-control @error('transmition') is-invalid @enderror" name="transmition" value="{{ $Disease->transmition }}" autocomplete="transmition">
 @error('transmition')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row mb-0">
 <div class="col-md-6 offset-md-4">
 <button type="submit" class="btn btn-primary">
     {{ ('Update') }}
    </button>
 </div>
 </div>
 </form>
 </div>
 </div>
 </div>
 </div>
</div>
@endsection