@props(['brand','model','img','price','year','id',])

<div class="col-12 col-md-4 mb-4">
    <div class="card">
        <img src="https://picsum.photos/{{$img}}" class="card-img-top" alt="{{$model}}">
        <div class="card-body">
           <h5 class="card-title">{{$model}}</h5>
           <p class="card-text fs-6 mt-0">{{$brand}}</p>
          <div class="d-flex justify-content-between">
            <span class="card-text">Year: {{$year}}</span>
            <span class="card-text">€ {{$price}}</span>
          </div>
        </div>
        <a href="{{route('cars.show',[$id])}}" class="btn btn-success">Visualizza</a>
        <a href="{{route('cars.edit',[$id])}}" class="btn btn-primary">Modifica</a>
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
                    <form action="{{route('cars.delete',[$id])}}" method="POST">
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

