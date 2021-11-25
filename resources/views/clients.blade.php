<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Clients') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-3">
            <a href="{{ route('excel') }}" class="btn btn-dark  mb-2 float-right" role="button" aria-disabled="true">Export Data</a>
            <table class="table">
 
                 <h1>Clients List</h1>
                 <thead>
                    <tr>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Orders</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($data as $item)
                    <tr>
                    <th scope="row">{{$item->first_name}}</th>
                    <td>{{$item->last_name}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->phone}}</td>
                    <td>{{$item->commandes_count}}</td>
                    </tr>
                @endforeach     
                    
                </tbody>
            </table>
                
            </div>
        </div>
    </div>
</x-app-layout>
