<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <title>Document</title>
</head>
<body>

    <h2>List Mahasiswa Kelas {{$kelas}}</h2>
    <ol>
        @foreach ($data as $nama)
            <li>{{$nama}}</li>
        @endforeach
    </ol>

    {{-- <h2>List Mahasiswa Kelas <?php echo $kelas?></h2>
    <ol>
        <?php
            foreach ($data as $nama) {
                echo "<li>$nama</li>";
            }

        ?>
    </ol> --}}
            {{-- <li>Erix</li>
        <li>Praditya</li>
        <li>rix</li>
        <li>Raditya</li>
        <li>Pra</li> --}}
</body>
</html>
