@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Synonyms Result</div>

                <div class="card-body">
                    {!! $synonymsResult !!}
                    <br></br>
                    <a href="{{ URL::previous() }}" class="btn btn-primary">Input Another</a>
                </div>
                
                
            </div>
        </div>
    </div>
</div>
@endsection
