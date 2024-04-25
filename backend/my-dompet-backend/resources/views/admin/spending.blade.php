@include('admin.header')
@include('admin.navbar')
@include('admin.sidebar')
@yield('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card mt-5">
                <div class="card-header text-bold text-center">{{ $title }}</div>
                <div class="card-body">
                    <form>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                              <label for="spendingTitle">Title</label>
                              <input type="text" class="form-control" id="spendingTitle" placeholder="Title">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="category">Category</label>
                            <select class="form-control" id="spendingTitle">
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
                            <label for="spendingNominal">Spending Nominal</label>
                            <input type="number" class="form-control" id="spendingNominal" placeholder="Nominal">
                        </div>
                        <div class="form-group">
                            <label for="spendingDescription">Description</label>
                            <textarea class="form-control" id="spendingDescription" rows="4"></textarea>
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
