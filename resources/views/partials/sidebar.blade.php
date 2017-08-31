<div id="sidebar" class="col-lg-4 ml-5 col-md-4">

    <h1 class="my-4">PC SHOP</h1>

    <ul class="mt-5">
        @foreach($categories as $category)

            <li>

                <h6>{{ $category->name }}</h6>

                @if ($category->subcategories->count())

                    <ul>

                        @foreach($category->subcategories as $subcategory)

                            <li>

                                <p><a href="">{{$subcategory->name}}</a></p>

                            </li>

                        @endforeach

                    </ul>

                @endif

            </li>

        @endforeach

    </ul>

</div>
<!-- /.col-lg-3 -->
