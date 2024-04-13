<div>
    {{-- Do your work, then step back. --}}
    <table class="table-fixed w-full">
        <thead>
            <tr class="bg-indigo-600 text-white">
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Nombre</th>
            </tr>
        <thead>
        <tbody>
            @foreach($personas as $persona)
            <tr>
                <td class="border px-4 py-2">{{$persona->id}}</td>
                <td class="border px-4 py-2">{{$persona->nombre}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

