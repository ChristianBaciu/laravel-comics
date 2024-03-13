<header class="bg-warning">
    <div class="container">
        <div class="position-relative">
            <button class="btn-blue position-absolute" style="top: -27px;">current series</button>
        </div>

        <div class="pt-5">
            <div class="row">
                @foreach($comics as $element)
                    <div class="serie col-2 bg-danger">
                        <figure class="m-0">
                            <img src="{{ $element['thumb'] }}" width="100" alt="img">
                        </figure>
                        <p>{{ $element['title'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="d-flex justify-content-center py-5">
            <button class="btn-blue">load more</button>
        </div>


    </div>
</header>
