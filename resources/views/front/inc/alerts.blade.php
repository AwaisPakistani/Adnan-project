<div class="alerts">
                  @if(Session::has('success_message'))
                    <div class="alert alert-success alert-dismissible fade show text-start" role="alert">
                    {{Session::get('success_message')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                  @endif
                  @if(Session::has('error_message'))
                    <div class="alert alert-danger alert-dismissible fade show text-start" role="alert">
                    {{Session::get('error_message')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                  @endif
               </div>