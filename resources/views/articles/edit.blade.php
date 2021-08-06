<x-layout>
    <x-slot name="title">Edit article</x-slot>

        <!-- Page Header-->
        <header class="masthead" style="background-image: url('https://picsum.photos/1920/600')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="page-heading">
                            <h2>Edit article {{$article->name}}</h2>
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

                            <form id="contactForm" action="{{route('articles.update', compact('article'))}}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-floating">
                                    <input name="name" value="{{$article->name}}" class="form-control @error('name')
                                    is-invalid
                                    @enderror" id="name" type="text" placeholder="Enter your name..." />
                                    <label for="name">Name</label>
                                </div>
                                <div class="form-floating">
                                    <input name="img" value="{{$article->img}}" class="form-control @error('img')
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
