@include('admin.header')
@include('admin.navbar')
@include('admin.sidebar')
@section('content')
<div class="container">
  <div class="row">
      <div class="col-md-6 offset-md-3">
          <div class="card mt-5">
              <div class="card-header text-bold text-center">{{ $title }}</div>
              <div class="card-body">
                  <form action="{{ route('store.income')}}" method="POST">
                    @csrf
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                            <label for="incomeTitle">Title</label>
                            <input type="hidden" name="id_user" class="form-control" id="incomeTitle" value="{{ $id_user }}">
                            <input type="text" name="title" class="form-control" id="incomeTitle" placeholder="Title">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="category">Category</label>
                          <select class="form-control" id="incomeTitle" name="category">
                            <option value="">--- Select Category ---</option>
                            <option value="food & beverages">Food & Beverages</option>
                            <option value="lifestyle">Lifestyle</option>
                            <option value="transportaion">Transportation</option>
                            <option value="etc">etc</option>
                          </select>
                      </div>
                      </div>
                    </div>
                      <div class="form-group">
                          <label for="incomeNominal">Income Nominal</label>
                          <input type="number" name="nominal" class="form-control" id="incomeNominal" placeholder="Nominal">
                      </div>
                      <div class="form-group">
                          <label for="incomeDescription">Description</label>
                          <textarea class="form-control" name="description" id="incomeDescription" rows="4"></textarea>
                      </div>
                      <div class="card-footer">
                        <div class="d-flex justify-content-end">
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
</div>
@include('admin.footer')