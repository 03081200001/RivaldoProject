<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <ul class="nav nav-tabs">            
            <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
            </li>
            {{-- <li class="nav-item">
            <a class="nav-link" href="/about">About</a>
            </li> --}}
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/mahasiswa">Mahasiswa</a>
            </li>
            

        </ul>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-10"></div>
                <h1 class="mt-3">Data student</h1>
                <table class="table table-success table-striped">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NIM</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach( $student as $std )
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $std->nama_student }}</td>
                            <td>{{ $std->nim_student }}</td>
                            <td>{{ $std->jenis_kelamin }}</td>
                            <td>{{ $std->jurusan }}</td>
                            <td>
                                <a href="" class="badge rounded-pill text-bg-success">Edit</a>
                                <a href="" class="badge rounded-pill text-bg-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>