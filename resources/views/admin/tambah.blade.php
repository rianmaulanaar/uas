<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    
    <title>Tambah Ekskul</title>
</head>
<body>
<div class="row mt-2">
        <div class="col-12">
        
            <div class="card">
              <div class="card-header"><b>TAMBAH DATA EKSKUL</b>
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
                        <form action="{{route('ekskul.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-2 col-4">
                                <label for="">Jenis</label>
                                <select class="form-control" id="sel1" name="jenis" required>
                                    <option value="">--- PILIH ---</option>
                                    <option value="Olahraga">Olahraga</option>
                                    <option value="Seni">Seni</option>
                                  </select>
                                
                            </div>
    
                            <div class="form-group mb-2 col-10">
                                <label for="">Nama Ekskul</label>
                                <input required type="text" name="nama_eks" class="form-control" value="{{ old('nama_eks') }}">
                            </div>
    
                            <div class="form-group mb-2 col-4">
                                <label for="">Nama Pelatih</label>
                                <input required type="text" name="pelatih" class="form-control" value="{{ old('pelatih') }}">
                            </div>

                            <div class="form-group mb-2 col-4">
                                <label for="">No. HP Pelatih</label>
                                <input required type="number" name="nohp_pelatih" class="form-control" value="{{ old('nohp_pelatih') }}">
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