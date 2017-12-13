@extends('layouts.app')

@section('content')

@if (session('status'))
<div class="notification is-sucess">
  {{session('status')}}
</div>
@endif

<div class="columns">
  <div class="column is-one-third is-offset-one-third">
    <div class="card">


        <div class="card-content">
            <h1 class="title"> Fortog Password</h1>
            <form action="{{route('password.email')}}" method="POST" role="form">
              {{csrf_field()}}
            <div class="field">
                <label for="email" class="label"> Email Address</label>
                <p class="control">
                  <input class="input {{$errors->has('email') ? 'is-danger' : ''}}" type="text" name="email" id="email" placeholder="name@example.com" value={{old('email')}}>
                </p>
                @if ($errors->has('email'))

                                      <p class ="help is-danger"> {{$errors->first('email')}}</p>
                                      @endif
                  </div>


                      <button class="button is-primary is-outlined is-fullwidth m-t-30">Send resend link</button>

                    </form>
        </div> <!-- end of .card-content -->
    </div>
        <h5 class="has-text-centered m-t-20"><a href="{{route('login')}}" class="is-muted">Back to login </a></h5>

  </div>
</div>

@endsection
