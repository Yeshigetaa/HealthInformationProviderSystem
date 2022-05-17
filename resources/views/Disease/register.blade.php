@extends('layouts.app')
@section('content')
<div class="container">
 <div class="row justify-content-center">
 <div class="col-md-8">
 <div class="card">
 <div class="card-header">{{ __('Diseases Registration  Form page') }}</div>
 <div class="card-body">
 <form method="POST" action="{{ route('Disease/register') }}"
>
 @csrf
 <div class="form-group row">
 <label for="name" class="col-md-4 col-formlabel text-md-right">{{ __('name') }}</label>
 <div class="col-md-6">
 <input id="name" type="text" class="formcontrol @error('name') isinvalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="
name" autofocus>
 @error('name')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>

 <div class="form-group row">
 <label for="description" class="col-md-4 col-formlabel text-md-right">{{ __('description') }}</label>
 <div class="col-md-6">
 <input id="description" type="text" class="formcontrol @error('description') isinvalid @enderror" name="description" value="{{ old('description') }}" required autocomplete
="description">
 @error('description')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="cause" class="col-md-4 col-formlabel text-md-right">{{ __('cause') }}</label>
 <div class="col-md-6">
 <input id="cause" type="text" class="formcontrol @error('cause') isinvalid @enderror" name="cause" value="{{ old('cause') }}" required autocomplete
="cause">
 @error('cause')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="symptom" class="col-md-4 col-formlabel text-md-right">{{ __('symptom') }}</label>
 <div class="col-md-6">
 <input id="symptom" type="text" class="formcontrol @error('symptom') isinvalid @enderror" name="symptom" value="{{ old('symptom') }}" required autocomplete
="symptom">
 @error('symptom')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="treatment" class="col-md-4 col-formlabel text-md-right">{{ __('treatment') }}</label>
 <div class="col-md-6">
 <input id="treatment" type="text" class="formcontrol @error('treatment') isinvalid @enderror" name="treatment" value="{{ old('treatment') }}" required autocomplete
="cause">
 @error('treatmente')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="transmition" class="col-md-4 col-formlabel text-md-right">{{ __('transmition') }}</label>
 <div class="col-md-6">
 <input id="treatment" type="text" class="formcontrol @error('treatment') isinvalid @enderror" name="transmition" value="{{ old('transmition') }}" required autocomplete
="transmition">
 @error('transmitione')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row mb-0">
 <div class="col-md-6 offset-md-4">
 <button type="submit" class="btn btn-primary">
 {{ __('Register') }}
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