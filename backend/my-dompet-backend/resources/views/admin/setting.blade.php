@include('admin.header')
@include('admin.navbar')
@include('admin.sidebar')
@section('content')
<form>
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" name ="name" id="name">
  </div>
  <div class="form-group">
    <label for="phone_number">Phone Number</label>
    <input type="number" class="form-control" name="phone_number" id="phone_number">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" name="password" id="password">
  </div>
  <div class="form-group">
    <label for="currency">Currency</label>
    <select class="form-control" name="currency" id="currency">
      <option value="rupiah">Rupiah</option>
      <option value="dollar">Dollar</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Change information</button>
</form>
@include('admin.footer')