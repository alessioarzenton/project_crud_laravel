<x-layout>
    <x-slot name="title">Edit car</x-slot>

        <!-- Page Header-->
        <header class="masthead" style="background-image: url('https://picsum.photos/1920/600')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="page-heading">
                            <h2>Edit a car</h2>
                            <span class="subheading">Have questions? I have answers.</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <main class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="my-5">

                            @if (session('message'))
                                    <div class="alert alert-success" id="submitSuccessMessage">
                                        <div class="text-center mb-3">
                                            <div class="fw-bolder">{{session('message')}}</div>
                                        </div>
                                    </div>
                                @endif

                            <form id="contactForm" action="{{route('cars.update', compact('car'))}}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-floating">
                                    <input name="brand" value="{{$car->brand}}" class="form-control @error('brand')
                                    is-invalid
                                    @enderror" id="brand" type="text" placeholder="Enter a brand..." />
                                    <label for="brand">Brand</label>
                                </div>
                                <div class="form-floating">
                                    <input name="model" value="{{$car->model}}" class="form-control @error('model')
                                    is-invalid
                                    @enderror" id="model" type="text" placeholder="Enter a model..." />
                                    <label for="model">Model</label>
                                </div>
                                <div class="form-floating">
                                    <input name="year" value="{{$car->year}}" class="form-control @error('year')
                                    is-invalid
                                    @enderror" id="year" type="number" placeholder="Enter a year..." />
                                    <label for="year">Year</label>
                                </div>
                                <div class="form-floating">
                                    <input name="price" value="{{$car->price}}" class="form-control @error('price')
                                    is-invalid
                                    @enderror" id="price" type="number" placeholder="Enter a price..." />
                                    <label for="price">Price</label>
                                </div>
                                <div class="form-floating">
                                    <input name="img" value="{{$car->img}}" class="form-control @error('img')
                                    is-invalid
                                    @enderror" id="img" type="text" placeholder="Enter the sizes, es: 300/150..."/>
                                    <label for="img">Image size</label>
                                </div>
                                <br />

                                {{-- @if ($errors->any())
                                    @foreach ($errors->all() as $error)
                                        <div class="alert alert-danger" id="submitErrorMessage">
                                            <div class="text-center text-danger mb-3">{{$error}}</div>
                                        </div>
                                    @endforeach
                                @endif --}}

                                <!-- Submit Button-->
                                <button class="btn btn-primary text-uppercase" id="submitButton" type="submit">Edit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>

    </x-layout>
