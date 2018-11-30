@extends('Admin.AdminCourse')
@section('semester_title')
@if($semester_title == 1)
{{$semester_title.'st'}}
@elseif($semester_title==2)
{{$semester_title.'nd'}}
@elseif($semester_title == 3)
{{$semester_title.'rd'}}
@else
{{$semester_title.'th'}}
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
        {{$d.'th'}}
        @endif
    </a></li>
@endforeach
@endsection

@section('success')
@if($insert_success = Session::get('insert_success'))
<div class="alert alert-success">
    <strong>Success!</strong>&nbsp; Subject successfully inserted.
</div>

@endif
@if($delete_success = Session::get('delete_success'))
<div class="alert alert-success">
    <strong>Success!</strong>&nbsp; Subject successfully deleted.
</div>

@endif

@if($update_success = Session::get('update_success'))
<div class="alert alert-success">
    <strong>Success!</strong>&nbsp; Subject updated successfully.
</div>
@endif
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
            <th>Course Code</th>
            <th>Edit</th>
            <th>Delete</th>
        </thead>
        <tbody>
            @foreach($data as $d)

            <tr>
                <td><input type="checkbox" class="checkthis" /></td>
                <td>{{$d->subject_name}}</td>
                <td>{{$d->subject_code}}</td>
                <td>
                    <p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit{{$d->subject_id}}"><span class="glyphicon glyphicon-pencil"></span></button></p>
                </td>
                <td>
                    <p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#{{$d->subject_id}}"><span class="glyphicon glyphicon-trash"></span></button></p>
                </td>
                <form action="/delete_admin_course_data?id={{$d->subject_id}}" method="post">
                    {{csrf_field()}}
                    <div class="modal fade" id="{{$d->subject_id}}" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                                    <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
                                </div>
                                <div class="modal-body">

                                    <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete {{$d->subject_name}}</div>

                                </div>
                                <div class="modal-footer ">
                                    <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok-sign" ></span> Yes</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                    </div>
                </form>
                <form action="/admin_update_course?id={{$d->subject_id}}" method="post">
                    {{csrf_field()}}
                    <div class="modal fade" id="edit{{$d->subject_id}}" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                                    <h4 class="modal-title custom_align" id="Heading">{{$d->subject_name}}</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <input class="form-control " type="text" value="{{$d->subject_name}}" name="subject_name">
                                    </div>
                                    <div class="form-group">

                                        <input class="form-control " type="text" value="{{$d->subject_code}}" name="subject_code">
                                    </div>
                                    <!--   Future e laagte pare
                        <div class="form-group">
                        <textarea rows="2" class="form-control" placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan"></textarea>


                    </div> -->
                                </div>
                                <div class="modal-footer ">
                                    <button type="submit" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span>Save</button>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                </form>
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

@endsection
