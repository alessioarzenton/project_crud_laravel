<x-layout>
    <x-slot name="title">All articles</x-slot>

    <!-- Page Header-->
    <header class="masthead" style="background-image: url('https://picsum.photos/1920/600')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="post-heading">
                        <h2>All articles</h2>
                        <h2 class="subheading">Problems look mighty small from 150 miles up</h2>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container px-4 px-lg-5">
        <div class="row justify-content-center py-5">


            @foreach ($articles as $article)

                <x-cardArticle
                name="{{$article->name}}"
                img="{{$article->img}}"
                id="{{$article->id}}"
                />

            @endforeach

        </div>
    </div>



    </x-layout>
