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

<div class="container">
            
            <form method="POST" action="post_submit">
            @csrf
                <table>
                    <tr> 
<td> Post </td>
<td><input type="textbox" name="yourpost" required/></td>
        </tr>

        <tr> 
<td> Submit </td>
<td><input type="submit" name="Submit"/>



<td> 
<h4> </h4>
 </td>

        </tr>
        </table>
        </div>
<!--{{session('msg')}}-->
        <div class="container1">
<table>
<tr>

<td>Id</td>
<td>Post</td>
<td> Created on </td>
<td> Action </td>
        </tr>
        @foreach($postArr as $displaypost)
        <tr>

<td>{{$displaypost->id}}</td>
<td>{{$displaypost->Post}}</td>
<td> {{$displaypost->created_at}} </td>
<td> <a href="post_delete/{{$displaypost->id}}"> Delete </a> </td>
<td> <a href="post_edit/{{$displaypost->id}}"> Edit </a> </td>
        </tr>
        @endforeach

        </table>

        </div>
</body>
</html>