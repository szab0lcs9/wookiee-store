<div class="col-sm-4 col-md-3 mx-auto my-4">
    <div class="card h-100">
        <div class="d-flex flex-column justify-content-center card-body mx-auto">
            <div class="mh-60 mb-3 mx-auto" style="max-height: 300px">
                <img class="w-auto mw-100 mh-100 px-auto" src="{{ asset($product->image) }}" alt="{{ $product->name }}">
            </div>
            <div class="mh-40 mt-auto">
                <h5 class="mb-3 text-center">
                    <a class="mb-3 text-dark" style="text-decoration: none" href="{{ route('product.show', $product) }}">{{ $product->name }}</a>
                </h5>
                <p class="text-center">{{ __('Price') }}: {{__('$')}}{{ $product->price }}</p>
            </div>
            <div class="d-grid gap-2 col-sm-12 p-2">
                <button class="btn btn-outline-primary btn-lg" type="button">
                    {{__('Add to cart')}}
                </button>
                <button class="btn btn-outline-primary btn-lg" type="button">
                    {{__('Buy it now')}}
                </button>
            </div>
        </div>
    </div>
</div>