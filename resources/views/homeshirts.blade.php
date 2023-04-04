@extends ('layouts.app')

@section('title')Cards
@endsection


@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h2 class="alert alert-dark my-3 text-center">Shirts</h2>
        </div>
    </div>

    <div class="row justify-content-md-around">
        @foreach($shirts as $shirt)
            <div class="card border-primary mb-3" style="max-width: 500px;">
                <div class="row ceg-0">
                    <div class="col-md-4">
                        @isset($shirt->shirt_image)
                            <img src="{{asset('storage/'.$shirt->shirt_image)}}" class="card-img-top" alt="{{$shirt->shirt_image}}">
                        @else
                            <img src="https://www.segelectrica.com.co/wp-content/themes/consultix/images/no-image-found-360x250.png" class="card-img-top" alt="{{$shirt->shirt_image}}">
                        @endisset
                    </div>
                    <div class="col-md-8">
                        <div class="card-body ">
                            <h5 class="card-title">{{$shirt->shirt_name}}</h5>
                            <p class="card-text">Color: {{$shirt->shirt_color}}</p>
                            <p class="card-text">Valor: {{$shirt->shirt_value}}</p>
                            <p class="card-text"> Estado:
                                {{$shirt->status ? 'Active' : 'Inactive'}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection




