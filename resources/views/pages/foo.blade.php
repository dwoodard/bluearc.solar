<x-blank-layout>

    <x-slot:title>
        Foo Custom Title - TEST
    </x-slot>

    <x-slot name="content">
        <h1>Foo</h1>
    </x-slot>


    <div>Foo Page {{ __FILE__ }}</div>
    <div>Foo Page {{ __DIR__ }}</div>
    <div>Foo Page LINE: {{ __LINE__ }}</div>


</x-blank-layout>
