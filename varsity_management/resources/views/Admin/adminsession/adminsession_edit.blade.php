@extends('Admin.AdminSession')
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
    .drop {
        width: 230px;
        text-align: center;
        margin-top: 5%;
        height: 30px;
        background: white;
        
    }
    .check
    {
        margin-left: 
    }

</style>
<h1>Add Session</h1>
<div style="margin-left: 5%; height: 200px;">
    <span >Month: </span><span> <select id='gMonth2' class="drop">
            <option value='0'>--Select Month--</option>
            <option value='1'>Janaury</option>
            
            <option value='6'>June</option>
            
        </select> </span><span class="year">Year:   </span><span><select id="selectElementId" class="drop"></select></span>
        <span><button class="btn btn-primary">Add</button></span>
        <br />
    <span class="check" style="margin-left: 5%;margin-top: 5%;"><input type="checkbox" checked></span><span class="markas">Mark as active session</span>
</div>
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
