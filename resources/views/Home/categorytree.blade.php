@foreach($children as $subcategory)
    <ul class="sub-menu">
        @if(count($subcategory->children))
            <li ><a href="#">{{$subcategory->title}}</a>
                @include('home.categorytree', ['children' => $subcategory->children])
            </li>
        @else
            <li>
                <a href="{{route('categoryproducts',['id'=>$subcategory->id, 'slug'=>$subcategory->title])}}"> {{$subcategory->title}} </a>
                <div class="img-container" style="position:relative; padding-top:66.59%;">

                </div>
            </li>
        @endif
    </ul>
@endforeach
