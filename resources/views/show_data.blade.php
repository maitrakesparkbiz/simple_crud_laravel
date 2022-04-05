<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student</title>
</head>
<body>
<a href="/add/student_form"><button>ADD</button></a>
<table>
  <tr>
    <th>Name</th>
    <th>Marks</th>
    <th>Subject</th>
    <th>Class</th>
    <th colspan="2">Action</th>
  </tr>
  @foreach ($data as $data)
    <tr>
      <td>{{$data->name}}</td>
      <td>{{$data->marks}}</td>
      <td>{{$data->subject}}</td>
      <td>{{$data->class}}</td>
      <td><a href="/edit/student_form/{{$data->id}}">EDIT</a></td>
      <td><a href="/delete/{{$data->id}}">DELETE</a></td>


    </tr>

  @endforeach
</table>
<br>
</body>
</html>