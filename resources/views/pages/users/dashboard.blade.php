<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Blank Page</title>

</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        @include('subview.topnav')
        @include('subview.sidemenu')
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <div class="nav-item d-none d-sm-inline-block">
                                <a href="" class="btn btn-app" data-toggle='modal' data-target='#add_new_user_model'>
                                    <i class="fas fa-user"></i>New User
                                </a>
                            </div>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card card-solid">
                    <div class="card-body pb-0">
                        <div class="row">
                            @foreach ($systemUsers as $sysUser)
                            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                                <div class="card bg-light d-flex flex-fill">
                                    <div class="card-header text-muted border-bottom-0">
                                        Digital Strategist
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="row">
                                            <div class="col-7">
                                                <h2 class="lead"><b>{{$sysUser -> name}}</b></h2>
                                                &nbsp;
                                                <ul class="ml-4 mb-0 fa-ul text-muted">
                                                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-mail-bulk"></i></span>{{$sysUser -> email}}
                                                    </li>
                                                    &nbsp;
                                                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: + 800 -
                                                        12 12 23 52
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-5 text-center">
                                                <img src="{{ asset('assets/images/user-male.png')}}" alt="user-avatar" class="img-circle img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="text-right">
                                            <a href="#" class="btn btn-sm bg-teal">
                                                <i class="fas fa-comments"></i>
                                            </a>
                                            <a href="#" class="btn btn-sm btn-primary">
                                                <i class="fas fa-user"></i> View Profile
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <nav aria-label="Contacts Page Navigation">
                            <ul class="pagination justify-content-center m-0">
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item"><a class="page-link" href="#">6</a></li>
                                <li class="page-item"><a class="page-link" href="#">7</a></li>
                                <li class="page-item"><a class="page-link" href="#">8</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </section>
        </div>

        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">New Flight Alocation Data</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="new_a_flight_no">Flight Number <span class="text-danger">*</span></label>
                        <input type="text" name="a_flight_no" class="form-control" id="new_a_flight_no" placeholder="Enter Flight Number" required>
                    </div>
                    <div class="form-group">
                        <label for="new_a_aircraft_type">Aircraft Type <span class="text-danger">*</span></label>
                        <input type="text" name="a_aircraft_type" class="form-control" id="new_a_aircraft_type" placeholder="Enter Aircraft Type" required>
                    </div>
                    <div class="form-group">
                        <label for="new_a_destination">Destination <span class="text-danger">*</span></label>
                        <input type="text" name="a_destination" class="form-control" id="new_a_destination" placeholder="Enter Destination" required>
                    </div>
                    <div class="form-group">
                        <label for="datetime">Shedule Time Of Departure <span class="text-danger">*</span>:</label>
                        <div class="input-group date" id="timepicker" data-target-input="nearest">
                            <input type="text" name="new_a_std" id="new_a_std" class="form-control datetimepicker-input" data-target="#timepicker" />
                            <div class="input-group-append" data-target="#timepicker" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="far fa-clock"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="booked_load">Book Load</label>
                        <input type="text" name="a_booked_load" class="form-control" id="new_a_booked_load" placeholder="Enter Book Load">
                    </div>
                    <div class="form-group">
                        <label for="arrrival_load">Arrival Load</label>
                        <input type="text" name="a_arrrival_load" class="form-control" id="new_a_arrrival_load" placeholder="Enter Arrival Load">
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" id="addFlightAllocationClose" class="btn btn-default" data-dismiss="modal">Close
                    </button>
                    <button type="button" id="saveNewAlocationRecord" class="btn btn-primary">Add Flight</button>
                </div>
            </div>
        </div>
    </div>
    @include('subview.footer')
    </div>
    <script nonce="{{ csp_nonce() }}" src="{{ asset('assets/plugins/jquery/jquery.min.js')}}"></script>
    <script nonce="{{ csp_nonce() }}" src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.js')}}"></script>
</body>

</html>
