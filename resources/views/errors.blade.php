@if(count($errors)>0)
<div class="card-body bg-danger text-warniing">    
            Please fix the following:
    <ul>
        @foreach($errors->all() as $err)
        <li>{{$err}}</li>
        @endforeach
    </ul>
</div>
@endif