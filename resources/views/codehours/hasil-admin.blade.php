@foreach($hasil as $hasils)
    <form role="form" method="POST" action="{{ url('/cari-save') }}"
          xmlns="http://www.w3.org/1999/html">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
         <p> Kode anda   {{$hasils->kode_codehours}} </p>
        <input type="hidden" name="id" value="{{$hasils->id}}">
        <input type="hidden" name="kode_codehours" value="{{$hasils->kode_codehours}}">
        <input type="hidden" required="required" value="@if(!old('nama')){{$hasils->nama}}@endif{{ old('nama') }}" name="nama" >
        <input type="hidden" required="required" value= "@if(!old('jurusan')){{$hasils->jurusan}}@endif{{ old('jurusan') }}" name="jurusan" />
        <input type="hidden" required="required" value="@if(!old('email')){{$hasils->email}}@endif{{ old('email') }}" name="email" />
        <input type="hidden" required="required" value="@if(!old('no_hp')){{$hasils->no_hp}}@endif{{ old('no_hp') }}" name="no_hp" />
        <input type="hidden" required="required" value="@if(!old('role')){{$hasils->role}}@endif{{ old('role') }}" name="role" />
        <div class="form-group">
            <label >Kehadiran</label>

            <select class="form-control" name="confirmed" required="required">
                <option >--Pilih--</option>
                <option value="0" {{ $hasils->confirmed == 0 ? "selected" : "" }} >Belum</option>
                <option value="1" {{ $hasils->confirmed == 1 ? "selected" : "" }} >sudah</option>

            </select>

        </div>
        <input type="submit" name='publish'  value = "Publish"/>
   </form>

    @endforeach