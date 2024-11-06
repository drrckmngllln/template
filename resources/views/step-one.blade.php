@extends('index')

@section('content')
    <div class="container">
        <div class="card mt-4">
            <div class="card-body">
                <h3>Step 1: <strong>Basic Information</strong></h3>
                <p>Note: All fields with <span style="color: red">*</span> are required</p>

                <form action="" method="post">
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label class="form-label">Last Name <span style="color: red">*</span></label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="form-label">First Name <span style="color: red">*</span></label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="form-label">Middle Name <span style="color: red">*</span></label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label class="form-label">Gender <span style="color: red">*</span></label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="form-label">Civil Status <span style="color: red">*</span></label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="form-label">Date of Birth <span style="color: red">*</span></label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label class="form-label">Place of Birth <span style="color: red">*</span></label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="form-label">Nationality <span style="color: red">*</span></label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="form-label">Religion <span style="color: red">*</span></label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label class="form-label">Control Number <span style="color: red">*</span></label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="form-label">Email <span style="color: red">*</span></label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="form-label">Home Address <span style="color: red">*</span></label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Next</button>
                    </div>
                    <div class="row mt-2">
                    </div>
                </form>
            </div>
        </div>
@endsection
