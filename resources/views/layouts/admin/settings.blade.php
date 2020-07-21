@extends('layouts.admin.admin_layout')
@section('content')
 <div id="content" class="flex ">
                <!-- ############ Main START-->
                <div>
                    <div class="page-hero page-container " id="page-hero">
                        <div class="padding d-flex">
                            <div class="page-title">
                                <h2 class="text-md text-highlight">Setting</h2>
                                <small class="text-muted">Configure the things</small>
                            </div>
                        </div>
                    </div>
                    <div class="page-content page-container" id="page-content">
                        <div class="padding">
                            <div id="accordion">
                                <p class="text-muted">
                                    <strong>Account</strong>
                                </p>
                                <div class="card">
                                    <div class="d-flex align-items-center px-4 py-3 pointer" data-toggle="collapse" data-parent="#accordion" data-target="#c_1">
                                        <div>
                                            <span class="w-48 avatar circle bg-info-lt" data-toggle-class="loading">
                                                     <img src="../assets/img/a9.jpg" alt=".">
                                            </span>
                                        </div>
                                        <div class="mx-3 d-none d-md-block">
                                            <strong>Jacqueline Reid</strong>
                                            <div class="text-sm text-muted">jacqueline@company.co</div>
                                        </div>
                                        <div class="flex"></div>
                                        <div class="mx-3">
                                            <i data-feather="chevron-right"></i>
                                        </div>
                                        <div>
                                            <a href="signin.html" class="text-prmary text-sm">Sign Out</a>
                                        </div>
                                    </div>
                                    <div class="collapse p-4" id="c_1">
                                        <form role="form">
                                            <div class="form-group">
                                                <label>Profile picture</label>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="customFile">
                                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <button type="submit" class="btn btn-primary mt-2">Update</button>
                                        </form>
                                    </div>
                                    <div class="d-flex align-items-center px-4 py-3 b-t">
                                        <i data-feather="refresh-cw"></i>
                                        <div class="px-3">
                                            <div>Sync</div>
                                            <div class="text-sm text-muted">On - Sync everything</div>
                                        </div>
                                        <div class="flex"></div>
                                        <span>
            <label class="ui-switch ui-switch-md">
              <input type="checkbox" checked>
              <i></i>
            </label>
        </span>
                                    </div>
                                    <div class="d-flex align-items-center px-4 py-3 b-t pointer" data-toggle="collapse" data-parent="#accordion" data-target="#c_2">
                                        <i data-feather="lock"></i>
                                        <div class="px-3">
                                            <div>Password</div>
                                        </div>
                                        <div class="flex"></div>
                                        <div>
                                            <i data-feather="chevron-right"></i>
                                        </div>
                                    </div>
                                    <div class="collapse p-4" id="c_2">
                                        <form role="form">
                                            <div class="form-group">
                                                <label>Old Password</label>
                                                <input type="password" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>New Password</label>
                                                <input type="password" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>New Password Again</label>
                                                <input type="password" class="form-control">
                                            </div>
                                            <button type="submit" class="btn btn-primary mt-2">Update</button>
                                        </form>
                                    </div>
                                    <div class="d-flex align-items-center px-4 py-3 b-t pointer" data-toggle="collapse" data-parent="#accordion" data-target="#c_3">
                                        <i data-feather="credit-card"></i>
                                        <div class="px-3">
                                            <div>Payment methods</div>
                                        </div>
                                        <div class="flex"></div>
                                        <div>
                                            <i data-feather="chevron-right"></i>
                                        </div>
                                    </div>
                                    <div class="collapse p-4" id="c_3">
                                        <form role="form">
                                            <div class="form-group">
                                                <label>Paypal account</label>
                                                <input type="input" class="form-control">
                                            </div>
                                            <button type="submit" class="btn btn-primary mt-2">Update</button>
                                        </form>
                                    </div>
                                    <div class="d-flex align-items-center px-4 py-3 b-t pointer" data-toggle="collapse" data-parent="#accordion" data-target="#c_4">
                                        <i data-feather="map-pin"></i>
                                        <div class="px-3">
                                            <div>Addresses and more</div>
                                        </div>
                                        <div class="flex"></div>
                                        <div>
                                            <i data-feather="chevron-right"></i>
                                        </div>
                                    </div>
                                    <div class="collapse p-4" id="c_4">
                                        <form role="form">
                                            <div class="form-group">
                                                <label>URL</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Company</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Location</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <button type="submit" class="btn btn-primary mt-2">Update</button>
                                        </form>
                                    </div>
                                </div>
                                <p class="text-muted">
                                    <strong>Notifications</strong>
                                </p>
                                <div class="card">
                                    <div class="d-flex align-items-center px-4 py-3">
                                        <div>Anyone seeing my profile page</div>
                                        <div class="flex"></div>
                                        <span>
              <label class="ui-switch ui-switch-md">
                <input type="checkbox">
                <i></i>
              </label>
          </span>
                                    </div>
                                    <div class="d-flex align-items-center px-4 py-3 b-t">
                                        <div>Anyone follow me</div>
                                        <div class="flex"></div>
                                        <span>
              <label class="ui-switch ui-switch-md">
                <input type="checkbox" checked>
                <i></i>
              </label>
          </span>
                                    </div>
                                    <div class="d-flex align-items-center px-4 py-3 b-t">
                                        <div>Anyone send me a message</div>
                                        <div class="flex"></div>
                                        <span>
              <label class="ui-switch ui-switch-md">
                <input type="checkbox" checked>
                <i></i>
              </label>
          </span>
                                    </div>
                                    <div class="d-flex align-items-center px-4 py-3 b-t">
                                        <div>Anyone invite me to group</div>
                                        <div class="flex"></div>
                                        <span>
              <label class="ui-switch ui-switch-md">
                <input type="checkbox">
                <i></i>
              </label>
          </span>
                                    </div>
                                    <div class="d-flex align-items-center px-4 py-3 b-t">
                                        <div>Update</div>
                                        <div class="flex"></div>
                                        <span>
              <label class="ui-switch ui-switch-md">
                <input type="checkbox" checked>
                <i></i>
              </label>
          </span>
                                    </div>
                                </div>
                                <p class="text-muted">
                                    <strong>Emails</strong>
                                </p>
                                <div class="card">
                                    <div class="d-flex align-items-center px-4 py-3">
                                        <div>Anyone posts a comment on my post</div>
                                        <div class="flex"></div>
                                        <span>
            <label class="ui-switch ui-switch-md">
              <input type="checkbox">
              <i></i>
            </label>
        </span>
                                    </div>
                                    <div class="d-flex align-items-center px-4 py-3 b-t">
                                        <div>Anyone follow me</div>
                                        <div class="flex"></div>
                                        <span>
            <label class="ui-switch ui-switch-md">
              <input type="checkbox" checked>
              <i></i>
            </label>
        </span>
                                    </div>
                                    <div class="d-flex align-items-center px-4 py-3 b-t">
                                        <div>Anyone repost</div>
                                        <div class="flex"></div>
                                        <span>
            <label class="ui-switch ui-switch-md">
              <input type="checkbox">
              <i></i>
            </label>
        </span>
                                    </div>
                                </div>
                                <p class="text-muted">
                                    <strong>Security</strong>
                                </p>
                                <div class="card">
                                    <div class="d-flex align-items-center px-4 py-3 b-t pointer" data-toggle="collapse" data-parent="#accordion" data-target="#c_5">
                                        <div>Delete account?</div>
                                        <div class="flex"></div>
                                        <div>
                                            <i data-feather="chevron-right"></i>
                                        </div>
                                    </div>
                                    <div class="collapse p-4" id="c_5">
                                        <div class="py-3">
                                            <p>Are you sure to delete your account?</p>
                                            <button type="button" class="btn btn-white">No</button>
                                            <button type="button" class="btn btn-danger">Yes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ############ Main END-->
</div>
<!-- ############ Content END-->   
@endsection
