<x-layout>


    <h1>Genere adnime:</h1>


    <div class="container">
        <div class="row">

            @foreach ($anime as $anime)
                <div class="col-lg-3">
                    <div style="border: 1px;border:black 1px solid;margin-top:23px" class="card" style="width: 18rem;">
                        <img style="height: 40vh " src="{{ $anime['images']['jpg']['large_image_url'] }}"
                            class="card-img-top" alt="...">
                        <h6 style="margin-top: 5px; margin-left: 15px;color:rgb(194, 36, 36)">Episode:
                            {{ $anime['episodes'] }}</h6>
                        <div style="height: 250px; " class="card-body">
                            <h5 style="font-size: 20px;font-weight: 700;margin-bottom: 0px" class="card-title">
                                {{ $anime['title'] }}</h5>
                            <p style="margin-top: 20px; overflow-y:scroll; height: 130px;margin-top:0px"
                                class="card-text">{{ $anime['synopsis'] }}</p>
                        <a href="{{ route('anime.singolo', $anime['mal_id']) }}" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
</x-layout>
