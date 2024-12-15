<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Them moi sinh vien</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        input{
            border-radius: 0 !important
        }
    </style>
</head>
<body>
    <section class="container">
        <form action="{{route('Nvksinhvien.nvkCreateSubmit')}}" method="post">
            @csrf
        <div class="card">
            <div class="card-header">
                <h1>Them moi sinh vien</h1>
            </div>
            <div class="card-body">
                <div class="mb-3 row">
                    <label for="nvkMasv" class="col-sm-2 col-form-label">Ma sinh vien</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nvkMasv" name="nvkMasv">
                        </div>
                </div>
                <div class="mb-3 row">
                    <label for="nvkHosv" class="col-sm-2 col-form-label">Ho sinh vien</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nvkHosv" name="nvkHosv">
                        </div>
                </div>
                <div class="mb-3 row">
                    <label for="nvkTensv" class="col-sm-2 col-form-label">Ten sinh vien</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nvkTensv" name="nvkTensv">
                        </div>
                </div>
                <div class="mb-3 row">
                    <label for="nvkPhai" class="col-sm-2 col-form-label">Gioi tinh</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nvkPhai" name="nvkPhai">
                        </div>
                </div>
                <div class="mb-3 row">
                    <label for="nvkNgaysinh" class="col-sm-2 col-form-label">Ngay sinh</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="nvkNgaysinh" name="nvkNgaysinh">
                        </div>
                </div>
                <div class="mb-3 row">
                    <label for="nvkNoisinh" class="col-sm-2 col-form-label">Noi sinh</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nvkNoisinh" name="nvkNoisinh">
                        </div>
                </div>
                <div class="mb-3 row">
                    <label for="nvkMakh" class="col-sm-2 col-form-label">Ma khoa</label>
                        <div class="col-sm-10">
                           <select name="nvkMakh" id="nvkMakh">
                            <option value="">--Chon khoa--</option>
                            <option value="AV">Anh Van</option>
                            <option value="TH">Tin Hoc</option>
                            <option value="TR">Triet Hoc</option>
                           </select>
                        </div>
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-primary">Them moi</button>
                <a href="/nvk-sinhviens" class="btn btn-secondary">Quay lai</a>
            </div>
        </div>
        </form>
    </section>
</body>
</html>