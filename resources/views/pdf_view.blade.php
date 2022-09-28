<!DOCTYPE html>
<html>
<head>
    <title>Hi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <h1>XUAT PDF</h1>
    <p class="text-center">Center aligned text on all viewport sizes.</p>

    <table class="table-primary">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
          </tr>
        </thead>
        <tbody>
            @foreach($data as $dataa)
                <tr>
                    <td>{{ $dataa->name }}</td>
                    <td>{{ $dataa->email }}</td>
                    <td>{{ $dataa->phone_number }}</td>
                    <td>{{ $dataa->dob }}</td>
                </tr>
            @endforeach
        </tbody>
      </table>

</div>
<style>
    table{
        border:1px solid;
    }
    th,td{
        border-right:1px solid;
    }
    tr{
        border-bottom:1px solid;
    }
</style>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>