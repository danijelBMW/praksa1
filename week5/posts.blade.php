<html>

<head>

<style>

html,body {
    background-color:beige;
}
    table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 50%;
  
}

td, th {
  border: 1px solid black;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: beige;
}



</style>
</head>
<body>

<table >
  <tr >
      <th>Title</th>
      <th>Content</th>
      <th>Likes</th>
      <th>Edit</th>
      <th>Delete</th>
      <th>Likes</th>
  </tr>
  @foreach($posts as $post)
      <tr>
          <td>{{$post->title}}</td>
          <td>{{$post->content}}</td>
          <td>{{$post->likes}}</td>
          <td><a href="edit/{{$post->id}}">
              <button> Edit </button></a></td>
          <td><form action="delete/{{$post->id}}" method="delete">
          <button> Delete </button>
          <td><a href="posts/{{$post->id}}/like"> <button name ="likes" class="btn btn-primary"> Like </button></a></td>

           </form></td>
      </tr>
  @endforeach
</table>
<br>

<a href="/createPost"><button>Create new post</button></a>

</body>

</html>