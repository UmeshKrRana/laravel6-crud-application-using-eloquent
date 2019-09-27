@extends('student/layout')
<div class="container mt-3">
    <div class="row">
        <div class="col-xl-8 p-4 m-auto shadow">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title text-info"> Show Student </h5>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 m-auto">

                            <div class="form-group">
                                <label> First Name </label>
                                <input type="text" name="first_name" disabled placeholder="First Name" class="form-control" value="{{ $student->first_name}}">
                            </div>

                            <div class="form-group">
                                <label> Date of Birth </label>
                                <input type="date" name="dob" disabled placeholder="Date of Birth" class="form-control" value="{{ $student->dob }}">
                            </div>

                            <div class="form-group">
                                <label> Email </label>
                                <input type="text" name="email" disabled placeholder="Email" class="form-control" value="{{ $student->email }}">
                            </div>

                            <div class="form-group">
                                <label> Address </label>
                                    <input class="form-control" disabled placeholder="Address" type="text" name="address" value="{{ $student->address }}">
                            </div>
                        </div>

                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 m-auto">
                        <div class="form-group">
                            <label> Last Name </label>
                            <input type="text" name="last_name" disabled placeholder="Last Name" class="form-control" value="{{ $student->last_name }}">
                        </div>

                        <div class="form-group">
                            <label> Gender </label>
                            <select class="form-control" name="gender" disabled>
                                @if($student->gender == "male")
                                    <option value="male" selected> Male </option>
                                @elseif($student->gender == "female")
                                    <option value="female"> Female </option>
                                @endif
                            </select>
                        </div>

                        <div class="form-group">
                            <label> Phone </label>
                            <input type="phone" name="phone" disabled placeholder="Phone no" class="form-control" value="{{ $student->phone }}">
                        </div>

                        <div class="form-group">
                            <label> Zipcode </label>
                            <input type="number" name="zipcode" disabled class="form-control" placeholder="Zipcode" value="{{ $student->zipcode}}">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <a href=" {{ route('student.index')}}" class="btn btn-danger"> Close <i class="fa fa-times-circle"></i></a>
                </div>

                </div>
            </div>
        </div>
    </div>
