@extends ('template.default')
@section ('content')

    @foreach ($products as $item)
        <section class="page-section">
            <div class="container">
                <div class="product-item">
                    <div class="product-item-title d-flex">
                        <div class="bg-faded p-5 d-flex ms-auto rounded">
                            <h2 class="section-heading mb-0">
                                <span class="section-heading-upper">{{$item['head']}}</span>
                                <span class="section-heading-lower">{{$item['header']}}</span>
                            </h2>
                        </div>
                    </div>
                    <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="{{$item['image']}}" alt="..." />
                    <div class="product-item-description d-flex me-auto">
                        <div class="bg-faded p-5 rounded"><p class="mb-0">{{$item['desc']}}</p></div>
                    </div>
                </div>
            </div>
        </section>
        @endforeach
        
        @endsection
