<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="row mt-2">
        <div class="col-12">
        
            <div class="card">
              <div class="card-header"><b>Data Ekstra Kulikuler</b>
              <a href="{{route('ekskul.tambah')}}" class="btn btn-sm ms-2 float-right btn-primary"><i class="fa-solid fa-square-plus"></i> TAMBAH DATA EKSKUL</a>
              <a href="{{route('order.tambah')}}" class="btn btn-sm ms-2 float-right btn-primary"><i class="fa-solid fa-square-plus"></i> TAMBAH DATA PENDAFTARAN</a>
              <a href="/order/view" class="btn btn-sm ms-2 float-right btn-primary"><i class="fa-solid fa-square-plus"></i>DATA PENDAFTARAN</a>
            </div>
            
             
            <div class="container">
                <div class="class-header">           
               
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr class="text-center">
                                <th>No</th>
                                <th>Jenis</th>
                                <th>Nama Ekskul</th>
                                <th>Pelatih</th>
                                <th>No. HP Pelatih</th>
                                <th>Aksi</th>
                            </tr>
                            <tbody>
                                @foreach ($eks as $eks2)
                                    
                                
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{ $eks2->jenis}}</td>
                                    <td>{{ $eks2->nama_eks}}</td>
                                    <td>{{ $eks2->pelatih }}</td>
                                    <td>{{ $eks2->nohp_pelatih }}</td>
                                    <td align="center">
                                    
                                        <form action="{{route('ekskul.remove', $eks2->id)}}" method="post">
                                          @csrf
                                          @method('DELETE')
                                            <button class="btn btn-sm btn-danger" onclick="return confirm ('Anda Yakin?')"><i class="fa-solid fa-trash"></i></button>
                                        <a href="{{ route('ekskul.edit', $eks2->id) }}" type="button" class="btn btn-sm btn-warning text-center"><i class="fa-solid fa-edit"></i></a>
                                      </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
      </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</html>