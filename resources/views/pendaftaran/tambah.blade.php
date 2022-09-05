<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    
    <title>Form Pendaftaran</title>
</head>
<body>
<div class="row mt-2">
        <div class="col-12">
        
            <div class="card">
              <div class="card-header"><b>Pendaftaran</b>
              {{-- <a href="" class="btn btn-sm ms-2 float-right btn-primary"><i class="fa-solid fa-square-plus"></i> TAMBAH DATA SOAL</a> --}}
              </div>
              @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
             
            <div class="container">
                <div class="class-header">           
               
                    <div class="card-body responsive">
                        <form action="{{route('order.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="form-group mb-2 col-10">
                                <input required type="text" name="id_ekskul" class="form-control" value="{{ old('id_ekskul') }}">
                            </div>
    
                            <div class="form-group mb-2 col-10">
                                <label for="">NIS</label>
                                <input required type="text" name="nis" class="form-control" value="{{ old('nis') }}">
                            </div>
    
                            <div class="form-group mb-2 col-4">
                                <label for="">Nama Siswa</label>
                                <input required type="text" name="nama_siswa" class="form-control" value="{{ old('nama_siswa') }}">
                            </div>

                            <div class="form-group mb-2 col-4">
                                <label for="">Kelas</label>
                                <input required type="text" name="kelas" class="form-control" value="{{ old('kelas') }}">
                            </div>

                            <div class="form-group mb-2 col-4">
                                <label for="">No. Hp</label>
                                <input required type="text" name="nohp" class="form-control" value="{{ old('nohp') }}">
                            </div>
                            
                            <button type="submit" name="submit" class="btn btn-m btn-success"><i class="fa-solid fa-file-circle-plus"></i> Submit Data </button>
                            <a href="{{url('admin')}}" class="btn btn-m btn-danger float-right ms-4"> Batal</a>
                        </form>

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