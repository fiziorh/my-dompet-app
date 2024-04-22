@include('admin.header')
@include('admin.navbar')
@include('admin.sidebar')
@section('content')
<form>
  <div class="form-group">
    <label for="spendingTitle">Title</label>
    <input type="text" class="form-control" id="spendingTitle">
  </div>
  <div class="form-group">
    <label for="spendingNominal">Spending Nominal</label>
    <input type="number" class="form-control" id="spendingNominal">
  </div>
  <div class="form-group">
    <label for="spendingDescription">Description</label>
    <input type="text" class="form-control" id="spendingDescription">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@include('admin.footer')