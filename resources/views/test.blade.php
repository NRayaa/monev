<form action="{{ route('save.atletpres') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="atlet">Atlet</label>
        @foreach ($atletData as $key => $atletpresData)
        <div class="row">
            <div class="col">
                <input type="text" class="form-control" name="atlet[{{$key}}][name]" placeholder="Name" value="{{$}}">
            </div>
            <div class="col">
                <input type="text" class="form-control" name="atlet[{{$key}}][value]" placeholder="Value" value="">
            </div>
            <div class="col">
                <input type="text" class="form-control" name="atlet[{{$key}}][keterangan]" placeholder="Keterangan" value="">
            </div>
        </div>
        @endforeach
    </div>
    <input type="hidden" name="id_monev" value="{{ $idMonev }}">
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
