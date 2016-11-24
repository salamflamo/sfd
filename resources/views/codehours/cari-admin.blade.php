<form role="form" method="POST" action="{{ url('/cari-admin') }}"
      xmlns="http://www.w3.org/1999/html">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input required="required" value="{{old('query')}}" name="query" type="text"><br>
    <input type="submit" name='publish'  value = "Publish"/>
</form>