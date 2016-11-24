<form role="form" method="POST" action="{{ url('/edit-codehours') }}"
      xmlns="http://www.w3.org/1999/html">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="id" value="{{$codehours->id}}">
    <input type="hidden" name="kode_codehours" value="{{$codehours->kode_codehours}}">
    <input required="required" value="@if(!old('nama')){{$codehours->nama}}@endif{{ old('nama') }}" name="nama" type="text"><br>
    <input required="required" value= "@if(!old('jurusan')){{$codehours->jurusan}}@endif{{ old('jurusan') }}" name="jurusan" type="text"/><br>
    <input required="required" value="@if(!old('email')){{$codehours->email}}@endif{{ old('email') }}" name="email" type="email"/><br>
    <input required="required" value="@if(!old('no_hp')){{$codehours->no_hp}}@endif{{ old('no_hp') }}" name="no_hp" type="text"/><br>
    <div class="form-group">
        <label >Kehadiran</label>

            <select class="form-control" name="confirmed" required="required">
                <option >--Pilih--</option>
                <option value="0" {{ $codehours->confirmed == 0 ? "selected" : "" }} >Belum</option>
                <option value="1" {{ $codehours->confirmed == 1 ? "selected" : "" }} >sudah</option>

            </select>

    </div>
    <input type="submit" name='publish'  value = "Publish"/>
</form>
