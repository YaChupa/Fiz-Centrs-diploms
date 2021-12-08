
                    
    <div class="thumbnail">
        <div class="labels">
            
            
                    </div>
        <div class="caption">
            <h3>{{$profile->name_surname}}</h3>
            <p>COVID Sertifikats: {{$profile->COVID_Sertifikats}}</p>
            <p>
                {{$profile->getCategory()->name}}
                @isset($category)
                    {{$category->name}}
                @endisset
                <a href="{{route('profile',[$profile->id]) }}"
                   class="btn btn-default"
                   role="button">About</a>
                <a href="{{route('profile',[$profile->id]) }}"
                   class="btn btn-default"
                   role="button">Delete</a>
                <a href="{{route('profile',[$profile->id]) }}"
                   class="btn btn-default"
                   role="button">Change</a>
            </p>
        </div>
    </div>
