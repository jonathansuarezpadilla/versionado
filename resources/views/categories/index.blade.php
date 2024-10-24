@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold">Lista de Categorías</h1>
            <a href="{{ route('categories.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Añadir Categoría</a>
        </div>

        @if ($categories->isEmpty())
            <p class="text-gray-700">No hay categorías disponibles.</p>
        @else
            <table class="min-w-full bg-white rounded-lg shadow overflow-hidden">
                <thead class="bg-gray-200">
                <tr>
                    <th class="py-2 px-4 text-left">Nombre</th>
                    <th class="py-2 px-4 text-left">Descripción</th>
                    <th class="py-2 px-4 text-center">Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($categories as $category)
                    <tr class="border-b">
                        <td class="py-2 px-4">{{ $category->name }}</td>
                        <td class="py-2 px-4">{{ $category->description }}</td>
                        <td class="py-2 px-4 text-center">
                            <a href="{{ route('categories.edit', $category->id) }}" class="text-blue-500 hover:underline">Editar</a>
                            <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="inline-block ml-2">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:underline">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>

