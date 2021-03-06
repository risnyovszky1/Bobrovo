@extends('student.master')

@section('title')
    Testy | Bobrovo
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 pt-3">
                <h3>{{  __('student.Tests') }}</h3>
                @if (empty($groups))
                    <p>{{ __('student.no-group-yet') }} <i class="fas fa-frown text-danger"></i></p>
                @endif

                @foreach ($groups as $group)
                    <div class="card mb-4">
                        <div class="card-header bg-primary text-white">
                            {{$group->name}}
                        </div>
                        @if ($tests[$group->id] && count($tests[$group->id]) > 0)
                            <ul class="list-group list-group-flush">
                                @foreach ($tests[$group->id] as $test)
                                    <li class="list-group-item">
                                        <a href="{{ route('testone_student', ['id' => $test->id]) }}">
                                            @php
                                                $currTime = strtotime(date('Y-m-d H:i:s'));
                                                if (strtotime($test->available_to) < $currTime && ($test->available_to != null)){
                                                    // test is not available
                                                    echo '<i class="fas fa-times text-danger"></i>';
                                                }
                                                else if ((strtotime($test->available_from) < $currTime && strtotime($test->available_to) > $currTime) || $test->available_to == null){
                                                    // test is going
                                                    echo '<i class="fas fa-play text-warning"></i>';
                                                }
                                                else{
                                                    // test is scheduled for another time
                                                    echo '<i class="fas fa-calendar-alt text-info"></i>';
                                                }
                                            @endphp
                                            {{ $test->name }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <div class="card-body">
                                <p class="card-text">
                                    {{ __('student.no-tests-yet-in-group') }}
                                </p>
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </div>


@endsection
