<x-layout>
  <x-slot:title>{{$title}}</x-slot:title>
  <p>Halo saya {{$name}}</p>

  @foreach ($posts as $post)
    <article class="py-8 max-w-screen-md border-b border-gray-300">
      <h2 class="mb-1 text-3xl tracking-light font-bold text-gray-900">{{$post['title']}}</h2>
      <div class="text-base text-grey-500">
        <a href="#">{{$post['author']}}</a> | 10 Agustus 2024
      </div>
      <p class="my-4 font-light">{{Str::limit($post['content'], 200)}}</p>
      <p></p>
      <a href="/about/{{$post['id']}}" class="font-meduim text-blue-500 hover:underline">Read more &raquo;</a>
    </article>
  @endforeach
</x-layout>