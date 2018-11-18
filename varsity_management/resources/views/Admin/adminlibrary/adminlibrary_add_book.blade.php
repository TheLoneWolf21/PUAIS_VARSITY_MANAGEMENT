@extends('Admin.AdminLibrary')
@section('adminlibrary_data')

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <!-- < <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
 <!--  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
<style>
    .drop {
        width: 230px;
        text-align: center;
        margin-top: 5%;
        height: 30px;
        background: white;
        
    }
</style>


    <div class="container">
  <h2>Add Book</h2>
  <form>
    <div class="form-group">
      <label for="usr">Book Name</label>
      <input type="text" class="form-control" id="book_name" >
    </div>
       <div class="form-group">
      <label for="usr">Book Author</label>
      <input type="text" class="form-control" id="book_author">
    </div>
      <div class="form-group" style="margin-top: -50px;">
      <label for="usr">Select Type</label>
      <select id='gMonth2' class="drop">
            <option value='0'>--Select Type--</option>
            <option value='1'>Programming</option>

            <option value='2'>Networking</option>
           <option value='3'>Other</option>

        </select>
    </div>
       <div class="form-group">
      <label for="usr">Book Cover</label>
      <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
    <small id="fileHelp" class="form-text text-muted">Add book cover.</small>
    </div>
       <div class="form-group">
      <label for="usr">PDF File</label>
      <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
    <small id="fileHelp" class="form-text text-muted">Add PDF version of book.</small>
    </div>
      <button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#myModal">Submit</button>
        </form>
@endsection