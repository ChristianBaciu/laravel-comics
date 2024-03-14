<header class="bg-primary">
    <div class="container d-flex justify-content-center py-5">

        <div class="option d-flex align-items-center mx-4">
            <figure class="m-0">
                <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="comics">
            </figure>
            <p>digital comics</p> 
        </div>

        <div class="option d-flex align-items-center mx-4">
            <figure class="m-0">
                <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="comics">
            </figure>
            <p>dc merchandise</p> 
        </div>

        <div class="option d-flex align-items-center mx-4">
            <figure class="m-0">
                <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="comics">
            </figure>
            <p>subscription</p> 
        </div>

        <div class="option d-flex align-items-center mx-4">
            <figure class="m-0">
                <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="comics">
            </figure>
            <p>comic shop locator</p> 
        </div>

        <div class="option d-flex align-items-center mx-4">
            <figure class="m-0">
                <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.png') }}" alt="comics">
            </figure>
            <p>dc power visa</p> 
        </div>

    </div>
</header>

<main class="footer-img">
    <div class="voci">
        <div>
            <h4>DC COMICS</h4>
            <p>Characters</p>
            <p>Comics</p>
            <p>Movies</p>
            <p>TV</p>
            <p>Games</p>
            <p>Videos</p>
            <p>News</p>

            <h4>SHOP</h4>

            <p>Shop DC</p>
            <p>Shop DC Collectibles</p>
        </div>

        <div>
            <h4>DC</h4>

            <p>Terms Of Use</p>
            <p>Privacy policy (New)</p>
            <p>Ad Choices</p>
            <p>Advertising</p>
            <p>Jobs</p>
            <p>Subscriptions</p>
            <p>Talent Workshops</p>
            <p>CPSC Certificates</p>
            <p>Shop Help</p>
            <p>Contact Us</p>
            <p></p>

        </div>

        <div>
            <h4>SITES</h4>
            <p>DC</p>
            <p>MAD Magazine</p>
            <p>DC Kids</p>
            <p>DC Universe</p>
            <p>DC Power Visa</p>

        </div>
    </div>
</main>

<footer>
    <div class="container d-flex justify-content-between align-items-center py-3">
        <button class="btn-footer">sign-up now!</button>

        <div class="d-flex align-items-center gap-3">
            <h4 class="text-primary m-0">follow us</h4>
            <figure class="m-0 d-flex gap-3">
                <img src="{{ Vite::asset('resources/img/footer-facebook.png') }}" alt="comics">
                <img src="{{ Vite::asset('resources/img/footer-twitter.png') }}" alt="comics">
                <img src="{{ Vite::asset('resources/img/footer-facebook.png') }}" alt="comics">
                <img src="{{ Vite::asset('resources/img/footer-youtube.png') }}" alt="comics">
                <img src="{{ Vite::asset('resources/img/footer-periscope.png') }}" alt="comics">
            </figure>
        </div>

    </div>
</footer>

<style>
    .container{

        .option{    
            img{
                width: 75px;
            }
        }
        p{
            margin: 0;
            color: white;
            text-transform: uppercase;
        }
    }

    main{
        .voci{
            display: flex;
            div{
                padding: 15px;
            }
        }

        p{
            color: #949595;
            margin: 0;
        }
    }

    footer{
        h4{
            text-transform: uppercase;
        }
    }
</style>