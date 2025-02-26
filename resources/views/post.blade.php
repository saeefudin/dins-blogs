<x-layout>
        <x-slot:title>{{ $title }}</x-slot:title>
        <article class="py-8 max-w-screen-md border-b border-gray-500 ">
                <h2 class="mb-1 text-3xl tracking-light font-bold text-gray-800">{{ $post['title'] }}</h2>
                <div class="text-base text-gray-600">
                        <a href="#">{{ $post['author'] }} | 26 February 2025</a>
                </div>
                <p class="my-4 font-light"> {{ $post['body']  }}</p>
                <a href="/posts" class="font-medium text-blue-400">&laquo;Back to Posts</a>
        </article>

</x-layout>

