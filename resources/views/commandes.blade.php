<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Orders') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <table class="table">
 
                 <h1>Orders List</h1>
                 <thead>
                    <tr>
                    <th scope="col">Client</th>
                    <th scope="col">Date</th>
                    <th scope="col">Ref</th>
                    <th scope="col">Products</th>
                    <th scope="col">Price</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($data as $item)
                
               

                    <tr>
                    <th scope="row">{{$item->client->first_name}} {{$item->client->last_name}}</th>
                    <td>{{\Carbon\Carbon::parse($item->created_at)->format('j F, Y')}}</td>
                    
                    <td>{{$item->id}}</td> 
                    <td>
                    @php
                        $total =0;
                    @endphp    
                    @foreach($item->products as $prod)
                        {{  $prod->pivot->quantity}} x {{ $prod->name }} (Ref: {{$prod->id}} ) <br/>
                        @php
                          $total += $prod->pivot->quantity * $prod->price;
                         @endphp  
                    @endforeach 

                    </td>
                    <td>{{$total}} €</td> 
                @endforeach     
                    
                </tbody>
            </table>
                
            </div>
        </div>
    </div>
</x-app-layout>
