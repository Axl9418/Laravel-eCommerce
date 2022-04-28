<div wire:init="loadPosts">

    @if (count($products))
        

    <div class="glider-contain">
        <ul class="glider-{{$category->id}}">

            @foreach ($products as $product)
                
                <li class="bg-white rounded-lg shadow {{ $loop->last ? '' : 'sm:mr-4' }}">
                    <article>
                        <figure>
                            <img class="h-48 w-full object-cover object-center" src="{{ Storage::url($product->images->first()->url)}}" alt="">
                        </figure>    
                        
                        <div class="py4 px-6">
                            <h1 class="text-lg font-semibold">
                                <a href="">
                                    {{Str::limit($product->name, 20)}}
                                </a>
                            </h1>

                            <p class="font-bold text-gray-600">CAD$ {{$product->price}}</p>
                        </div>
                    </article>
                </li>

            @endforeach
          
        </ul>
      
        <button aria-label="Previous" class="glider-prev">«</button>
        <button aria-label="Next" class="glider-next">»</button>
        <div role="tablist" class="dots"></div>
    </div>

      @else
      <div class="mb-4 h-48 flex justify-center items-center">
        <div class="lds-spinner"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
      </div>
      @endif

</div>
