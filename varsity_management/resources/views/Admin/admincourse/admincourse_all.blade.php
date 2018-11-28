@extends('Admin.AdminCourse')
@section('semester_title')
@if($semester_title == 1)
        {{$semester_title.'st'}}
        @elseif($semester_title==2)
        {{$semester_title.'nd'}}
        @elseif($semester_title == 3)
        {{$semester_title.'rd'}}
        @else
        {{$semester_title.th}}
        @endif
@endsection


@section('section_data')
@foreach($section as $d)

<li><a href="/admincourse?semester={{$d}}">
        @if($d == 1)
        {{$d.'st'}}
        @elseif($d==2)
        {{$d.'nd'}}
        @elseif($d == 3)
        {{$d.'rd'}}
        @else
        {{$d.th}}
        @endif
    </a></li>
@endforeach
@endsection
@section('admincourse_data')
<style>
    thead tr:nth-child(1) th {
  background: white;
  position: sticky;
  top: 0;
  z-index: 10;
}

</style>
<div class="table-responsive" style="overflow-y:auto ; height: 73%;">


    <table id="mytable" class="table table-bordred table-striped">

        <thead>

            <th><input type="checkbox" id="checkall" /></th>
            <th>Course List</th>

            <th>Edit</th>
            <th>Delete</th>
        </thead>
        <tbody>

            @foreach($data as $d)

            <tr>
                <td><input type="checkbox" class="checkthis" /></td>
                <td>{{$d}}</td>
                <td>
                    <p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit"><span class="glyphicon glyphicon-pencil"></span></button></p>
                </td>
                <td>
                    <p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete"><span class="glyphicon glyphicon-trash"></span></button></p>
                </td>

            </tr>
            @endforeach
            <!--  <tr>
                <td><input type="checkbox" class="checkthis" /></td>

                <td>Software Development</td>
                
               <td>
                    <p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit"><span class="glyphicon glyphicon-pencil"></span></button></p>
                </td>
                <td>
                    <p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete"><span class="glyphicon glyphicon-trash"></span></button></p>
                </td> 
            </tr> -->
        </tbody>

    </table>
</div>

<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
            </div>
            <div class="modal-body">

                <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>

            </div>
            <div class="modal-footer ">
                <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    @endsection
