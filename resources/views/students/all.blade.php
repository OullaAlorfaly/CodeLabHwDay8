@extends('layouts.master')
@section('content')
    <div class="container" style="padding-top: 100px;">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <table class="table">
                    <tr>
                        <th class="text-center">Id</th>
                        <th class="text-center">First Name</th>
                        <th class="text-center">Last Name</th>
                        <th class="text-center">Full Name</th>
                        <th class="text-center">Grade</th>
                        <th class="text-center">Grade In String</th>
                        <th class="text-center">Level</th>
                    </tr>


                    @foreach($students as $student)
                        <tr>
                            <td class="text-center">{{$student->id}}</td>
                            <td class="text-center">{{$student->first_name}}</td>
                            <td class="text-center">{{$student->last_name}}</td>
                            <td class="text-center">{{$student->full_name}}</td>
                            <td class="text-center">{{$student->grade}}</td>
                            <td class="text-center">{{$student->grade_string}}</td>
                            <td class="text-center">{{$student->level->name}}</td>
                        </tr>

                        @endforeach
                </table>
            </div>
        </div>

    </div>

    @endsection