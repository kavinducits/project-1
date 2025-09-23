<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>{{ $title }}</h1>

    <h2>Student List</h2>
    <ul>
        @foreach($students as $student)
             <li><a href='/registration/{{$student['name']}}'>{{ $student['name'] }}, Age: {{ $student['age'] }}, Address: {{ $student['address'] }}</a></li>
        @endforeach
    </ul>
</body>
</html>