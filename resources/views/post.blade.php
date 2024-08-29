<x-layout>
  <x-slot:title>{{$title}}</x-slot:title>

  <article class="py-8 max-w-screen-md">
    <h2 class="mb-1 text-3xl tracking-light font-bold text-gray-900">{{$post['title']}}</h2>

    <div>
      By
        <a href="/authors/{{$post->author->username}}" class="hover:underline text-base text-grey-500">{{$post->author->name}}</a> 
        in
        <a href="/categories/{{$post->category->name}}" class="hover:underline text-base text-grey-500">{{$post->category->name}}</a>
        <!-- | {{$post->created_at->format('j F Y')}} -->
        <!-- <a href="/authors/{{$post->author->id}}" class="hover:underline">{{$post->author->name}}</a> |  -->
        {{$post->created_at->diffForHumans()}}
    </div>

    <p class="my-4 font-light">{{$post['content']}}</p>
    <p></p>
    <a href="/about" class="font-meduim text-blue-500 hover:underline">&laquo; Back to About </a>
  </article>

</x-layout>