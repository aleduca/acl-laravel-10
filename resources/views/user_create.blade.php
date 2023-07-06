<form action="{{ route('user.store') }}" method="post">
  @csrf
  <button type="submit">Create user</button>
</form>
