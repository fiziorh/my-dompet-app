@include('admin.header')
@include('admin.navbar')
@include('admin.sidebar')
@section('content')
<form>
  <div class="form-group">
    <label for="incomeTitle">Title</label>
    <input type="text" class="form-control" id="incomeTitle">
  </div>
  <div class="form-group">
    <label for="incomeNominal">Income Nominal</label>
    <input type="number" class="form-control" id="incomeNominal">
  </div>
  <div class="form-group">
    <label for="incomeDescription">Description</label>
    <input type="text" class="form-control" id="incomeSource">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@include('admin.footer')