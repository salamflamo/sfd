<html>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Email</th>
                <th>Kode</th>
               <th>Score</th>
            </tr>

        </thead>
        @foreach($pemains as $pemain)
        <tbody>
            <tr>
                <td>{{$pemain->id}}</td>
                <td>{{$pemain->nama}}</td>
                <td>{{$pemain->username}}</td>
                <td>{{$pemain->email}}</td>
                <td>{{$pemain->kode}}</td>
                <td>{{$pemain->score}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>


</html>