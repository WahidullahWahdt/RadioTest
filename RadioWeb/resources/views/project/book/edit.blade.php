<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../asset/style/addmin.css">
</head>
<body>
    <div class="from">
        <form method="POST" action="/addBook/{{$book->id}}" enctype="multipart/form-data" >
            @csrf
            @method('PATCH')
                <table>
                    <tr>
                        <td class="first-culms"><label>دکتاب نوم</label></td>
                        <td class="secound-culm"><input type="text" name="name" value="{{$book->name}}" ></td>
                    </tr>
                    <tr>
                        <td class="first-culms"> <label for="">دکتاب فایل</label> </td>
                        <td class="secound-culm"> <input type="file" name="book"></td>
                    </tr>
                    <tr>
                        <td class="first-culms"><label for="">دکتاب عکس</label></td>
                        <td class="secound-culm"><input type="file" name="image"></td>
                    </tr>
                </table>
            
            <button type="submit" class="from-btn">ذخیره کول</button>
        </form>
    </div>
</body>
</html>