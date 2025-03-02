<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th style="border: 1px black solid;">Actividad</th>
                <th style="border: 1px black solid;">costo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($nota->remision_trabajos as $actividad)
                <tr>
                    <td>{{ $actividad->trabajo->title }}</td>
                    <td>${{ number_format($actividad->precio,2)}}</td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td></td>
                <td>Total: ${{ number_format($total,2) }}</td>
            </tr>
        </tfoot>
    </table>
</body>
</html>