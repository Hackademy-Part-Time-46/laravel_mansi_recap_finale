<x-layout>
    <div class="px-4 mb-5 px-md-5">
        <div class="row gx-5 justify-content-center ">
            <div class="p-5 border rounded col-lg-8 col-xl-6">

                <form action="{{ route('categories.update', $category) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3 form-floating">
                        <input class="form-control" id="name" value="{{ $category->name }}" name="name"
                            type="text">
                        <label for="title">Titolo Articolo</label>
                        @error('title')
                            {{ $message }}
                        @enderror
                    </div>



                    <div class="d-grid">
                        <button class="btn btn-primary btn-lg" type="submit">Aggiorna</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-layout>
