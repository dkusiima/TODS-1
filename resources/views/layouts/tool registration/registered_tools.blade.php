@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Tools Registered</h2>
            </div>
            <div class="pull-right">
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#newTool">
                    Register new tool
                </button>
            </div>
        </div>
    </div>
    <!-- div for register new tool pop up dialog-->
    <div class="modal fade" id="newTool" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" style="text-align: center;">Register new tool</h4>
                </div>
                <div class="modal-body">
                    {!! Form::open(array('route' => 'tools.store','method'=>'POST')) !!}

                <div class="form-group">
                    <strong>Tool Name:</strong>
                    {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                </div>



                <div class="form-group">
                    <strong>Tool Code:</strong>
                    {!! Form::text('code', null, array('placeholder' => 'Code','class' => 'form-control')) !!}
                </div>


                <div class="form-group">
                    <strong>Specification:</strong>
                    {!! Form::text('specification', null, array('placeholder' => 'Specification','class' => 'form-control')) !!}
                </div>

                    <div class="form-group">
                        <strong>Service area:</strong>
                        {{Form::select('servicearea_id', $serviceareafortool, null)}}
                    </div>

                    <div class="form-group">
                        <strong>Package Id:</strong>
                        {{ Form::select('package_id', $packagefortool, null)}}
                    </div>

                <div class="form-group">
                    <strong>Description:</strong>
                    {!! Form::textarea('description', null, array('placeholder' => 'Description','class' => 'form-control')) !!}
                </div>


                {{ Form::submit('Register tool', array('class' => 'btn btn-info btn-block')) }}
                    {{ Form::close() }}
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
    <!--place new order ends -->
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-striped" border="3">
        <tr >
            <th>Id</th>
            <th>Name</th>
            <th>Code</th>
            <th>Specification</th>
            <th>Description</th>
            <th>Service_area</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($tools as $tool)
            <tr>
                <td>{{ $tool->tools_id }}</td>
                <td>{{ $tool->name}}</td>
                <td>{{ $tool->code}}</td>
                <td>{{ $tool->specification}}</td>
                <td>{{ $tool->description}}</td>
                <td>{{ $tool->servicearea_id}}</td>
                <td>
                    <!-- show tool -->
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#showTool">
                        Show
                    </button>
                    <div class="modal fade" id="showTool" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    <h4 class="modal-title" style="text-align: center;">Tool details</h4>
                                </div>
                                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12 margin-tb">
                            <div class="pull-left">
                                <h2> Show Tool details</h2>
                            </div>
                            <div class="pull-right">
                                <a class="btn btn-primary" href="{{ route('tools.index') }}"> Back</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Name:</strong>
                                {{ $tool->name}}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Code:</strong>
                                {{ $tool->code}}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Specification:</strong>
                                {{ $tool->specification}}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Service area:</strong>
                                {{ $tool->service_area}}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Package:</strong>
                                {{ $tool->package_id}}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Description:</strong>
                                {{ $tool->description}}
                            </div>
                        </div>
                    </div>
                                </div>
                                </div>
                                </div>
                                </div>
                    <!--show tool ends -->
                    <!-- edit tool -->
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editTool">
                        Edit
                    </button>

                    <div class="modal fade" id="editTool" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    <h4 class="modal-title" style="text-align: center;">Edit tool</h4>
                                </div>
                                <div class="modal-body">
                                    {!! Form::model($tool, ['method' => 'PATCH','route' => ['tools.update', $tool->tools_id]]) !!}
                                    <div class="form-group">
                                        <strong>Tool Name:</strong>
                                        {!! Form::text('name', $tool->name, array('placeholder' => 'Name','class' => 'form-control')) !!}
                                    </div>



                                    <div class="form-group">
                                        <strong>Tool Code:</strong>
                                        {!! Form::text('code', $tool->code, array('placeholder' => 'Code','class' => 'form-control')) !!}
                                    </div>


                                    <div class="form-group">
                                        <strong>Specification:</strong>
                                        {!! Form::text('specification', $tool->specification, array('placeholder' => 'Specification','class' => 'form-control')) !!}
                                    </div>

                                    <div class="form-group">
                                        <strong>Service area:</strong>
                                        {!! Form::select('service_area')!!}
                                    </div>

                                    <div class="form-group">
                                        <strong>Description:</strong>
                                        {!! Form::textarea('description', $tool->description, array('placeholder' => 'Description','class' => 'form-control')) !!}
                                    </div>

                                    {{ Form::submit('Edit tool', array('class' => 'btn btn-info btn-block')) }}
                                    <hr>
                                    {{ Form::close() }}
                                </div>
                            </div>
                        </div>
                    </div>


                    <!--edit tool ends-->

                    <!-- delete tool begins -->
                 {!! Form::open(['method' => 'DELETE','route' => ['tools.destroy', $tool->tools_id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}

                </td>
            </tr>
        @endforeach
    </table>
    {{--{!! $tools->render() !!}--}}
    <!-- jQuery 2.2.3 -->
    <script src="/bower_components/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="/bower_components/AdminLTE/bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="/bower_components/AdminLTE/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/bower_components/AdminLTE/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="/bower_components/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="/bower_components/AdminLTE/plugins/fastclick/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="/bower_components/AdminLTE/dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="/bower_components/AdminLTE/dist/js/demo.js"></script>


@endsection

