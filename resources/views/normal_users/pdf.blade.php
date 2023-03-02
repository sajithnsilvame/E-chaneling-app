<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
       
    <div>
        <h3>prescription ID: {{$prescription->id}}</h3>
        <h3>Doctor's name: {{$prescription->doc_name}}</h3>
         <h3>Patient's Name: {{$prescription->name}}</h3>
          <h3>Patient's contact: {{$prescription->contact}}</h3>
           <h3>Appointment date: {{$prescription->date}}</h3>
    </div>
</body>
</html>