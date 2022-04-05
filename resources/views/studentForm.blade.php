<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
</head>
<body>

  <form action="{{isset($data['id']) ? '/update/'.$data['id']:'/save'}}" method="post">
    @csrf
    <label for="name">Name</label>
    <input type="text" name="name" id="name" value="  {{$data['name'] ?? ''}}" >
    <label for="marks">Marks</label>
    <input type="text" name="marks" id="marks"  value="  {{$data['marks'] ?? ''}}">
    <label for="subject">Subject</label>
    <input type="text" name="subject" id="subject"  value="  {{$data['subject'] ?? ''}}">
    <label for="class">Class</label>
    <input type="text" name="class" id="class"  value="  {{$data['class'] ?? ''}}">
    <input type="submit" value="Submit" >
  </form>

</body>
</html>
