<x-panel class="flex gap-x-6">
    <div>

       <x-employer-logo :employer="$job->employer" />
    </div>
    <div class="flex-1 flex flex-col">

        <a href="#" class="self-start text-sm text-gray-500">{{$job->employer->name}}</a>
            <h3 class="font-bold text-xl mt-3 group-hover:text-blue-700 transition-colors duration-300"><a target="_blank" href="{{$job->url}}">

{{$job->title}}
</a> </h3>
            <div class="text-sm text-gray-400 mt-auto">{{$job->schedule}} - {{$job->salary}}</div>
    </div>        
                <div>
                @foreach ($job->tags as $tag )
                    
                    <x-tag :$tag >Backend</x-tag>
                    @endforeach
                </div>
        </x-panel>