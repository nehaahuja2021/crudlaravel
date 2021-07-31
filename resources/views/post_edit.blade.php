<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>

<link rel="stylesheet" href="assets/css/style.css">
<title>Title</title>
<style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
</head>
<body>

<div class="container3">
            
            <form method="POST" action="post_update">
            @csrf
                <table>
                    <tr> 
<td> Post </td>
<td><input type="textbox" name="yourpost1" required value=" @foreach ($postArr as $edit)

{{$edit->Post}} @endforeach"/></td>
        </tr>

        <tr> 
<td> Submit </td>
<td><input type="submit" name="Submit"/>
</td>
        </tr>
        </table>
        </div>
<!--{{session('msg')}}-->
        
</body>
</html>