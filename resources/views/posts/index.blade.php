<x-app-layout>
    <body>
        <div class='posts'>
            @foreach ($posts as $post)
                <div class="post">
                    <h1 class="title">{{ $post->title }}</h1>
                    <h2 class="">{{ $post->sub_title }}</h2>
                    <p class="content">{{ $post->content }}</p>
                </div>
            @endforeach
        </div>
    </body>
</x-app-layout>