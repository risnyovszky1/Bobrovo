@section('title')
    Pridaj novinku | Bobrovo
@endsection

@extends('admin.master')


@section('admin_content')


    <div class="row">
        <div class="col-lg-8 pt-3 pb-3">
            @if(count($errors) > 0)
                <div class="row">
                    <div class="col-md-12">
                        @foreach($errors->all() as $err)
                            <div class="alert alert-danger mb-2">
                                {{ $err }}
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif

            @if(!empty($success))
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-success mb-2">
                            {{ $success }}
                        </div>
                    </div>
                </div>
            @endif

            <form action="" method="post">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Pidať novinku</h2>
                        <div class="form-group">
                            <label for="title">
                                Názov
                            </label>
                            <input type="text" name="title" id="" class="form-control form-control-lg">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="content">Text</label>
                            <textarea name="content" rows="8" class="form-control" id="news-text-editor"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio1" name="is-visible" value="yes"
                                   class="custom-control-input">
                            <label class="custom-control-label" for="customRadio1">Visible</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio2" name="is-visible" value="no"
                                   class="custom-control-input">
                            <label class="custom-control-label" for="customRadio2">Not visible</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 pt-3">
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-primary btn-lg"><i class="fas fa-plus-circle"></i> Pridaj
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
