<div class="single category">
    <h3 class="side-title">Category</h3>


    <ul class="list-unstyled">
        @foreach($categories as $category)
            <li><a href="" title="">{{ $category->name }} <span class="pull-right">12</span></a></li>
        @endforeach
    </ul>


</div>
