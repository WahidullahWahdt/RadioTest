<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../asset/style/addmin.css">

</head>
<body>
    <h1>د وینا تغیرول</h1>
    <div class="from">
        <form method="POST" action="/addInfo/{{$info->id}}" enctype="multipart/form-data" >
            @csrf
            @method('PATCH')
            <table>
                <tr>
                    <td class="first-culms"><label for="">موضوع</label></td>
                    <td class="secound-culm"><input type="text" name="name" value="{{$info->name}}" ></td>
                </tr>
                <tr>
                    <td class="first-culms"><label for="">خلص</label><</td>
                    <td class="secound-culm"><textarea name="shortDisc" cols="30" rows="10">{{$info->shortDisc}}</textarea></td>
                </tr>
                <tr>
                    <td class="first-culms"><label for="">پوره تشریح</label></td>
                    <td class="secound-culm"><textarea name="longDisc" cols="30" rows="10" >{{$info->longDisc}}</textarea></td>
                </tr>
                <tr>
                    <td class="first-culms"><label for="">عکس</label></td>
                    <td class="secound-culm"><input type="file" name="image"></td>
                </tr>
            </table>
            <button type="submit" class="from-btn">ذخیره کول</button>
        </form>
    </div>
</body>
</html>