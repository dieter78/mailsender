@extends('layouts.admin.admin_layout')
@section('content')
<!-- BEGIN: Content-->
<div class="app-content content">
   <div class="content-overlay"></div>
   <div class="content-wrapper">
      <div class="content-header row">
         <div class="content-header-left col-md-6 col-12 mb-2">
            <div class="row breadcrumbs-top">
               <div class="breadcrumb-wrapper col-12">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="/">Home</a>
                     </li>
                     <li class="breadcrumb-item"><a href="#">Contacts</a>
                     </li>
                     <li class="breadcrumb-item active">Add Campaingn
                     </li>
                  </ol>
               </div>
            </div>
            <h3 class="content-header-title mb-0">Add Campaingn</h3>
         </div>
      </div>
      <div class="content-body">
         <section id="page-account-settings">
            <div class="row">
               <div class="col-md-3 mb-2 mb-md-0">
                  <ul class="nav nav-pills flex-column mt-md-0 mt-1">
                     <li class="nav-item">
                        <a class="nav-link d-flex" id="account-pill-password" data-toggle="pill" href="#account-vertical-password" aria-expanded="false">
                        <i class="feather icon-lock"></i> Change Password
                        </a>
                     </li>
                  </ul>
               </div>
               <div class="col-md-9">
                  <div class="card">
                     <div class="card-content">
                        <div class="card-body">
                           <div class="tab-content">
                              <div class="tab-pane fade active show " id="account-vertical-password" role="tabpanel" aria-labelledby="account-pill-password" aria-expanded="false">
                                 <form method="post"  novalidate>
                                    @csrf
                                    @if(session('success'))
                                    <div class="alert alert-success">{{session('success')}}</div>
                                    @endif
                                    <div class="row">
                                       <div class="col-12">
                                          <div class="form-group">
                                             <div class="controls">
                                                <label for="account-old-password">Old Password</label>
                                                <input type="password" class="form-control"
                                                   name="current_password"id="account-old-password" required placeholder="Old Password" data-validation-required-message="This old password field is required">
                                                <span class="text-danger">
                                                @error('current_password')
                                                {{$message}}
                                                @enderror
                                                @if(session('error'))
                                                {{session('error')}}
                                                @endif
                                                </span>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-12">
                                          <div class="form-group">
                                             <div class="controls">
                                                <label for="account-new-password">New Password</label>
                                                <input type="password" name="password" id="account-new-password" class="form-control" placeholder="New Password" required data-validation-required-message="The password field is required" minlength="6">
                                                <span class="text-danger">
                                                @error('password')
                                                {{$message}}
                                                @enderror
                                                </span>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                          <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Save
                                          changes</button>
                                          <button type="reset" class="btn btn-light">Cancel</button>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </div>
   </div>
</div>
@endsection