@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Thesaurus Form') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('thesaurus.synonyms') }}">
                        @csrf

                        <div class="form-group">
                            <label for="word">Enter a word:</label>
                            <input type="text" name="word" id="word" class="form-control" required>
                        </div>

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
