@extends('./student/layout')
  <body>
    <div class="container mt-3">
        <form action="{{ route('student.update', $student->id) }}" method="post">
          {{csrf_field() }}
              @method('PATCH')
                <div class="row">
         <div class="col-xl-8 p-4 m-auto shadow">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title text-info"> Update Student </h5>
                            </div>
                        <div class="card-body">

                    {{--  print success message  --}}
                        @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                                @php
                                    Session::forget('success');
                                @endphp
                            </div>
                        @endif

                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 m-auto">
                                        <div class="form-group" {{ $errors->has('first_name') ? 'has-error' : ''}}>
                                            <label> First Name </label>
                                            <input type="text" name="first_name" placeholder="First Name" class="form-control" value="{{ $student->first_name }}">
                                            {!! $errors->first('first_name', '<small class="text-danger">:message</small>') !!}
                                        </div>

                                        <div class="form-group" {{ $errors->has('dob') ? 'has-error' : ''}}>
                                            <label> Date of Birth </label>
                                            <input type="date" name="dob" placeholder="Date of Birth" class="form-control" value="{{ $student->dob }}">
                                            {!! $errors->first('dob', '<small class="text-danger">:message</small>') !!}
                                        </div>

                                        <div class="form-group" {{ $errors->has('email') ? 'has-error' : ''}}>
                                            <label> Email </label>
                                            <input type="text" name="email" placeholder="Email" class="form-control" value="{{ $student->email }}">
                                            {!! $errors->first('email', '<small class="text-danger">:message </small>') !!}
                                        </div>

                                        <div class="form-group" {{ $errors->has('address') ? 'has-error' : ''}}>
                                            <label> Address </label>
                                                <input class="form-control" placeholder="Address" type="text" name="address" value="{{ $student->address }}">
                                                {!! $errors->first('address', '<small class="text-danger">:message </small>') !!}
                                        </div>
                                    </div>

                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 m-auto">
                                    <div class="form-group" {{ $errors->has('last_name') ? 'has-error' : ''}}>
                                        <label> Last Name </label>
                                        <input type="text" name="last_name" placeholder="Last Name" class="form-control" value="{{ $student->last_name }}">
                                        {!! $errors->first('last_name', '<small class="text-danger">:message </small>') !!}
                                    </div>

                                    <div class="form-group" {{ $errors->has('gender') ? 'has-error' : ''}}>
                                        <label> Gender </label>
                                        <select class="form-control text-capitalize" name="gender" value="{{ old('gender') }}">
                                            <option value="{{ $student->gender }}"> {{ $student->gender }} </option>

                                            @if($student->gender == "male")
                                               <option value="female"> Female </option>
                                            @else
                                                <option value="male"> Male </option>
                                            @endif
                                        </select>
                                        {!! $errors->first('gender', '<small class="text-danger">:message </small>') !!}
                                    </div>

                                    <div class="form-group" {{ $errors->has('phone') ? 'has-error' : ''}}>
                                        <label> Phone </label>
                                        <input type="phone" name="phone" placeholder="Phone no" class="form-control" value="{{ $student->phone }}">
                                        {!! $errors->first('phone', '<small class="text-danger">:message </small>') !!}
                                    </div>

                                    <div class="form-group" {{ $errors->has('zipcode') ? 'has-error' : ''}}>
                                        <label> Zipcode </label>
                                        <input type="number" name="zipcode" class="form-control" placeholder="Zipcode" value="{{ $student->zipcode }}">
                                        {!! $errors->first('zipcode', '<small class="text-danger">:message </small>') !!}
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-success" name="submit"> Submit </button>
                            </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
