<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <table class="table">
      <h1>member list</h1>
        <thead>
          <tr>
            <th scope="col">S.N</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Address</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($members as $item)
            <tr>
              <td>{{ $item['id']}}</td>
                <td>{{ $item['name']}}</td>
                <td>{{ $item['email']}}</td>
                <td>{{ $item['phone']}}</td>
                <td>{{ $item['address']}}</td>
                <td><a href={{ "delete/".$item['id']}}>Delete</a></td>
            </tr>
        @endforeach
    </tbody>
      </table>
</body>
</html>