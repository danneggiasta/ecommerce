<nav class="col-lg-2 col-sm-12 sidebar" id="sidebar">
    <ul class="nav nav-pills flex-column">
        @foreach($categories as $category)
            <a href="#{{ $category->id }}" class="collapsed"
               data-toggle="collapse"
               data-parent="#sidebar" aria-expanded="false"><p>{{ $category->name }}</p></a>
            @if ($category->subcategories->count())
                <div class="collapse" id="{{ $category->id }}">
                    @foreach($category->subcategories as $subcategory)
                        <li class="nav-item mb-3"><a class="nav-link"
                                                     href="{{ route('product.category', $subcategory->id) }}"
                                                     data-parent="#{{ $category->id }}">{{$subcategory->name}}</a>
                        </li>
                    @endforeach
                </div>
            @endif
        @endforeach
    </ul>
</nav>
