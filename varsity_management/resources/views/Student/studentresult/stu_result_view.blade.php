@extends('Student.StudentResult')
@section('stu_result_data')
<style>
    .drop {
        width: 330px;
        text-align: center;
        margin-top: 2px;
        height: 30px;
        background: white;

    }
thead tr:nth-child(1) th {
  background: white;
  position: sticky;
  top: 0;
  z-index: 10;
}

</style>
<center><span class="view_result_option">View Result For:&nbsp; &nbsp;<select id='session' class="drop">
            <option value='0'>--Select Session--</option>
            <option value='1'>Janaury 2018</option>
            <option value='6'>June 2018</option>
            <option value='6'>June 2018</option>
            <option value='6'>June 2018</option>
        </select>
        <button type="button" class="btn btn-primary" style="float: none;" data-toggle="modal" data-target="#myModal">Go</button>
    </span>
</center>
<div class="table-responsive" style="overflow-y:auto ; height: 85%; margin-top: 4px;">


<table id="mytable" class="table table-bordred table-striped sticky-header" style=";">

    <thead>

        <th>Subject</th>
        <th>Semester</th>
        <th>Teacher</th>
        <th>1<sup>st</sup>&nbsp;50 marks</th>
        <th>Total Marks</th>
        <th>Grade</th>
        <th>Status</th>
    </thead>
    <tbody>
        <tr onclick="window.location.href='#'" style="cursor: pointer">
            <td>Physics I</td>
            <td>1<sup>st</sup></td>
            <td>Sheikh Rahber</td>
            <td>33</td>
            <td>84</td>
            <td>A<sup>+</sup></td>
            <td>Pass</td>
        </tr>
        <tr onclick="window.location.href='#'" style="cursor: pointer">
            <td>Physics I</td>
            <td>1<sup>st</sup></td>
            <td>Sheikh Rahber</td>
            <td>33</td>
            <td>84</td>
            <td>A<sup>+</sup></td>
            <td>Pass</td>
        </tr>
        <tr onclick="window.location.href='#'" style="cursor: pointer">
            <td>Physics I</td>
            <td>1<sup>st</sup></td>
            <td>Sheikh Rahber</td>
            <td>33</td>
            <td>84</td>
            <td>A<sup>+</sup></td>
            <td>Pass</td>
        </tr>
        <tr onclick="window.location.href='#'" style="cursor: pointer">
            <td>Physics I</td>
            <td>1<sup>st</sup></td>
            <td>Sheikh Rahber</td>
            <td>33</td>
            <td>84</td>
            <td>A<sup>+</sup></td>
            <td>Pass</td>
        </tr>
        <tr onclick="window.location.href='#'" style="cursor: pointer">
            <td>Physics I</td>
            <td>1<sup>st</sup></td>
            <td>Sheikh Rahber</td>
            <td>33</td>
            <td>84</td>
            <td>A<sup>+</sup></td>
            <td>Pass</td>
        </tr>
        <tr onclick="window.location.href='#'" style="cursor: pointer">
            <td>Physics I</td>
            <td>1<sup>st</sup></td>
            <td>Sheikh Rahber</td>
            <td>33</td>
            <td>84</td>
            <td>A<sup>+</sup></td>
            <td>Pass</td>
        </tr>
        <tr onclick="window.location.href='#'" style="cursor: pointer">
            <td>Physics I</td>
            <td>1<sup>st</sup></td>
            <td>Sheikh Rahber</td>
            <td>33</td>
            <td>84</td>
            <td>A<sup>+</sup></td>
            <td>Pass</td>
        </tr>
        <tr onclick="window.location.href='#'" style="cursor: pointer">
            <td>Physics I</td>
            <td>1<sup>st</sup></td>
            <td>Sheikh Rahber</td>
            <td>33</td>
            <td>84</td>
            <td>A<sup>+</sup></td>
            <td>Pass</td>
        </tr>
        <tr onclick="window.location.href='#'" style="cursor: pointer">
            <td>Physics I</td>
            <td>1<sup>st</sup></td>
            <td>Sheikh Rahber</td>
            <td>33</td>
            <td>84</td>
            <td>A<sup>+</sup></td>
            <td>Pass</td>
        </tr>
        
        <tr onclick="window.location.href='#'" style="cursor: pointer">
            <td>Physics I</td>
            <td>1<sup>st</sup></td>
            <td>Sheikh Rahber</td>
            <td>33</td>
            <td>84</td>
            <td>A<sup>+</sup></td>
            <td>Pass</td>
        </tr>
        <tr onclick="window.location.href='#'" style="cursor: pointer">
            <td>Physics I</td>
            <td>1<sup>st</sup></td>
            <td>Sheikh Rahber</td>
            <td>33</td>
            <td>84</td>
            <td>A<sup>+</sup></td>
            <td>Pass</td>
        </tr>
        <tr onclick="window.location.href='#'" style="cursor: pointer">
            <td>Physics I</td>
            <td>1<sup>st</sup></td>
            <td>Sheikh Rahber</td>
            <td>33</td>
            <td>84</td>
            <td>A<sup>+</sup></td>
            <td>Pass</td>
        </tr>
        <tr onclick="window.location.href='#'" style="cursor: pointer">
            <td>Physics I</td>
            <td>1<sup>st</sup></td>
            <td>Sheikh Rahber</td>
            <td>33</td>
            <td>84</td>
            <td>A<sup>+</sup></td>
            <td>Pass</td>
        </tr>
        
    </tbody>
</table>
<script>
$(document).ready(function(){
    $(".sticky-header").floatThead({top:3320});
});    
</script>
@endsection
