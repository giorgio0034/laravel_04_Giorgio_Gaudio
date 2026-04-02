
<x-layout>

<div class="container-fluid bg-body-secondary vh-100 bg-background">
    <div class="row justify-content-center align-items-center h-100">
        <div class="col-12">
            <h1 class="text-center display-4 title my-5" >
                Offriamo questi servizi
            </h1>



<div class="container-fluid">
<div class="row justify-content-center align-items-center mb-5">


<div class="container my-5">
    <div class="row">
        @foreach($cards as $card)
            <x-card :title="$card['title']">
                {{ $card['content'] }}
            </x-card>
        @endforeach
    </div>
</div>







        </div>
    </div>
</div>

</x-layout>
