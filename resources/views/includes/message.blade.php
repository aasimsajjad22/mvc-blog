<div class="row expanded">
    <div class="column medium-11">
        @if(count($errors) || \App\Classes\Session::has('error'))
            <div class="callout alert" data-closable>
                <div class="alert alert-danger">
                @if(\App\Classes\Session::has('error'))
                    {{ \App\Classes\Session::flash('error') }}
                @else

                        @foreach($errors as $error_array)
                            @foreach($error_array as $error_item)
                                {{ $error_item }} <br>
                            @endforeach
                        @endforeach

                @endif
                </div>
            </div>
        @endif

        @if(isset($success) || \App\Classes\Session::has('success'))
            <div class="callout success" data-closable>
                @if(isset($success))
                    <div class="alert alert-success">{{ $success }} </div>
                @elseif(\App\Classes\Session::has('success'))
                    <div class="alert alert-success">{{ \App\Classes\Session::flash('success') }} </div>
                @endif
                <button class="close-button" arial-label="Dismiss Message" type="button" data-close>
                    <span arial-hidden="true">&times;</span>
                </button>
            </div>
        @endif
    </div>
</div>