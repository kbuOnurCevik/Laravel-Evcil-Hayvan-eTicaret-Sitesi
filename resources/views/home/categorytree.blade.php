@foreach($children as $subcategory)


    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link"
                                         href={{route('categoryproducts',['id'=>$subcategory->id,'slug'=>$subcategory->slug])}}
        ">{{$subcategory->title}}</a></li>

@endforeach
