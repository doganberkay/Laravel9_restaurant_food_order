@foreach($children as $subcategory)
<ul class="sub-menu">
    @if(count($subcategory->children))
    <li ><a href="#">{{$subcategory->title}}</a>
            @include('home.categorytree', ['children' => $subcategory->children])
    </li>
    @else
        <li>
            <a href="{{route('categoryproducts',['id'=>$subcategory->id, 'slug'=>$subcategory->title])}}">{{$subcategory->title}}</a>
        </li>
    @endif
</ul>
@endforeach
