<x-layout>
    <div class="px-4 py-5 mb-5 rounded-3 px-md-5">

        <div class="container mt-5">
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <div class="gap-2 align-middle d-flex justify-content-between">
                <h3>Elenco Articoli inseriti</h3>

                <a href="{{ route('categories.create') }}" class="btn btn-success me-md-2">
                    Crea Nuovo Articolo
                </a>
            </div>
            <table class="table mt-2 border">
                <thead>
                    <tr>
                        <th scope="col">#</th>

                        <th scope="col">Titolo</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <th scope="row">#{{ $category->id }}</th>

                            <td>{{ $category->name }}</td>
                            <td>

                                <div class="gap-2 d-grid d-md-flex justify-content-md-end">

                                    <a href="{{ route('categories.show', $category) }}" class="btn btn-primary me-md-2">
                                        Visualizza
                                    </a>
                                    <a href="{{ route('categories.edit', $category) }}" class="btn btn-warning me-md-2">
                                        Modifica
                                    </a>
                                    <form action="{{ route('categories.destroy', $category) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger me-md-2">Elimina</button>

                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</x-layout>
