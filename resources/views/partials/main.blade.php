<header class="bg-dark">
    <div class="container">
        <div class="position-relative">
            <button class="btn-blue position-absolute" style="top: -27px;">current series</button>
        </div>

        <div class="pt-5">
            <div class="row">
                @foreach($comics as $element)
                    <div class="serie col-2">
                        <figure class="m-0">
                            <img src="{{ $element['thumb'] }}" alt="img">
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


<style>
    .serie{
        img{
            width: 100%;
            height: 300px;
        }
    }
</style>