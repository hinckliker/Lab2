<!DOCTYPE html>
<html>
    <head>

    </head>

    <body>
    <div>
        <form>
            <h2>Фильтры для поиска </h2>
            <label for="isBlocked">Заблокирован</label>
            <input type="checkbox" name="blocked" id = "blocked"></input>
            <input type="email" name="email" id = "mail" placeholder = "эл.почта "></input>
            <input type="text" name="phone" id = "phone" placeholder = "телефон "></input>
            <input type="text" name="name" id = "name" placeholder = " имя "></input>
            <input type="text" name="surname" id = "surname" placeholder = " фамилию "></input>
            <button type="submit">Поиск</button>
            <a href="http://u8193232-lab1.local/customers">Все покупатели</a>
        </form>
    </div>
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
                @foreach($customers as $item)
                    <tr>
                        <td>
                            <a href="http://u8193232-lab1.local/customers/{{$item->id}}">{{$item->id}}
                        </td>
                        <td>
                            {{$item->name}}
                        </td>
                        <td>
                            {{$item->surname}}
                        </td>
                        <td>
                            @if($item->blocked)
                                Заблокирован
                            @else
                                Доступен
                            @endif
                        </td>
                        <td>
                            {{$item->phone}}
                        </td>
                        <td>
                            {{$item->mail}}
                        </td>
                        <td>
                            {{$item->created_at}}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </body>

</html>
