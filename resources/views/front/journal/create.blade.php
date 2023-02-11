<script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
@extends('admin.layout.master')
@section('content')
                 
<!--start content-->
<main class="page-content">
        <!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Front</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Journals</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
              @can('view')
							<a href="{{route('front.view_journals')}}" class="btn btn-primary">View Journals</a>
              @endcan
						</div>
					</div>
				</div>
				<!--end breadcrumb--> 
				
				
				<h6 class="mb-0 text-uppercase">{{$title}}</h6>
				<hr/>

                <!--alerts-->
                @if(Session::has('success_message'))
                <div class="alert border-0 bg-light-success alert-dismissible fade show py-2">
                    <div class="d-flex align-items-center">
                      <div class="fs-3 text-success"><i class="bi bi-check-circle-fill"></i>
                      </div>
                      <div class="ms-3">
                        <div class="text-success">{{Session::get('success_message')}}</div>
                      </div>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  @endif
                  @if(Session::has('error_message'))
                  <div class="alert border-0 bg-light-danger alert-dismissible fade show py-2">
                    <div class="d-flex align-items-center">
                      <div class="fs-3 text-danger"><i class="bi bi-x-circle-fill"></i>
                      </div>
                      <div class="ms-3">
                        <div class="text-danger">{{Session::get('error_message')}}</div>
                      </div>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  @endif
                  <!--alerts-->


                <div class="col-12 col-xl-12 order-xl-3">
                  <div class="card-body p-4 p-sm-5">
                   
                     <form method="post"
                     action="{{route('front.add_journal')}}" enctype="multipart/form-data" class="form-body">@csrf 
                        <div class="row g-3">
                          <div class="col-6 ">
                            <label for="inputName" class="form- 
                            label">Journal Name</label>
                            <div class="ms-auto position-relative">
                              <div class="position-absolute top-50 translate-middle-y search-icon px-3"></div>
                              <input type="text" class="form-control radius-30 ps-5" id="inputName" name="journal_name"
                              value="{{old('journal_name')}}" 
                              placeholder="Enter Journal Name" required>
                            </div>
                          </div>
                          <div class="col-6 ">
                            <label for="inputName" class="form- 
                            label">ISSN</label>
                            <div class="ms-auto position-relative">
                              <div class="position-absolute top-50 translate-middle-y search-icon px-3"></div>
                              <input type="text" class="form-control radius-30 ps-5" id="inputName" name="issn" 
                              value="{{old('issn')}}"
                              placeholder="Enter ISSN"
                              required>
                            </div>
                          </div>
                        </div><br>
                        <div class="row g-3">
                          <div class="col-6 ">
                            <label for="inputName" class="form- 
                            label">Category </label>
                            <div class="ms-auto position-relative">
                              <div class="position-absolute top-50 translate-middle-y search-icon px-3"></div>
                              <select class="single-select select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true"
                              name="category_id">
                                <option value="">Select Category</option>
                                @foreach($categories as $category)
                                <option  value="{{$category->id}}">{{$category->category_name}}</option>
                                @endforeach
                              </select>
                            </div>
                          </div>
                          <div class="col-6 ">
                            <label for="inputName" class="form- 
                            label">Assign Chiefeditor</label>
                            <div class="ms-auto position-relative">
                              <div class="position-absolute top-50 translate-middle-y search-icon px-3"></div>
                              <select class="form-control" name="assign_chiefeditor">
                                <option value="">Select Chiefeditor</option>
                                @foreach($chiefeditor as $chief)
                                @if($chief->hasRole('chiefeditor'))
                                <option value="{{$chief->id}}">{{$chief->first_name}} {{$chief->last_name}}</option>
                                @endif
                                @endforeach
                              </select>
                            </div>
                          </div>
                        </div><br>
                        <div class="row g-3">
                          <div class="col-6 ">
                            <label for="inputName" class="form- 
                            label">Scope And Aim</label>
                            <div class="ms-auto position-relative">
                              <div class="position-absolute top-50 translate-middle-y search-icon px-3"></div>
                              <textarea type="textarea"  name="scope_and_aim" class="form-control" placeholder="Page Content" 
                         ></textarea>
                         <script>
                                    CKEDITOR.replace( 'scope_and_aim' );
                         </script>
                            </div>
                          </div>
                          <div class="col-6 ">
                            <label for="inputName" class="form- 
                            label">Indexing/Abstracting</label>
                            <div class="ms-auto position-relative">
                              <div class="position-absolute top-50 translate-middle-y search-icon px-3"></div>
                              <textarea type="textarea"  name="indexing" class="form-control" placeholder="Page Content" 
                         ></textarea>
                         <script>
                                    CKEDITOR.replace( 'indexing' );
                         </script>
                            </div>
                          </div>
                        </div><br>
                        <div class="row g-3">
                          <div class="col-6 ">
                            <label for="inputName" class="form- 
                            label">Information</label>
                            <div class="ms-auto position-relative">
                              <div class="position-absolute top-50 translate-middle-y search-icon px-3"></div>
                              <textarea type="textarea"  name="information" class="form-control" placeholder="Page Content" 
                         ></textarea>
                         <script>
                                    CKEDITOR.replace( 'information' );
                         </script>
                            </div><br><br>
                            <label for="inputName" class="form- 
                            label">Meta Title</label>
                            <div class="ms-auto position-relative">
                              <div class="position-absolute top-50 translate-middle-y search-icon px-3"></div>
                              <input type="text" class="form-control radius-30 ps-5" id="inputName" name="meta_title" 
                              placeholder="Enter Meta Title" required>
                            </div>
                          </div>
                          <div class="col-6 ">
                            <label for="inputName" class="form- 
                            label">More Info</label>
                            <div class="ms-auto position-relative">
                              <div class="position-absolute top-50 translate-middle-y search-icon px-3"></div>
                             <input type="file" 
                             class="form-control journal_moreinfo" name="more_info"
                             >
                            </div>
                            <span style="color:green;" id="journal_moreinfo">Note:Just PDF files will be acceptable</span><br><br>

                            <label for="inputName" class="form- 
                            label">Author Guidelines</label>
                            <div class="ms-auto position-relative">
                              <div class="position-absolute top-50 translate-middle-y search-icon px-3"></div>
                             <input type="file" class="form-control author_guide" name="author_guidelines">
                            </div>
                            <span style="color:green;" id="author_note">Note:Just PDF files will be acceptable</span><br><br>
                            <label for="inputName" class="form- 
                            label">Days Review</label>
                            <div class="ms-auto position-relative">
                              <div class="position-absolute top-50 translate-middle-y search-icon px-3"></div>
                             <input type="number" class="form-control" name="days_review">
                            </div>
                            <br>

                            <label for="inputName" class="form- 
                            label">Days Decision</label>
                            <div class="ms-auto position-relative">
                              <div class="position-absolute top-50 translate-middle-y search-icon px-3"></div>
                             <input type="number" class="form-control" name="days_decision">
                            </div><br>
                            <label for="inputName" class="form- 
                            label">Days Submission</label>
                            <div class="ms-auto position-relative">
                              <div class="position-absolute top-50 translate-middle-y search-icon px-3"></div>
                             <input type="number" class="form-control" name="days_submission">
                            </div><br>
                            <label for="inputName" class="form- 
                            label">Days Acception</label>
                            <div class="ms-auto position-relative">
                              <div class="position-absolute top-50 translate-middle-y search-icon px-3"></div>
                             <input type="number" class="form-control" name="days_accept">
                            </div>
                          </div>
                        </div><br>
                        <div class="row g-3">
                          <div class="col-6 ">
                            <label for="inputName" class="form- 
                            label">Meta Description</label>
                            <div class="ms-auto position-relative">
                              <div class="position-absolute top-50 translate-middle-y search-icon px-3"></div>
                             <textarea  type="textarea" class="form-control" name="meta_description" placeholder="Enter Meta Description"></textarea>
                            </div>
                          </div>
                          <div class="col-6 ">
                            <label for="inputName" class="form- 
                            label">Meta Keywords</label>
                            <div class="mb-3 ms-auto position-relative">
                              <div class="position-absolute top-50 translate-middle-y search-icon px-3"></div>
							               <input type="text" class="form-control" name="meta_keywords" 
                             data-role="tagsinput" placeholder="Enter Meta Keywords" required><br>
                             <span style="color:green;">Note: Enter Comma(,) to save and switch to enter for more keyword</span>
                            </div>
                          </div>
                        </div><br>
                        <div class="row g-3">
                        <div class="col-12">
                            <div class="d-grid">
                              <button type="submit" class="btn btn-primary radius-30">{{$title}}</button>
                            </div>
                          </div>
                        </div>
                    </form>
                 </div>
                </div>
</main>
        
       <!--end page main-->
@endsection