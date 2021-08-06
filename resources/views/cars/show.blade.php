<x-layout>

    <x-slot name="title">Macchina {{$car->name}}</x-slot>

    <!-- Page Header-->
    <header class="masthead" style="background-image: url('https://picsum.photos/1920/600')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="post-heading">
                        <h2>{{$car->model}}</h2>
                        <h2 class="subheading">Problems look mighty small from 150 miles up</h2>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container px-4 px-lg-5">
        <div class="row justify-content-center py-5">

            <div class="col-6 mb-4">
                <div class="card">
                    <img src="https://picsum.photos/{{$car->img}}" class="card-img-top" alt="{{$car->model}}">
                    <div class="card-body">
                       <h5 class="card-title">{{$car->model}}</h5>
                       <p class="card-text fs-6 mt-0">{{$car->brand}}</p>
                      <div class="d-flex justify-content-between">
                        <span class="card-text">Year: {{$car->year}}</span>
                        <span class="card-text">€ {{$car->price}}</span>
                      </div>
                    </div>
                    <a href="{{route('cars.edit',compact('car'))}}" class="btn btn-primary">Modifica</a>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Elimina
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Attenzione!</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <h5>Sei sicuro di voler eliminare l'auto?</h5>
                                <form action="{{route('cars.delete',compact('car'))}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger w-100">Elimina</button>
                                </form>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>



</x-layout>
