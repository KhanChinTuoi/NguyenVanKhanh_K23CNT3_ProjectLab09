<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>danh sach sinh vien</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container">
        <h1>danh sach sinh vien</h1>
        <div class="card">
            <div class="card-header">
                <h1>danh sach sinh vien</h1>
            </div>
            <div class="card-body">
                <table class="table table-border">     
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Ma Sinh Vien</th>
                            <th>Ho Sinh Vien</th>
                            <th>Ten Sinh Vien</th>
                            <th>Gioi tinh</th>
                            <th>Ngay sinh</th>
                            <th>Noi sinh</th>
                            <th>Ma khoa</th>
                            <th>Hoc bong</th>
                            <th>Chuc nang</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $stt=0;
                        @endphp
                        @foreach ($nvksinhviens as $item)
                            @php
                                $stt++;
                            @endphp
                            <td class="text-center">{{$stt}}</td>
                            <td>{{$item->nvkMasv}}</td>
                            <td>{{$item->nvkHosv}}</td>
                            <td>{{$item->nvkTensv}}</td>
                            <td>{{$item->nvkPhai}}</td>
                            <td>{{$item->nvkNgaysinh}}</td>
                            <td>{{$item->nvkNoisinh}}</td>
                            <td>{{$item->nvkMakh}}</td>
                            <td class="text-right">{{$item->nvkHocbong}}</td>
                            <td class="text-center">
                                View / edit / delete
                            </td>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <h3>tong so sinh vien: {{$nvksinhviens->count()}}</h3>
                <a href="nvk-sinhviens/create" class="btn btn-primary">Them moi</a>
            </div>
        </div>
    </section>
</body>
</html>