<x-layout>
    <x-slot name="title">
        Home | Example Website
    </x-slot>

    <div class="main-content">

        <h1>Hello World!</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, aut?</p>
        <button class="btn">Get Started</button>
        <hr>

        <div>
            <h2>
                <u><code>foreach</code> example</u>
            </h2>
            <ul>
                @foreach ($todos as $todo)
                <li>{{ $todo }}</li>
                @endforeach
            </ul>
        </div>

        <hr>

        <div>
            <h2>
                <u><kbd>if</kbd> example</u>
            </h2>
            @if (count($todos) === 1)
                <p>I have one task!</p>
            @elseif (count($todos) > 1)
                <p>I have multiple tasks!</p>
            @else
                <p>I don't have any task!</p>
            @endif
        </div>

        <hr>

        <div>
            <h2>
                <u>custom <kbd>truncate</kbd> example</u>
            </h2>
            @truncate('Lorem ipsum dolor sit amet', 10)
            <!-- Outputs: Lorem ipsu... -->
        </div>

    </div>
</x-layout>
