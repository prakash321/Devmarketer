@extend(layouts.manage);


@section('content');
<div class="flex-container">
  <div class="column m-t-10">
<h1 class="title"> Create new User</h1>
</div>

<div class="column">
  <a href="{{route('user.create')}}" class="button is-primary is-pulled-right"<i class="fa fa-user-add">add</a>
</div>
  </div>







@endsection
