<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <nav>
        <p>navbar</p>
    </nav>
    <table>
        <thead>
            <th>id</th>
            <th>title</th>
            <th>created_at</th>
            <th>Actions</th>
        </thead>
        <tbody>

            <tr>
                <td>{{$major->id}}</td>
                <td>{{$major->title}}</td>
                <td>{{$major->created_at}}</td>
                <form action="{{ route('majors.delete',$major->id) }}" method="post">
                    @method("DELETE")
                    @csrf
                    <td><button>Delete</button></td>
                </form>
              
            </tr>

        </tbody>
    </table>
    <footer>
        <p>footer</p>
    </footer>
</body>
</html>