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
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">
                          <strong>Sukses!</strong> {{ Session('success') }}.
                            <a href={{ route('masters.create') }} class="btn btn-primary btn-sm float-right">Tambah Data</a>
                        </h6>
                    </div>
                    <?php $index = 1; ?>
                    <table class="table table-dark table-striped">
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Name</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($masterData as $data)
                          {{-- {{ dd($data) }} --}}
                          <tr>
                            <th scope="row">{{ $index++ }}</th>
                            <td>{{ $data->nama }}</td>
                            <td>{{ $data->quantity }}</td>
                            <td>.</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                   </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
