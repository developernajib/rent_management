@extends('dashboard.base')
@section('title', 'Adding Client to Database')
@section('admin_dashboard')
    <div style="background: #C9EEFF; color:black; padding:40px 30px;">
        <div class="row">
            <div class="col-12">
                <div class="box">
                    <div class="box-header with-border mb-4">
                        <h3 class="box-title">Adding Client to Database</h3>
                        <hr>
                    </div>
                    <div class="box-body">
                        <div class="table-responsive" style="overflow: hidden;">
                            <form method="POST" action="clients.store" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <h5>First Name<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="department_name" class="form-control">
                                            @error('department_name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <h5>Last Name<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="department_name" class="form-control">
                                            @error('department_name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                </div>
                                <div class="form-group">
                                    <h5>Email Address<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="department_name" class="form-control">
                                        @error('department_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>Mobile Number<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="department_name" class="form-control">
                                        @error('department_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>Property Address<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="department_name" class="form-control">
                                        @error('department_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>Per Month Rent<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="department_name" class="form-control">
                                        @error('department_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>Discount Percent<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="department_name" class="form-control">
                                        @error('department_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>Discount Amount<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="department_name" class="form-control">
                                        @error('department_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <h5>Client Image <small style="color:red;">(optional)</small></h5>
                                    <div class="controls">
                                        <input type="file" class="form-control-file"
                                            onChange="mainThamUrldepartment(this)">
                                        @error('banner_image')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <img src="" id="mainThmb">
                                </div>
                                <div class="text-xs-right">
                                    <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Add Department">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
