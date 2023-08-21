@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('You are logged in!') }}

                    <form method="POST" action="{{ route('thesaurus.synonyms') }}">
                        @csrf

                        <div class="form-group">
                            <label for="word">Enter a word: Eg. big, buy, happy, smart, sad, fast, beautiful, kind.</label>
                            <input type="text" name="word" id="word" class="form-control" required>
                        </div>
<br>
                        <button type="submit" class="btn btn-primary">Get Synonyms</button>
                    </form>

                    @if(isset($synonymsResult))
                        <br>
                        <div class="card">
                            <div class="card-header">Synonyms Result</div>
                            <div class="card-body">
                                {!! $synonymsResult !!}
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
