    


<div class="ps-container ps-theme-default ps-active-y" id="chat-content" style="overflow-y: scroll !important; height:400px !important; margin: 10px;">
@if($comment->count() > 0)
    @foreach ($comment as $key => $comment)
    <div class="media media-chat" style="border: 1px solid; padding: 10px; margin: 10px;">
    
    <div class="media-body" >
            <p>Name: {{ $comment->user->first_name . ' ' . $comment->user->last_name }}</p>

        <p>Content :{!! $comment->content !!} </p>
        <p>Rating : {{ $comment->rating }} / 5</p>
        <p>   Date: {{$comment->created_at}} </p>
        
    </div>
    </div>
    
    @endforeach
    @else

    <div class="media media-chat" style="border: 1px solid; padding: 10px; margin: 10px;">
    
    <div class="media-body" >
        <p> No Comment Found </p>
    </div>
    </div>
    
    </div>

@endif