<form role="form" method="POST" action="{{ url('/daftar') }}"
      xmlns="http://www.w3.org/1999/html">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input required="required" value= "{{ old('username')}}" name="username" type="text"/><br>
    <input required="required" value="{{old('email')}}" name="email" type="email"/><br>
    <input required="required" value="{{old('no_hp')}}" name="no_hp" type="text"/><br>
    <input type="submit" name='publish'  value = "Publish"/>
    </form>