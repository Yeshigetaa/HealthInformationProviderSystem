@extends('layouts.app')
@section('content')
<div class="container">
 <div class="row justify-content-center">
 <div class="col-md-8">
 <div class="card">
 <div class="card-header">
 {{ __('Disease Detail') }}
 </div>
 <div class="card-body">
 id : {{ $Disease->id }}
 <br>
 Diseases : {{ $Disease->name }}
 <br>
 description : {{ $Disease->description }}
 <br>
 cause : {{ $Disease->cause }}
 <br>
 symptom : {{ $Disease->symptom }}
 <br>
 <br>
treatment : {{ $Disease->treatment }}
 <br>
 transmition : {{ $Disease->transmition }}
 <br>
 </div>
 </div>
 </div>
 </div>
</div>
<div class="container ">
 <div class="col-md-8">
 <a class="btn btnsuccess" href="{{ route('Disease/list') }}" role="button"> {{ __('Back') }}</a>
 </div>
</div>
@endsection