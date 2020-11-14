@section("title", 'Image')
<div class="container" style="float:center">
    <div class="row justify-content-center">

        <body>
            <h1> LA IMAGEN RANDOM ES ........ </h1>
            <img src="{{ $data['storage']->url($data['imageName']) }}" alt="">
            <h4> Powered by: {{ $data['id'] }} </h4>
        </body>
    </div>
</div>