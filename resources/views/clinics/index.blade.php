@extends('clinics.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>My clinics</h2>
            </div>
            <div class="pull-right">
                @guest
                Please browse the clinics
                @else
                <a class="btn btn-success" href="{{ route('clinics.create') }}"> Add New Clinic</a>
                @endguest
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Clinic Name</th>
            <th>Clinic Details</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($clinics as $clinic)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $clinic->clinic_name }}</td>
            <td>{{ $clinic->clinic_details }}</td>
            <td>
                <form action="{{ route('clinics.destroy',$clinic->clinic_id) }}" method="POST">
                    
                    @guest
                    <a class="btn btn-info" href="{{ route('clinics.show',$clinic->clinic_id) }}">Show</a>
                    @else
                    <a class="btn btn-info" href="{{ route('clinics.show',$clinic->clinic_id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('clinics.edit',$clinic->clinic_id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                    @endguest
                </form>
            </td>
        </tr>
        @endforeach
    </table>


    {!! $clinics->links() !!}
      
@endsection