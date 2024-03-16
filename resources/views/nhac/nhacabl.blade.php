<form action="{{route('tmabkh', $users->id)}}" method="POST">
  @csrf
  <input type="text" name="tenab" placeholder="Tên album mà bạn muốn đặt">
  <button type="submit">Thêm mới</button>
</form>