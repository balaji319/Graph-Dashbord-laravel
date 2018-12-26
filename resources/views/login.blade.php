@extends('theme.login')

@section('title', 'CALL-Q LOGIN')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">CALL-Q LOGIN
                    </h3>
                </div>
                <div class="panel-body">
                    @section('content')
                    @if(session()->has('message'))
                    <div class="alert alert-success col-sm-12 col-md-offset-5">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        {{ session()->get('message') }}
                    </div>
                    @endif
                    @if ($errors->any() && (!$errors->has('email')) && (!$errors->has('password')))
                    <div class="alert alert-danger">
                        <ul>
                            <a href="#" class="close" data-dismiss="alert">&times;</a>    
                            @foreach ($errors->all() as $error)
                            <li ><p>{{$error }}</p></li>
                            @endforeach
                        </ul>
                    </div>
                    @endif  
                    {{ Form::open(array('url' => url('/login'), 'class'=>'pt-3 register-form', 'id'=>'form_register','autocomplete'=>'off')) }}

                    <div class="form-group">
                        <label for="exampleInputEmail">Company ID</label>
                        {{ Form::text('CompanyId',Input::old('CompanyId'),array('id'=>'CompanyId','class'=>'form-control','placeholder'=>'Company ID')) }}

                        @if ($errors->has('email'))
                        <span class="error1 err">{{ $errors->first('CompanyID') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword">Password</label>

                        {{ Form::password('Password',array('id'=>'Password','class'=>'form-control ','placeholder'=>'Password')) }}
                        @if ($errors->has('password'))
                        <span class="error2 err">{{ $errors->first('Password') }}</span>
                        @endif          
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword">Personal Code</label>
                        {{ Form::password('PersonalCode',array('id'=>'PersonalCode','class'=>'form-control ','placeholder'=>'PersonalCode')) }}
                        @if ($errors->has('password'))
                        <span class="error2 err">{{ $errors->first('PersonalCode') }}</span>
                        @endif          
                    </div>

                    <div class="my-3">
                        {{ Form::button('LOGIN', ['type' => 'submit', 'class' => 'btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn'] )  }}
                    </div>
                    {{ Form::close() }}
                </div>
                
            </div>
            
        </div>
        
    </div>
</div>


@endsection
@section('After_Script')
  <script src="{{ asset('js/validation/login-validation.js') }}"></script>
@stop