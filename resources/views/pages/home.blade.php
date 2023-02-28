@extends('AppLayout')

@section('title', 'CRUD')

@section('content')
    <div class="p-3">
        <h1 class="text-4xl font-bold text-gray-700 ml-24">CRUD Laravel</h1>
        <div class="grid grid-cols-2 mt-6 px-24">
            <aside class="col-span-1">
                <div class="w-full max-w-xs">
                    <form class="bg-white shadow-md px-8 pt-6 pb-8 mb-4 rounded-lg" action="{{ route('registerUser') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <h2 class="text-gray-700 font-bold text-2xl mb-3">Crear Usuario</h2>
                        <div class="mb-4">
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="username"
                                type="text"
                                name="fullName"
                                placeholder="Nombre"
                                required
                            >
                        </div>
                        <div class="mb-6">
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="email"
                                name="email"
                                type="email"
                                placeholder="Email"
                                required
                            >
                        </div>
                        <div class="mb-6">
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="date"
                                type="date"
                                name="dateBirth"
                                required
                            >
                        </div>
                        <div class="mb-6">
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="file"
                                type="file"
                                name="profilePicture"
                                placeholder="Seleccionar Imagen"
                                accept="image/*"
                                required
                            >
                        </div>
                        <div class="flex items-center justify-between">
                            <input
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-11 rounded focus:outline-none focus:shadow-outline cursor-pointer"
                                type="submit"
                                value="Crear"
                            >
                            <button type="reset" class="bg-rose-500 hover:bg-rose-700 text-white font-bold py-2 px-4 rounded">
                                Limpiar
                            </button>
                        </div>
                    </form>
                    @if (session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                            <strong class="font-bold">!Registrado con exito!</strong>
                            <span class="block sm:inline">{{ session('status') }}</span>
                        </div>
                    @elseif (session('error'))
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                            <strong class="font-bold">!Error al registrar!</strong>
                            <span class="block sm:inline">{{ session('error') }}</span>
                        </div>
                    @endif
                </div>
            </aside>
            <main class="col-span-1">
                <div class="flex items-center justify-center">
                    <div class="col-span-12">
                        <div class="overflow-auto lg:overflow-visible">
                            <h2 class="text-gray-700 font-bold text-2xl mb-3">Listado de Usuarios</h2>
                            <div class="py-6">
                                <div class="max-w-xl">
                                    <div class="flex space-x-4">
                                        <div class="flex rounded-md overflow-hidden w-full">
                                            <input id="filterEmail" oninput="filterEmail()" type="text" class="border w-full rounded-md rounded-r-none" />
                                            <button type="reset" class="bg-indigo-600 text-white px-6 text-lg font-semibold py-2 rounded-r-md">Go</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <table id="tableUser" class="table text-gray-400 border-separate space-y-6 text-sm">
                                <thead class="bg-gray-800 text-gray-500">
                                    <tr>
                                        <th class="p-3 text-white">Img Perfil</th>
                                        <th class="p-3 text-white">ID</th>
                                        <th class="p-3 text-white">Nombre</th>
                                        <th class="p-3 text-white">Email</th>
                                        <th class="p-3 text-white">Nacimiento</th>
                                        <th class="p-3 text-white">Opciones</th>
                                    </tr>
                                </thead>
                                @foreach ($usersData as $user)
                                    <tbody>
                                        <tr class="bg-gray-300">
                                            <td class="p-3">
                                                <div class="flex align-items-center">
                                                    <img src="{{ $user->profilePicture }}" alt="profile" class="w-10 h-10 rounded-full">
                                                </div>
                                            </td>
                                            <td class="p-3 text-gray-700">
                                                {{ $user->id }}
                                            </td>
                                            <td class="p-3 font-bold text-gray-700">
                                                {{ $user->fullName }}
                                            </td>
                                            <td class="p-3 font-bold text-gray-700">
                                                {{ $user->email }}
                                            </td>
                                            <td class="p-3 text-gray-700">
                                                {{ $user->dateBirth }}
                                            </td>
                                            <td class="p-3 text-gray-700 text-center">
                                                <form action="{{ route('redirectEdit', $user->id) }}" method="POST">
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold p-1 px-4 rounded focus:outline-none focus:shadow-outline m-4">
                                                        Editar
                                                    </button>
                                                </form>
                                                <form action="{{ route('deleteUser', $user->id) }}" method="POST">
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="bg-rose-500 hover:bg-rose-700 text-white font-bold p-1 px-2 rounded focus:outline-none focus:shadow-outline m-4">
                                                        Eliminar
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection
