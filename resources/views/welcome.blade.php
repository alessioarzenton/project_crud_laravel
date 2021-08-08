<x-layout>

    <!-- Page Header-->
    <header class="masthead" style="background-image: url('assets/img/home-bg.jpg')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="site-heading">
                       <h1>Project Crud</h1>
                       <span class="subheading">A Project Crud by Alessio</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
   <!-- Main Content-->
    <div class="container px-4 px-lg-5">
        <div class="row justify-content-center">
               <h1>Articles</h1>

                @foreach ($articles as $article)

                <div class="col-6">
                    <div class="card mb-5">
                        <img src="https://picsum.photos/{{$article->img}}" class="card-img-top" alt="{{$article->name}}">
                        <div class="card-body d-flex justify-content-between align-items-center">
                        <h5 class="card-title p-0">{{$article->name}}</h5>
                        <a href="{{route('articles.show',compact('article'))}}" class="btn btn-success">Visualizza</a>
                        </div>
                    </div>
                </div>

                @endforeach

        </div>
        <div class="row justify-content-center">
            <h1>Cars</h1>

            @foreach ($cars as $car)

            <div class="col-6">
                <div class="card mb-5">
                    <img src="https://picsum.photos/{{$car->img}}" class="card-img-top" alt="{{$car->model}}">
                    <div class="card-body">
                    <h5 class="card-title">{{$car->model}}</h5>
                    <p class="card-text fs-6 mt-0">{{$car->brand}}</p>
                    <div class="d-flex justify-content-between">
                        <span class="card-text">Year: {{$car->year}}</span>
                        <span class="card-text">€ {{$car->price}}</span>
                    </div>
                    </div>
                    <a href="{{route('cars.show',compact('car'))}}" class="btn btn-success">Visualizza</a>
                </div>
            </div>

            @endforeach

        </div>
    </div>

</x-layout>
