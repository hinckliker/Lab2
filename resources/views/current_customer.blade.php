<!DOCTYPE html>
<html>
<head>

</head>

<body>
<div>
    <table class="table">
        <thead>
        <th>Идентификатор</th>
        <th>Имя</th>
        <th>Фамилия</th>
        <th>Заблокирован</th>
        <th>Телефон</th>
        <th>Email</th>
        <th>Дата и время регистрации</th>
        </thead>
        <tbody>
            <tr>
                @foreach($customers as $customer)
                <td>

                    {{$customer->id}}
                </td>
                <td>
                    {{$customer->name}}
                </td>
                <td>
                    {{$customer->surname}}
                </td>
                <td>
                    @if($customer->blocked)
                        Заблокирован
                    @else
                        Доступен
                    @endif
                </td>
                <td>
                    {{$customer->phone}}
                </td>
                <td>
                    {{$customer->mail}}
                </td>
                <td>
                    {{$customer->created_at}}
                </td>
                @endforeach
            </tr>
        </tbody>
    </table>


</div>
<div>
    <table class="table">
        <h2>Адреса покупателя</h2>
        <thead>
        <tr>
            <th>Название</th>
            <th>Город</th>
            <th>Улица/Микрорайон</th>
            <th>Дом</th>
            <th>Этаж</th>
            <th>Код домофона</th>
            <th>Дата и время добавления</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($addreses as $addres)
            <tr>
                <td>{{ $addres->name }}</td>
                <td>{{ $addres->town }}</td>
                <td>{{ $addres->street }}</td>
                <td>{{ $addres->house }}</td>
                <td>{{ $addres->floor }}</td>
                <td>{{ $addres->password }}</td>
                <td>{{ $addres->created_at }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

</body>

</html>
