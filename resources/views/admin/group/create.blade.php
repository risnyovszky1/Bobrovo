@section('title')
    Pridaj skupinu | Bobrovo
@endsection

@extends('admin.master')


@section('admin_content')


    <div class="row">
        <div class="col-lg-8 pt-3 pb-3">

            <div class="row">
                <div class="col-md-12">
                    <h2>Pridať skupinu</h2>
                </div>
            </div>

            @if(!empty($success))
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-success mb-2">
                            {{ $success }}
                        </div>
                    </div>
                </div>
            @endif

            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('group.store') }}" method="post">
                        <div class="form-group">
                            <label for="title">Názov</label>
                            <input type="text" name="title" id="title" class="form-control" value="{{old('title')}}">
                        </div>

                        <div class="form-group">
                            <label for="desc">Popis</label>
                            <textarea name="desc" id="" rows="8" class="form-control wyswyg-editor"
                                      id="group-description">{{old('desc')}}</textarea>
                        </div>

                        <div class="form-group">
                            {{ csrf_field() }}
                            <a href="{{ route('group.index') }}" class="btn btn-lg btn-link">Zrušiť</a>
                            <button type="submit" class="btn btn-lg btn-primary">
                                <i class="fas fa-plus-circle"></i> Pridaj
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
