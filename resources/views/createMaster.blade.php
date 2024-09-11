<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800  leading-tight">
            {{ __('Master Data') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                   <div class="container">
                    <form action="{{ route('masters.store') }}" method="post" id="masterCreateForm">
                        @csrf
                        <div class="mb-3">
                          <label for="nama" class="form-label">Nama</label>
                          <input type="text" class="form-control" id="nama" aria-describedby="nama">
                        </div>
                        <div class="mb-3">
                          <label for="quantity" class="form-label">Quantity</label>
                          <input type="number" class="form-control" id="quantity" aria-describedby="quantity">
                        </div>
                        <button type="submit" class="btn btn-primary" id='submit-form'>Submit</button>
                      </form>
                   </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
