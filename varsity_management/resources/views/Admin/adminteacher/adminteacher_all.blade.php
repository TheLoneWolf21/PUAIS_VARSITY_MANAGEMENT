@extends('Admin.AdminTeacher')
@section('adminteacher_data')
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
                            <th></th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Type</th>
                            <th>Advising</th>
                            <th>Email</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </thead>
                        <tbody>

                            <tr>
                                <td><input type="checkbox" class="checkthis" /></td>
                                <td><i class="fas fa-user" style="border-radius: 50%;"></i></td>
                                <td>Mohsin</td>
                                <td>Irshad</td>
                                <td>Professor</td>
                                <td>C6B</td>
                                <td>abc@email.com</td>
                                <td>
                                    <p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit"><span class="glyphicon glyphicon-pencil"></span></button></p>
                                </td>
                                <td>
                                    <p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete"><span class="glyphicon glyphicon-trash"></span></button></p>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" class="checkthis" /></td>
                                <td><i class="fas fa-user" style="border-radius: 50%;"></i></td>
                                <td>Mohsin</td>
                                <td>Irshad</td>
                                <td>Professor</td>
                                <td>C6B</td>
                                <td>abc@email.com</td>
                                <td>
                                    <p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit"><span class="glyphicon glyphicon-pencil"></span></button></p>
                                </td>
                                <td>
                                    <p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete"><span class="glyphicon glyphicon-trash"></span></button></p>
                                </td>
                            </tr>


                            <tr>
                                <td><input type="checkbox" class="checkthis" /></td>
                                <td><i class="fas fa-user" style="border-radius: 50%;"></i></td>
                                <td>Mohsin</td>
                                <td>Irshad</td>
                                <td>Professor</td>
                                <td>C6B</td>
                                <td>abc@email.com</td>
                                <td>
                                    <p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit"><span class="glyphicon glyphicon-pencil"></span></button></p>
                                </td>
                                <td>
                                    <p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete"><span class="glyphicon glyphicon-trash"></span></button></p>
                                </td>
                            </tr>



                            <tr>
                                <td><input type="checkbox" class="checkthis" /></td>
                                <td><i class="fas fa-user" style="border-radius: 50%;"></i></td>
                                <td>Mohsin</td>
                                <td>Irshad</td>
                                <td>Professor</td>
                                <td>C6B</td>
                                <td>abc@email.com</td>
                                <td>
                                    <p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit"><span class="glyphicon glyphicon-pencil"></span></button></p>
                                </td>
                                <td>
                                    <p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete"><span class="glyphicon glyphicon-trash"></span></button></p>
                                </td>
                            </tr>


                            <tr>
                                <td><input type="checkbox" class="checkthis" /></td>
                                <td><i class="fas fa-user" style="border-radius: 50%;"></i></td>
                                <td>Mohsin</td>
                                <td>Irshad</td>
                                <td>Professor</td>
                                <td>C6B</td>
                                <td>abc@email.com</td>
                                <td>
                                    <p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit"><span class="glyphicon glyphicon-pencil"></span></button></p>
                                </td>
                                <td>
                                    <p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete"><span class="glyphicon glyphicon-trash"></span></button></p>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" class="checkthis" /></td>
                                <td><i class="fas fa-user" style="border-radius: 50%;"></i></td>
                                <td>Mohsin</td>
                                <td>Irshad</td>
                                <td>Professor</td>
                                <td>C6B</td>
                                <td>abc@email.com</td>
                                <td>
                                    <p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit"><span class="glyphicon glyphicon-pencil"></span></button></p>
                                </td>
                                <td>
                                    <p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete"><span class="glyphicon glyphicon-trash"></span></button></p>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" class="checkthis" /></td>
                                <td><i class="fas fa-user" style="border-radius: 50%;"></i></td>
                                <td>Mohsin</td>
                                <td>Irshad</td>
                                <td>Professor</td>
                                <td>C6B</td>
                                <td>abc@email.com</td>
                                <td>
                                    <p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit"><span class="glyphicon glyphicon-pencil"></span></button></p>
                                </td>
                                <td>
                                    <p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete"><span class="glyphicon glyphicon-trash"></span></button></p>
                                </td>
                            </tr>
                            
                            <tr>
                                <td><input type="checkbox" class="checkthis" /></td>
                                <td><i class="fas fa-user" style="border-radius: 50%;"></i></td>
                                <td>Mohsin</td>
                                <td>Irshad</td>
                                <td>Professor</td>
                                <td>C6B</td>
                                <td>abc@email.com</td>
                                <td>
                                    <p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit"><span class="glyphicon glyphicon-pencil"></span></button></p>
                                </td>
                                <td>
                                    <p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete"><span class="glyphicon glyphicon-trash"></span></button></p>
                                </td>
                            </tr>
                            
                            <tr>
                                <td><input type="checkbox" class="checkthis" /></td>
                                <td><i class="fas fa-user" style="border-radius: 50%;"></i></td>
                                <td>Mohsin</td>
                                <td>Irshad</td>
                                <td>Professor</td>
                                <td>C6B</td>
                                <td>abc@email.com</td>
                                <td>
                                    <p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit"><span class="glyphicon glyphicon-pencil"></span></button></p>
                                </td>
                                <td>
                                    <p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete"><span class="glyphicon glyphicon-trash"></span></button></p>
                                </td>
                            </tr>
                            
                            <tr>
                                <td><input type="checkbox" class="checkthis" /></td>
                                <td><i class="fas fa-user" style="border-radius: 50%;"></i></td>
                                <td>Mohsin</td>
                                <td>Irshad</td>
                                <td>Professor</td>
                                <td>C6B</td>
                                <td>abc@email.com</td>
                                <td>
                                    <p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit"><span class="glyphicon glyphicon-pencil"></span></button></p>
                                </td>
                                <td>
                                    <p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete"><span class="glyphicon glyphicon-trash"></span></button></p>
                                </td>
                            </tr>
                            
                            <tr>
                                <td><input type="checkbox" class="checkthis" /></td>
                                <td><i class="fas fa-user" style="border-radius: 50%;"></i></td>
                                <td>Mohsin</td>
                                <td>Irshad</td>
                                <td>Professor</td>
                                <td>C6B</td>
                                <td>abc@email.com</td>
                                <td>
                                    <p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit"><span class="glyphicon glyphicon-pencil"></span></button></p>
                                </td>
                                <td>
                                    <p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete"><span class="glyphicon glyphicon-trash"></span></button></p>
                                </td>
                            </tr>
                            
                            <tr>
                                <td><input type="checkbox" class="checkthis" /></td>
                                <td><i class="fas fa-user" style="border-radius: 50%;"></i></td>
                                <td>Mohsin</td>
                                <td>Irshad</td>
                                <td>Professor</td>
                                <td>C6B</td>
                                <td>abc@email.com</td>
                                <td>
                                    <p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit"><span class="glyphicon glyphicon-pencil"></span></button></p>
                                </td>
                                <td>
                                    <p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete"><span class="glyphicon glyphicon-trash"></span></button></p>
                                </td>
                            </tr>





                        </tbody>

                    </table>
                </div>
@endsection