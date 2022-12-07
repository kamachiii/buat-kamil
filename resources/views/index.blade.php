<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<h1, initial-scale=1.0">
    <title>Document</title>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> --}}
</head>
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script> --}}
</body>
    <h1>Begitu Sulid</h1>
    {{-- <h2>Name</h2> --}}
    <form action="{{ 'store' }}" method="POST">
  <label for="Name">Name:</label>
  <br>
  <input type="text" name="Nama" placeholder="Janji ga Sulid"><br><br>
  <label for="">Nis:</label><br>
  <input type="text" name="Nis" placeholder="12108709" maxlength="8" minlength="8"><br><br>
  <label for="">Rayon :</label>
    <select name="Rayon" id="rayon">
    @for ($i = 1; $i <= 3; $i++)
    <option>Cia {{ $i }}</option>
    @endfor
    @for ($i = 1; $i <= 5; $i++)
    <option>Cib{{ $i }}</option>
    @endfor
    @for ($i = 1; $i <= 7; $i++)
    <option>Cic{{ $i }}</option>
    @endfor
    @for ($i = 1; $i <= 6; $i++)
    <option>Cis{{ $i }}</option>
    @endfor
    @for ($i = 1; $i <= 5; $i++)
    <option>Taj{{ $i }}</option>
    @endfor
    @for ($i = 1; $i <=2; $i++)
    <option>Suk{{ $i }}</option>
    @endfor
    @for ($i = 1; $i <=2; $i++)
    <option>Wik{{ $i }}</option>
    @endfor
  </select>
  <input type="submit" value="Submit">
  @csrf
  </form>
  <table class="text-center table table-stripped">
    <tr>
      <th style="width: 100px">No</th>
      <th style="width: 100px;">Id</th>
      <th style="width: 240px;">Nama</th>
      <th style="width: 280px;">Nis</th>
      <th style="width: 280px;">Rayon</th>
      <th style="width: 280px;">Uang</th>
    </tr>
    <?php $i=1; ?>
    @foreach ($data as $datas)
    <tr>
        <td>{{$i++}}</td>
        <td>{{$datas->id}}</td>
        <td>{{$datas->Nama}}</td>
        <td>{{$datas->Nis}}</td>
        <td>{{$datas->Rayon}}</td>
        <td>
            <form action="{{route('deleteActivity',$datas->id)}}" method="post">
                <a href="{{route('indexEditActivity',$datas->id)}}"><button class="btn btn-success" type="button">Edit</button></a>
                <button class="btn btn-danger">delete</button>
                <style></style>
                @csrf
            </form>
        </td>
    </tr>
    @endforeach
  </table>
</body>
</html>