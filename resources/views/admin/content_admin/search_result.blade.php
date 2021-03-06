@extends('admin.layout_admin.master')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Basic Data Tables example with responsive plugin</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#">Config option 1</a>
                            </li>
                            <li><a href="#">Config option 2</a>
                            </li>
                        </ul>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>

                <div class="ibox-content">
                   <a class="btn btn-rounded btn-primary fa fa-backward" href="{{ URL::previous() }}">   Back page</a>
                    <div class="table-responsive">

                        <table class="table table-striped table-bordered table-hover dataTables-example" >
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name JOB</th>
                                <th>Company</th>
                                <th>Number of employee</th>
                                <th>summary</th>
                                <th>date start</th>
                                <th>date expire</th>
                                <th>Email</th>
                                <th>Edit record</th>
                                <th>Delete record</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $jobs->id }}</td>
                                    <td>{{ $jobs->name }}</td>
                                    <td>{{ $jobs->company }}</td>
                                    <td>{{ $jobs->num_emp }}</td>
                                    <td>{{ $jobs->summary }}</td>
                                    <td>{{ $jobs->date_start }}</td>
                                    <td>{{ $jobs->date_expire }}</td>
                                    <td>{{ $jobs->email }}</td>
                                    <th><a href="/admin/{{ $jobs->id }}/edit" class="fa fa-edit">   Edit</a></th>
                                    <th><a href="" data-toggle="modal" data-target="#DeleteModal" onclick="clickDelete({{ $jobs->id }})" class="fa fa-trash"  style="color: red">   Delete</a></th>
                                </tr>
                            </tbody>
                            <tfoot>
                            <tr>

                                <th>ID</th>
                                <th>Name JOB</th>
                                <th>Company</th>
                                <th>Number of employee</th>
                                <th>summary</th>
                                <th>date start</th>
                                <th>date expire</th>
                                <th>Email</th>
                                <th>Edit record</th>
                                <th>Delete record</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- modal window show delete confirm-->
    <div class="modal inmodal" id="DeleteModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated bounceInRight">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <i class="fa fa-trash modal-icon"></i>
                    <h4 class="modal-title">Are you sure?</h4>
                    <small class="font-bold">This deletion may deleted on database without any backup!<br>Make sure take backup first and then delete it.</small>
                </div>
                <div class="modal-body">
                    <p></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                    <a type="button" class="btn btn-danger" id="deleteRoute" href="">Delete</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('java-script')
    <script>
        function clickDelete(id) {
            $('#deleteRoute').attr('href','admin/'+id+'/delete');
        }
    </script>
@endsection