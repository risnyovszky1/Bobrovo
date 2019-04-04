@section('title')
  Všetky otázky | Bobrovo
@endsection

@extends('admin.master')

@section('admin_content')
<form action="" method="post">
  <div class="row">
    <div class="col-lg-8 pt-3 pb-3">
      <h2>Všetky otázky</h2>

      @if(count($errors) > 0)
            @foreach($errors->all() as $err)
                <div class="alert alert-danger mb-2">
                    {{ $err }}
                </div>
            @endforeach
      @endif

      @if(!empty($questions) && count($questions) > 0)
        <div class="table-responsive">
            <table class="table table-hover mt-2">
                <thead>
                    <tr class="table-secondary">
                        <td scope="col">#</td>
                        <td scope="col">Názov</td>
                        <td scope="col">Kategória</td>
                        <td scope="col" class="text-center">Náročnosť</td>
                        <td scope="col" class="text-center">Typ</td>
                        <td scope="col" class="text-center">Hodnotenie</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($questions as $item)
                        <tr>
                            <td><input type="checkbox" name="questions[]" id="" value="{{$item->id}}"></td>
                            <td><a href="{{ route('questions.one', ['id' => $item->id ]) }}">{{ $item->title }}</a></td>
                            <td>####</td>
                            <td class="text-center">{{ $item->difficulty }}</td>
                            <td class="text-center">{{ $item->type }}</td>
                            <td class="text-center">
                            
                                @if(!array_key_exists($item->id, $ratings) || $ratings[$item->id] < 1)
                                    <span class="badge badge-pill badge-danger">Nehodnotené</span>
                                @elseif($ratings[$item->id] >=4 )
                                    <span class="badge badge-pill badge-success">{{$ratings[$item->id]}}</span>
                                @else
                                    <span class="badge badge-pill badge-warning">{{$ratings[$item->id]}}</span>
                                @endif 
                                 
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            
        </div>
      @else
        <p>Zaťiaľ žiadne otázky sa tu nenachádzajú.</p>
      @endif

      
    </div>
    <div class="col-lg-4 pt-3 pb-3">
        <div class="form-group text-right">
            <button class="btn btn-sm btn-danger" id="unselect-all" data-select="questions[]">Zrušiť označenie</button>
            <button class="btn btn-sm btn-success" id="select-all" data-select="questions[]">Označit všetko</button>
        </div>
        @if (!empty($tests) && count($tests) > 0)
            <div class="form-group">
                <label for="test-select">Test</label>
                <select name="test-select" id="test-select" class="form-control">
                    @foreach ($tests as $item)
                        <option value="{{$item->id}}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                {{ csrf_field() }}
                <button type="submit" class="btn btn-primary btn-block">Pridaj do testu</button>
            </div>
        @endif
        
    </div>
  </div>
</form>
@endsection

