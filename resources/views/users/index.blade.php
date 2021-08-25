<html>
    Titulo: {{ $parametro }}
    <div><a href=" {{ route("users.create") }}">Nuevo</a></div>
    <table>
        <thead>
            <tr>
                <th>
                    Nombre
                </th>
                <th>
                    Correo electronico
                </th>
            </tr>
        </thead>
        </tbody>
            @foreach($users as $user)
            <tr>
                <td> {{ $user->name }} </td>
                <td> {{ $user->email }} </td>
            </tr>
            @endforeach
    </table>
</html>