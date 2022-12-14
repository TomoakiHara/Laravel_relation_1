<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  @extends('layouts.default')
<style>
th {
  background-color: #289ADC;
  color: white;
  padding: 5px 40px;
}
tr:nth-child(odd) td{
  background-color: #FFFFFF;
}
td {
  padding: 25px 40px;
  background-color: #EEEEEE;
  text-align: center;
}
</style>
</head>
<body>
@section('title', 'index.blade.php')

@section('content')
<table>
  <tr>
    <th>Data</th>
  </tr>
  @foreach ($authors as $author)
  <tr>
    <td>
      {{$author->getDetail()}}
    </td>
  </tr>
  @endforeach
</table>
{{$authors->links()}}
@endsection
</body>
</html>