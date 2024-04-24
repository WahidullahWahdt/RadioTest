<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/style/addmin.css">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .from{
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
<h1>د کتابونواضافه کول</h1>
    <div class="form">
        <form method="POST" action="/addBook" enctype="multipart/form-data" class="form">
            @csrf
            @method('post')
            <table>
                <tr>
                    <td class="first-culms"><label for="book">دکتاب نوم</label></td>
                    <td class="secound-culms"> <input type="text" name="name" placeholder="دکتاب نوم"></td>
                </tr>
                <tr>
                    <td class="first-culms"><label for="">دکتاب فایل</label></td>
                    <td class="secound-culms"><input type="file" name="book"></td>
                </tr>
                <tr>
                    <td class="first-culms"> <label for="">دکتاب عکس</label></td>
                    <td class="secound-culms"><input type="file" name="image"></td>
                </tr>
            </table>
            <button type="submit" class="from-btn">ذخیره کول</button>
        </form>
    </div>

</body>
</html>