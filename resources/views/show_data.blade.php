<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student</title>
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->

</head>
<body>
@if($auth==1)
<a href="/add/student_form"><button>ADD</button></a>
@endif
<table>
  <tr>
    <th>Name</th>
    <th>Marks</th>
    <th>Subject</th>
    <th>Class</th>
    @if($auth==1)
    <th colspan="2">Action</th>
    @endif
  </tr>

  @foreach ($data as $info)
    <tr>
      
      <td>{{$info->name}}</td>
      <td>{{$info->marks}}</td>
      <td>{{$info->subject}}</td>
      <td>{{$info->class}}</td>
      @if($auth==1)
      <td><a href="/edit/student_form/{{$info->id}}">EDIT</a></td>
     

  

      <td><a href="/delete/{{$info->id}}">DELETE</a></td>
      @endif

    </tr>

  @endforeach
</table>
@if($data->onFirstpage())
Previous
@else
<a href="{{$data->previousPageUrl()}}">Previous</a>
@endif

@for ($i = 1; $i <= ceil($data->total()/$number); $i++)
   <a href="{{$data->url($i)}}">{{$i}}</a>
@endfor


@if($data->hasMorePages())
<a href="{{$data->nextPageUrl()}}">Next</a>
@else
Next
@endif
<br>



<!-- {{$data->links("pagination::bootstrap-4")}}


<br>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 -->



<br>
</body>
</html>