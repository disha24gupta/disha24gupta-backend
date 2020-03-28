 @extends('layouts.auth')

    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                         @if (Auth::user()->user_type == "1")
                          Hi, Tutor
                         @else
                           Hi, Student
                         @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection