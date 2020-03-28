@extends('layouts.auth')

    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Users Listing</div>

                    <div class="card-body">
                       <table class="table table-hover">

                        <thead>
                    
                          <th>Name</th>
                    
                          <th>Email</th>
                    
                        </thead>
                    
                        <tbody>
                    @foreach($usersData as $user)
                    
                            <tr>
                    
                              <td>{{$user->name}} </td>
                    
                              <td>{{$user->email}} </td>
                    
                    
                            </tr>
                    @endforeach
                    
                        </tbody>
                    
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection