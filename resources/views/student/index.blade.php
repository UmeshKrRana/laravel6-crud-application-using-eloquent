@extends('./student/layout')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <a href="{{ url('student/create') }}" class="btn btn-info float-right"><i class="fas fa-plus-circle"></i> Add New </a>
        </div>
    </div>

    <table class="table table-striped table-bordered mt-4">
        <thead>
            <th> Name </th>
            <th> DOB </th>
            <th> Gender </th>
            <th> Email </th>
            <th> Phone </th>
            <th> Action </th>
        </thead>

        <tbody>
            @foreach($students as $student)
            <tr>
                <td> {{ $student->full_name }} </td>
                <td> {{ $student->dob }} </td>
                <td> {{ $student->gender }} </td>
                <td> {{ $student->email }} </td>
                <td> {{ $student->phone }} </td>

                <td style="display: -webkit-inline-box;"> <a href="{{ route('student.show', $student->id )}}" class="badge badge-info"> View </a>
                    <a href="{{ route('student.edit', $student->id )}}" class="badge badge-success"> Edit </a>
                    <form action="{{ route('student.destroy', $student->id)}}" method="post">
                     @csrf
                     @method('DELETE')
                        <button class="badge btn-danger" type="submit"> Delete </button>
                   </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<style>
    .btn-danger {
        height:20px;
        margin: 2px 3px;
        height: 20px;
        line-height: 1px;
        border: 0;
        padding: 0 5;
    }
</style>
