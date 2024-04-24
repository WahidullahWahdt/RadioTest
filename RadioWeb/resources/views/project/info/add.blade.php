<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../asset/style/addmin.css">
</head>
<body>
    <h1>د ویناوواضافه کول</h1>
    <div class="from">
        <form method="POST" action="/addInfo" enctype="multipart/form-data">
            @csrf
            @method('post')
            <table>
                <tr>
                    <td class="first-culms"><label for="">موضوع</label></td>
                    <td class="secound-culms"><input type="text" name="name" placeholder="Title"></td>
                </tr>
                <tr>
                    <td class="first-culms"><label for="">خلص</label><br></td>
                    <td class="secound-culms">  <textarea name="shortDisc" cols="5" rows="2" placeholder="Type Your Message..." ></textarea></td>
                </tr>
                <tr>
                    <td class="first-culms"><label for="">پوره تشریح</label></td>
                    <td class="secound-culms"> <textarea name="longDisc" cols="30" rows="10" placeholder="Type Your Message..." ></textarea></td>
                </tr>
                <tr>
                    <td class="first-culms"><label for="">عکس</label></td>
                    <td class="secound-culms"><input type="file" name="image"></td>
                </tr>
            </table>
            <button type="submit" class="from-btn">ذخیره کول</button>
        </form>
    </div>

</body>
</html>
