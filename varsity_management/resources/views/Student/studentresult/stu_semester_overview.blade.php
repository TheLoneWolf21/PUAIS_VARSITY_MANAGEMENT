@extends('Student.StudentResult')
@section('stu_result_data')
<div class="table-responsive" style="overflow-y:auto ; height: 73%;">


    <table id="mytable" class="table table-bordred table-striped">

        <thead>
            <th>Semester</th>
            <th>CGPA Obtained</th>
            <th>Position</th>
        </thead>
        <tbody>

            <tr onclick="window.location.href='#'" style="cursor: pointer">

                <td>1<sup>st</sup></td>
                <td>3.25</td>
                <td>5</td>
            </tr>
            <tr onclick="window.location.href='#'" style="cursor: pointer">

                <td>1<sup>st</sup></td>
                <td>3.25</td>
                <td>5</td>
            </tr>
            <tr onclick="window.location.href='#'" style="cursor: pointer">

                <td>1<sup>st</sup></td>
                <td>3.25</td>
                <td>5</td>
            </tr>
            <tr onclick="window.location.href='#'" style="cursor: pointer">

                <td>1<sup>st</sup></td>
                <td>3.25</td>
                <td>5</td>
            </tr>
            <tr onclick="window.location.href='#'" style="cursor: pointer">

                <td>1<sup>st</sup></td>
                <td>3.25</td>
                <td>5</td>
            </tr>
            <tr onclick="window.location.href='#'" style="cursor: pointer">

                <td>1<sup>st</sup></td>
                <td>3.25</td>
                <td>5</td>
            </tr>
            <tr>
                <td colspan="2"><strong>Average CGPA</strong></td>
                <td><strong>3.5</strong></td>
            </tr>
        </tbody>
    </table>
    @endsection
