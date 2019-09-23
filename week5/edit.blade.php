<form method="POST" action="{{route('updatePost',$post->id)}}">
  {{csrf_field()}}
  <label>Title</label> <br />
  <input type="text" name="title" value="{{$post->title}}"> <br />
  <label>Content</label> <br />
  <input type="text" name="content" value="{{$post->content}}"> <br />
  <button type="submit"> Save </button>
</form>