@foreach($children as $subcategory)

        @if(count($subcategory->children))

                @include('home.categorytree', ['children' => $subcategory->children])

        @else

            <li>
                <a href="{{route('categoryproducts',['id'=>$subcategory->id, 'slug'=>$subcategory->title])}}">
                    {{$subcategory->title}} </a>
            </li>

        @endif

@endforeach
