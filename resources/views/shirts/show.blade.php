@extends ('layouts.app')

@section('title')AGC | {{$shirt->name}}
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="card mb-3" style="max-width: 540px;">
            <h4 class="card-header ">
                Shirt
            </h4>
            <div class="card border-primary mb-3" style="max-width: 500px;">
                <div class="row ceg-0">
                    <div class="col-md-4">
                    @isset($shirt->shirt_image)
                        <img src="{{asset('storage/'.$shirt->shirt_image)}}" class="card-img-top" alt="{{$shirt->shirt_image}}">
                    @else
                        <img src="https://www.segelectrica.com.co/wp-content/themes/consultix/images/no-image-found-360x250.png" class="card-img-top" alt="{{$shirt->shirt_image}}">
                    @endisset
                    </div>

                    <div class="card-body">
                        <p class="card-title">{{$shirt->shirt_name}}</p>
                        <p class="card-text">{{$shirt->shirt_color}}</p>
                        <p class="card-text">{{$shirt->shirt_value}}</p>
                        <p class="card-text">
                            {{$shirt->status ? 'Active' : 'Inactive'}}
                        </p>
                        <form action="{{route('shirt.email', $shirt)}}" method="POST">
                            @csrf
                            <button class="btn btn-success" type="submit">Enviar email (Me interesa esta camiseta)</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="offset-6 col-4">
            <div class="row">
                <a href="/category" class="btn btn-danger mb-2 ">Back</a>
            </div>
        </div>
    </div>
@endsection


