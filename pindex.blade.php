@extends('layout')
@section('content')
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">
                        <h2>Project Crud</h2>
                    </div>
                    <br/>
                        <div class="table-responsive">
                            <table class="table">

                                 <script src="{{ asset('js/emp.js') }}" defer></script> 
                                <thead>
                                    <tr>
                                        <th>Sr.No</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Technology</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($project as $item)
                                    <tr>
                                           {{--
                                             The current loop iteration (starts at 1).
                                           When looping, a $loop variable will be available inside of your loop. 
                                           This variable provides access to some useful bits of information such as the current
                                            loop index and whether this is the first or last iteration through the loop:
                                             --}}
                                        <td>{{ $loop->iteration }}</td> 
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td>{{ $item->technology }}</td>
                                        <td>{{ $item->start_date }}</td>
                                        <td>{{ $item->end_date }}</td>
                                        <td>
                                            <a href="{{ url('/project/' . $item->id) }}" title="View Project"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/project/' . $item->id . '/edit') }}" title="Edit Project"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/project' . '/' . $item->id) }}"  class="d-inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                               
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Project" onclick="return confirm('Are you sure want to Delete?')"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="card-body text-center">
                                <a href="{{ url('/project/create') }}" class="btn btn-success btn-sm" title="Add New Project">
                                    <i class="fa fa-plus" aria-hidden="true"></i> Add New
                                </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection