@extends('Admin.AdminSession')
@section('ongoing_session')
    @foreach($ongoing as $d)
        @if($d->month == 0)
            {{'Janaury'.' '.$d->year}}
            @else
            {{'June'.' '.$d->year}}
        @endif
    @endforeach
@endsection
@section('total_student')
    {{$total}}
@endsection
@section('adminsession_data')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
    var min = new Date().getFullYear(),
        max = min + 9,
        select = document.getElementById('selectElementId');

    for (var i = min; i <= max; i++) {
        var opt = document.createElement('option');
        opt.value = i;
        opt.innerHTML = i;
        select.appendChild(opt);
    }

</script>
<style>
    select {
        width: 200px;
        text-align: center;
        height: 30px;
        background: white;
        
    }
    .check
    {
        margin-left: 
    }
    thead tr:nth-child(1) th {
  background: white;
  position: sticky;
  top: -20;
  z-index: 10;
}
</style>
@if($success = Session::get('successfulsectioninsertion'))
<div class="alert alert-success">
    <strong>Success!</strong>&nbsp; Section successfully added.
</div>
@endif
<form action="/temp_insert" method="post">
    {{csrf_field()}}
    <h1>Add Session</h1>
    <div style="margin-left: 5%; height: 200px;">
        <span>Month: </span><span> <select id='gMonth2' class="drop" name="month">
                <option value='0'>--Select Month--</option>
                <option value='1'>Janaury</option>
                <option value='2'>June</option>

            </select> </span><span class="year">Year: </span><span><select id="selectElementId" class="drop" name="year"></select></span>
        <span><button class="btn btn-primary" data-toggle="modal" data-target="#add" type="button">Add section and advisor</button></span>
        <br />
        <span class="check" style="margin-left: 5%;margin-top: 5%;"><input type="checkbox" checked></span><span class="markas">Mark as active session</span>
    </div>

    <!-- Adding Modal for adding section and advisor-->
    <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                    <h4 class="modal-title custom_align" id="Heading">Set section and advisor</h4>
                </div>
                <div class="modal-body" style="max-height: 75%; overflow-y: auto;">
                    <!-- Body of section and advisor set -->

                    <table class="table">
                        <thead>
                            <tr>
                                <th>Mark active</th>
                                <th>Section</th>
                                <th>Set advisor</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="checkbox" name="section[]" value="C1"></td>
                                <td>C1</td>
                                <td><select name="C1">
                                        @foreach($teacher as $d)
                                        <option value="{{$d->teacher_id}}">{{$d->name}} </option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="section[]" value="C1A"></td>
                                <td>C1A</td>
                                <td><select name="C1A">
                                        @foreach($teacher as $d)
                                        <option value="{{$d->teacher_id}}">{{$d->name}} </option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="section[]" value="C1B"></td>
                                <td>C1B</td>
                                <td><select name="C1B">
                                        @foreach($teacher as $d)
                                        <option value="{{$d->teacher_id}}">{{$d->name}} </option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="section[]" value="C1C"></td>
                                <td>C1C</td>
                                <td><select name="C1C">
                                        @foreach($teacher as $d)
                                        <option value="{{$d->teacher_id}}">{{$d->name}} </option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="section[]" value="C1D"></td>
                                <td>C1D</td>
                                <td><select name="C1D">
                                        @foreach($teacher as $d)
                                        <option value="{{$d->teacher_id}}">{{$d->name}} </option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="section[]" value="C2"></td>
                                <td>C2</td>
                                <td><select name="C2">
                                        @foreach($teacher as $d)
                                        <option value="{{$d->teacher_id}}">{{$d->name}} </option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="section[]" value="C2A"></td>
                                <td>C2A</td>
                                <td><select name="C2A">
                                        @foreach($teacher as $d)
                                        <option value="{{$d->teacher_id}}">{{$d->name}} </option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="section[]" value="C2B"></td>
                                <td>C2B</td>
                                <td><select name="C2B">
                                        @foreach($teacher as $d)
                                        <option value="{{$d->teacher_id}}">{{$d->name}} </option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="section[]" value="C2C"></td>
                                <td>C2C</td>
                                <td><select name="C2C">
                                        @foreach($teacher as $d)
                                        <option value="{{$d->teacher_id}}">{{$d->name}} </option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="section[]" value="C2D"></td>
                                <td>C2D</td>
                                <td><select name="C2D">
                                        @foreach($teacher as $d)
                                        <option value="{{$d->teacher_id}}">{{$d->name}} </option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="section[]" value="C3"></td>
                                <td>C3</td>
                                <td><select name="C3">
                                        @foreach($teacher as $d)
                                        <option value="{{$d->teacher_id}}">{{$d->name}} </option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="section[]" value="C3A"></td>
                                <td>C3A</td>
                                <td><select name="C3A">
                                        @foreach($teacher as $d)
                                        <option value="{{$d->teacher_id}}">{{$d->name}} </option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="section[]" value="C3B"></td>
                                <td>C3B</td>
                                <td><select name="C3B">
                                        @foreach($teacher as $d)
                                        <option value="{{$d->teacher_id}}">{{$d->name}} </option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="section[]" value="C1C"></td>
                                <td>C3C</td>
                                <td><select name="C3C">
                                        @foreach($teacher as $d)
                                        <option value="{{$d->teacher_id}}">{{$d->name}} </option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="section[]" value="C1D"></td>
                                <td>C3D</td>
                                <td><select name="C3D">
                                        @foreach($teacher as $d)
                                        <option value="{{$d->teacher_id}}">{{$d->name}} </option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="section[]" value="C4"></td>
                                <td>C4</td>
                                <td><select name="C4">
                                        @foreach($teacher as $d)
                                        <option value="{{$d->teacher_id}}">{{$d->name}} </option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="section[]" value="C4A"></td>
                                <td>C4A</td>
                                <td><select name="C4A">
                                        @foreach($teacher as $d)
                                        <option value="{{$d->teacher_id}}">{{$d->name}} </option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="section[]" value="C4B"></td>
                                <td>C4B</td>
                                <td><select name="C4B">
                                        @foreach($teacher as $d)
                                        <option value="{{$d->teacher_id}}">{{$d->name}} </option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="section[]" value="C1C"></td>
                                <td>C4C</td>
                                <td><select name="C4C">
                                        @foreach($teacher as $d)
                                        <option value="{{$d->teacher_id}}">{{$d->name}} </option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="section[]" value="C4D"></td>
                                <td>C4D</td>
                                <td><select name="C4D">
                                        @foreach($teacher as $d)
                                        <option value="{{$d->teacher_id}}">{{$d->name}} </option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="section[]" value="C5"></td>
                                <td>C5</td>
                                <td><select name="C5">
                                        @foreach($teacher as $d)
                                        <option value="{{$d->teacher_id}}">{{$d->name}} </option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="section[]" value="C5A"></td>
                                <td>C5A</td>
                                <td><select name="C5A">
                                        @foreach($teacher as $d)
                                        <option value="{{$d->teacher_id}}">{{$d->name}} </option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="section[]" value="C5B"></td>
                                <td>C5B</td>
                                <td><select name="C5B">
                                        @foreach($teacher as $d)
                                        <option value="{{$d->teacher_id}}">{{$d->name}} </option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="section[]" value="C5C"></td>
                                <td>C5C</td>
                                <td><select name="C5C">
                                        @foreach($teacher as $d)
                                        <option value="{{$d->teacher_id}}">{{$d->name}} </option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="section[]" value="C5D"></td>
                                <td>C5D</td>
                                <td><select name="C5D">
                                        @foreach($teacher as $d)
                                        <option value="{{$d->teacher_id}}">{{$d->name}} </option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="section[]" value="C6"></td>
                                <td>C6</td>
                                <td><select name="C6">
                                        @foreach($teacher as $d)
                                        <option value="{{$d->teacher_id}}">{{$d->name}} </option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="section[]" value="C6A"></td>
                                <td>C6A</td>
                                <td><select name="C6A">
                                        @foreach($teacher as $d)
                                        <option value="{{$d->teacher_id}}">{{$d->name}} </option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="section[]" value="C6B"></td>
                                <td>C6B</td>
                                <td><select name="C6B">
                                        @foreach($teacher as $d)
                                        <option value="{{$d->teacher_id}}">{{$d->name}} </option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="section[]" value="C6C"></td>
                                <td>C6C</td>
                                <td><select name="C6C">
                                        @foreach($teacher as $d)
                                        <option value="{{$d->teacher_id}}">{{$d->name}} </option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="section[]" value="C6D"></td>
                                <td>C6D</td>
                                <td><select name="C6D">
                                        @foreach($teacher as $d)
                                        <option value="{{$d->teacher_id}}">{{$d->name}} </option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="section[]" value="C7"></td>
                                <td>C7</td>
                                <td><select name="C7">
                                        @foreach($teacher as $d)
                                        <option value="{{$d->teacher_id}}">{{$d->name}} </option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="section[]" value="C7A"></td>
                                <td>C7A</td>
                                <td><select name="C7A">
                                        @foreach($teacher as $d)
                                        <option value="{{$d->teacher_id}}">{{$d->name}} </option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="section[]" value="C7B"></td>
                                <td>C7B</td>
                                <td><select name="C7B">
                                        @foreach($teacher as $d)
                                        <option value="{{$d->teacher_id}}">{{$d->name}} </option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="section[]" value="C7C"></td>
                                <td>C7C</td>
                                <td><select name="C7C">
                                        @foreach($teacher as $d)
                                        <option value="{{$d->teacher_id}}">{{$d->name}} </option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="section[]" value="C7D"></td>
                                <td>C7D</td>
                                <td><select name="C7D">
                                        @foreach($teacher as $d)
                                        <option value="{{$d->teacher_id}}">{{$d->name}} </option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="section[]" value="C8"></td>
                                <td>C8</td>
                                <td><select name="C8">
                                        @foreach($teacher as $d)
                                        <option value="{{$d->teacher_id}}">{{$d->name}} </option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="section[]" value="C8A"></td>
                                <td>C8A</td>
                                <td><select name="C8A">
                                        @foreach($teacher as $d)
                                        <option value="{{$d->teacher_id}}">{{$d->name}} </option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="section[]" value="C8B"></td>
                                <td>C8B</td>
                                <td><select name="C8B">
                                        @foreach($teacher as $d)
                                        <option value="{{$d->teacher_id}}">{{$d->name}} </option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="section[]" value="C8C"></td>
                                <td>C8C</td>
                                <td><select name="C8C">
                                        @foreach($teacher as $d)
                                        <option value="{{$d->teacher_id}}">{{$d->name}} </option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="section[]" value="C8D"></td>
                                <td>C8D</td>
                                <td><select name="C8D">
                                        @foreach($teacher as $d)
                                        <option value="{{$d->teacher_id}}">{{$d->name}} </option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>

                        <tbody>

                    </table>
                </div>
                <div class="modal-footer">
                    <center> <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok-sign"></span>Save</button>
                    </center>
                </div>
</form>
</div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>






<!-- script for adding year in year dropdown menu -->
<script>
    var min = new Date().getFullYear(),
        max = min + 2,
        select = document.getElementById('selectElementId');

    for (var i = min; i <= max; i++) {
        var opt = document.createElement('option');
        opt.value = i;
        opt.innerHTML = i;
        select.appendChild(opt);
    }

</script>

@endsection
