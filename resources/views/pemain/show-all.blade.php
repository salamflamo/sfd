<html>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>username</th>
                <th>Email</th>
               <th>score</th>
            </tr>

        </thead>
        @foreach($pemains as $pemain)
        <tbody>
            <tr>
                <td>{{$pemain->id}}</td>
                <td>{{$pemain->username}}</td>
                <td>{{$pemain->email}}</td>
                <td>{{$pemain->score}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>


</html>