<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            margin: 0 auto;
            border-collapse: collapse;
            border: 1px solid black;
        }

        td,th {
            border: 1px solid black;
            text-align: center;
            vertical-align: center;
            min-width: 100px;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <td>姓名</td>
            <td>{{$contact->name}}</td>
        </tr>
        <tr>
            <td>電話</td>
            <td>{{$contact->phone}}</td>
        </tr>
        <tr>
            <td>信箱</td>
            <td>{{$contact->email}}</td>
        </tr>
        <tr>
            <td>內容</td>
            <td>{{$contact->content}}</td>
        </tr>
    </table>
</body>

</html>