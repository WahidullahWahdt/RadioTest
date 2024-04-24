<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../asset/style/croud.css">
    <style>
        td ,th{
            border:1px solid black;
            padding: 10px;
        }
        .add{
            margin:20px;
            padding: 10px;

        }
        .btn{
            margin: 5px;
        }
    </style>
</head>
<body>
    
    <button class="add"><a href="addInfo/create">نوی اضافه کول</a></button>
    <button class="add"><a href="/">اصلي صفحه</a></button>
    
    <table style="width:90%">
        <tr>
            <th>عکس</th>
            <th>موضوع</th>
            <th>خلص</th>
            <th>پوره تشریح</th>
            <th>عملیه...</th>
        </tr>
        @foreach($info as $info)
        <tr>
            <td><img height="50px" width="65px" src="newFile/{{$info->url}}" alt=""></td>
            <td>{{$info->name}}</td>
            <td>{{$info->shortDisc}}</td>
            <td>{{$info->longDisc}}</td>
            <td>
                <button class="update-btn"><a href="/addInfo/{{$info->id}}/edit" style="color:white;  text-decoration: none;">تغیرول</a></button>
                
                <form action="addInfo/{{$info->id}}" method="post">
                    @csrf 
                    @method("delete")
                    <input type="submit" value="ړنګول" class="delete-btn">
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>