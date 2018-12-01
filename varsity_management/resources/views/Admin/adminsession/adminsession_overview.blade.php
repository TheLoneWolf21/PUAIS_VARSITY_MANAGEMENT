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
            <th>Session</th>
            <th>Total student enrolled</th>
            <th>Average CGPA</th>
            <th>Active</th>
            
        </thead>
        <tbody>

            <tr>
                
                <td>2018 January</td>
                <td>687</td>
                <td>3.2</td>
                <td><input type="checkbox" class="checkthis"  checked/></td>
            </tr>

            <tr>
                 
                <td>2018 January</td>
                <td>687</td>
                <td>3.2</td>
                <td><input type="checkbox" class="checkthis" onclick="fixit()"/></td>
            </tr>


            <tr>
                
                <td>2018 January</td>
                <td>687</td>
                <td>3.2</td>
                <td><input type="checkbox" class="checkthis" onclick="fixit()"/></td>
            </tr>



            <tr>
                
                <td>2018 January</td>
                <td>687</td>
                <td>3.2</td>
                <td><input type="checkbox" class="checkthis" onclick="fixit()"/></td>
            </tr>


            <tr>
               
                <td>2018 January</td>
                <td>687</td>
                <td>3.2</td>
                <td><input type="checkbox" class="checkthis" onclick="fixit()"/></td>
            </tr>

            <tr>
               
                <td>2018 January</td>
                <td>687</td>
                <td>3.2</td>
                <td><input type="checkbox" class="checkthis" onclick="fixit()"/></td>
            </tr>

            <tr>
               
                <td>2018 January</td>
                <td>687</td>
                <td>3.2</td>
                <td><input type="checkbox" class="checkthis" onclick="fixit()"/></td>
            </tr>

            <tr>
                
                <td>2018 January</td>
                <td>687</td>
                <td>3.2</td>
                <td><input type="checkbox" class="checkthis" onclick="fixit()"/></td>
            </tr>

            <tr>
                 
                <td>2018 January</td>
                <td>687</td>
                <td>3.2</td>
                <td><input type="checkbox" class="checkthis" onclick="fixit()"/></td>
            </tr>

            <tr>
                 
                <td>2018 January</td>
                <td>687</td>
                <td>3.2</td>
               <td><input type="checkbox" class="checkthis" onclick="fixit()"/></td>
            </tr>

            <tr>
               
                <td>2018 January</td>
                <td>687</td>
                <td>3.2</td>
                <td><input type="checkbox" class="checkthis" onclick="fixit()"/></td>
            </tr>

            <tr>
                 
                <td>2018 January</td>
                <td>687</td>
                <td>3.2</td>
                <td><input type="checkbox" class="checkthis" onclick="fixit()"/></td>
            </tr>

        </tbody>

    </table>
</div>
<script>
function fixit() {
  var cbs = document.querySelectorAll('input[type="checkbox"]:checked:disabled');
  for(var i = 0;i<cbs.length;i++){
    cbs[i].checked = 0;
  }
}</script>
@endsection
@section('bottomnav')
<div class="clearfix"></div>
                <ul class="pagination pull-left">
                    <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left" style="height: 20px;"></span></a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-chevron-right" style="height: 20px;"></span></a></li>
                </ul>
@endsection
