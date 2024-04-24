<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../asset/style/croud.css">
</head>
<body>
    <div>
        <h1>دکتابونو لیست</h1>
    <table >
        <tr>
            <th>دکتاب نوم</th>
            <th>دکتاب عکس</th>
            
            <th>عملیه...</th>
        </tr>
        @foreach($book as $book)
        <tr>
            <td>{{$book->name}}</td>
            <td><img height="160px" width="130px" src="books/{{$book->url}}" alt=""></td>

            <td>
                <button class="update-btn"><a href="/addBook/{{$book->id}}/edit"  style="color:white;  text-decoration: none;">تغیرول</a></button>
                
                <form action="addBook/{{$book->id}}" method="post" >
                    @csrf 
                    @method("delete")
                    <input type="submit" value="ړنګول" class="delete-btn">
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <button class="add"><a href="addBook/create">کتاب اضافه کول</a></button>
    <button class="add"><a href="/">اصلي صفحه</a></button>
    </div>
</body>
</html>