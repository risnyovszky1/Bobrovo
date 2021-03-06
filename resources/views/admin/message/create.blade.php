@section('title')
    Poslať správu | Bobrovo
@endsection

@extends('admin.master')

@section('admin_content')
    <div class="row">
        <div class="col-lg-8 pt-3 pb-3">
            <h2>Poslať správu</h2>

            @if(!empty($success))
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-success mb-2">
                            {{ $success }}
                        </div>
                    </div>
                </div>
            @endif

            <form action="{{ route('message.store') }}" method="post">
                <div class="form-group">
                    <label for="addresses[]">Adresáty</label>
                    <select name="addresses[]" id="addresses" class="form-control" multiple="multiple">
                        @foreach($addresses as $addr)
                            <option value="{{ $addr->id }}">{{ $addr->first_name . ' ' . $addr->last_name . ' (' . $addr->email . ')' }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="subject">Predmet </label>
                    <input type="text" name="subject" id="subject" class="form-control" value="{{old('subject')}}">
                </div>
                <div class="form-group">
                    <label for="content">Správa</label>
                    <textarea name="content" rows="8" class="form-control" id="msg-text-editor">{{old('content')}}</textarea>
                </div>
                <div class="form-group">
                    @csrf
                    <a href="{{ route('message.index') }}" class="btn btn-lg btn-link">Zrušiť</a>
                    <button type="submit" class="btn btn-lg btn-primary"><i class="fas fa-paper-plane"></i> Poslať
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
