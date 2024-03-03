@extends('layouts.dashboard.app')
@section('dashboardcontent')



<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title text-center mb-6 my-4">Info Table</h4>

            </p>    
            
            <div class="table-responsive">
                <table class="table mb-0">

                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Date</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($infos as $info)
                        <tr>
                            <th scope="row">1</th>
                            <td>{{ $info->email }}</td>
                            <td>{{ $info->address }}</td>
                            <td>{{ $info->phone }}</td>
                            <td>{{ $info->created_at }}</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                        @endforeach
                
                    </tbody>
                    <!-- end tbody -->
                </table><!-- end table -->

            </div>
        </div>
    </div>
    {{ ($infos->links()) }}





@endsection