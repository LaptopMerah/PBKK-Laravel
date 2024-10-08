<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <article class="max-w-screen-xl flex flex-col items-center gap-5">
        <img class="max-w-sm rounded-lg" src={{ $post->image }} alt="" />
        <div class="mb-3 font-normal text-lg py-1 px-2 bg-slate-300 dark:bg-slate-700 rounded-md">
            By
            <a href="/authors/{{ $post->user->username }}" class=" hover:underline text-slate-600 dark:text-slate-200">{{ $post->user->name }}</a>
            in
            <a href="/categories/{{ $post->category->slug }}"  class=" hover:underline text-slate-600 dark:text-slate-200">{{ $post->category->type }}</a>
        </div>

        <section class="bg-white border border-gray-200 p-5 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div class="w-full flex gap-5 justify-between mb-5">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $post->title }}</h5>
                <a href="/news"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg class="rotate-180 rtl:rotate-0 w-3.5 h-3.5 me-2" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                    Back to News
                </a>
            </div>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 line-clamp-4 text-justify">{{ $post->content }}</p>
        </section>
    </article>
</x-layout>
