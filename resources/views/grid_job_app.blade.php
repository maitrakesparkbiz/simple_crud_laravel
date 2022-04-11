<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Grid Job Application</title>
</head>
<body>
  <table>
    <tr>
      <th>Name</th>
      <th>Designation</th>
      <th>Email</th>
      <th>Phone Number</th>
      <th>Zip Code</th>
      <th colspan="2"></th>
    </tr>
      @foreach($basic as $data)
      <tr>
        <td>{{$data->fname}}{{$data->lname}}</td>
        <td>{{$data->designation}}</td>
        <td>{{$data->email}}</td>
        <td>{{$data->phone}}</td>
        <td>{{$data->zip}}</td>
        <td><a href="/edit/job_app/{{$data->id}}">EDIT</a></td>
         <td><a href="/delete/job_app/{{$data->id}}">DELETE</a></td>
        </tr>
      @endforeach

  </table>
</body>
</html>