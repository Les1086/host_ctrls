@extends('layouts.app')

@section('content')
<!-- <link href="{{ asset('css/background.css') }}" rel="stylesheet"> -->
<link href="/main.css" rel="stylesheet">
<div class="container bgcolor">
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
                    
                    <example-component/>   
                      <!--redirecciones despues del login-->
                       @section('content')
                  <!--      todos puden verlo -->
                        <h4>holaaa</h4>
                        <p>publico</p>
                       <!--  only teacher can see -->
                         @role('teacher')
                        <p>hola teacher</p>
                         @include('admin.index')
                        @endrole
                        <!--  only student can see -->
                        @role('student')
                         
                        <p>hola student</p>
                        @include('users.users')
                        @endrole
                        @endsection 
 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

