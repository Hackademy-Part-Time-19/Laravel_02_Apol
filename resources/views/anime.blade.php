<x-layout>
<div class="container">
<div class="row">
<div class="col-lg-12">
    <h1>Lista Generi anime</h1>
<ul>
  @foreach ($dati as $anime)
<li><a style="text-decoration: none; color: black" href="{{route('genre.anime',$anime['mal_id'])}}">
    {{$anime['name']}}
</a>
</li>
  @endforeach
</ul>
</div>
</div>
</div>
</x-layout>