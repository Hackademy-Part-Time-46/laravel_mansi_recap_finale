<x-layout>
    <div class="container mt-5">
        <div class="row g-5">
            <div class="col-md-8">
                <div class="pb-5 ">
                    <h1 class="pb-4 mb-4 fst-italic ">
                        {{ $article->title }}
                    </h1>
                    <hr>

                    <ul>
                        @foreach ($article->categories as $category)
                            <li>{{ $category->name }}</li>
                        @endforeach
                    </ul>

                </div>
            </div>
        </div>
    </div>

</x-layout>
