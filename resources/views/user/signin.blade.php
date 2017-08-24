@extends('layouts.master')

@section('title')
  Sign-In -Oxedent Technology PVT. LTD
@endsection

@section('content')
   <div class="row">

    <h2><i class="material-icons" style="color:darkcyan; font-size:40px;">input</i>   LOGIN</h2>
   
    <form class="col s12" action="{{ route('user.signin')}}" masthod="POST">
      <div class="row">
        <!-- <div class="input-field col s12">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" class="validate" id="name" name="email">
          <label for="icon_prefix">First Name</label>
        </div> -->
        <!-- <div class="input-field col s12">
          <i class="material-icons prefix">phone</i>
          <input id="icon_telephone" type="tel" class="validate" id="phone" name="phone">
          <label for="icon_telephone">Telephone</label>
        </div> -->
        <div class="input-field col s12">
          <i class="material-icons prefix">email</i>
          <input id="icon_telephone" type="tel" class="validate" id="email" name="email">
          <label for="icon_telephone">Email</label>
        </div>
        <div class="input-field col s12">
          <i class="material-icons prefix">lock_outline</i>
          <input id="icon_telephone" type="tel" class="validate" id="password" name="password">
          <label for="icon_telephone">Password</label>
        </div>
      </div>
      <button class="btn waves-effect waves-light" type="submit" name="action">Submit
    <i class="material-icons right">send</i>
  </button>
  {{ csrf_field() }}
    </form>
  </div>
@endsection

@section('scripts')
<script type="text/javascript">
  $(document).ready(function() {
    Materialize.updateTextFields();
  });
</script>
 @endsection