<x-layout>
  <x-slot:title>{{$title}}</x-slot:title>

  @foreach ($posts as $post)
    <article class="py-8 max-w-screen-md border-b border-gray-300">
      <a href="/about/{{$post['slug']}}">
        <h2 class="mb-1 text-3xl tracking-light font-bold text-gray-900">{{$post['title']}}</h2>
      </a>

      <div >
        By
        <a href="/authors/{{$post->author->username}}" class="hover:underline text-base text-grey-500">{{$post->author->name}}</a> 
        in
        <a href="/categories/{{$post->category->name}}" class="hover:underline text-base text-grey-500">{{$post->category->name}}</a>
        | {{$post->created_at->format('j F Y')}}
      </div>

      
      <p class="my-4 font-light">{{Str::limit($post['content'], 200)}}</p>
      <p></p>

      <a href="/about/{{$post['slug']}}" class="font-meduim text-blue-500 hover:underline">Read more &raquo;</a>
    </article>
  @endforeach
</x-layout>