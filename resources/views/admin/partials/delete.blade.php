<form action="{{ $route }}" class="" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-sm btn-outline-danger">
        <i class="fas fa-trash"></i>
    </button>
</form>
