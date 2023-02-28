@extends('AppLayout')

@section('content')
    <div class="flex items-center justify-center h-screen">
        <form class="bg-white shadow-md max-w-sm px-8 pt-6 pb-8 mb-4 rounded-lg" action="{{ route('updateUser') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <h2 class="text-gray-700 font-bold text-2xl mb-3 text-center">Actualizar Usuario</h2>

            <input type="hidden" name="id" value="{{ $user->id }}">
            <img src="{{ $user->profilePicture }}" alt="Profile Picture" class="w-32 h-32 rounded-full mx-auto">
            <div class="mb-4 mt-6">
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="username"
                    type="text"
                    name="fullName"
                    value="{{ $user->fullName }}"
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
                    value="{{ $user->email }}"
                    placeholder="Email"
                    required
                >
            </div>
            <div class="mb-6">
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="date"
                    type="date"
                    value="{{ $user->dateBirth }}"
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
                    value="{{ $user->profilePicture }}"
                    accept="image/*"
                    required
                >
            </div>
            <div class="flex items-center justify-between">
                <input
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-11 rounded focus:outline-none focus:shadow-outline cursor-pointer"
                    type="submit"
                    value="Actualizar"
                >
                <button type="reset" class="bg-rose-500 hover:bg-rose-700 text-white font-bold py-2 px-4 rounded">
                    Limpiar
                </button>
            </div>
        </form>
    </div>
@endsection
