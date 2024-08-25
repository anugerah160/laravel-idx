<x-layout>
  <x-slot:title>{{$title}}</x-slot:title>

  <article class="py-8 max-w-screen-md">
    <h2 class="mb-1 text-3xl tracking-light font-bold text-gray-900">{{$post['title']}}</h2>
    <div class="text-base text-grey-500">
      <a href="#">{{$post['author']}}</a> | 10 Agustus 2024
    </div>
    <p class="my-4 font-light">{{$post['content']}}</p>
    <p></p>
    <a href="/about" class="font-meduim text-blue-500 hover:underline">&laquo; Back to About </a>
  </article>

</x-layout>