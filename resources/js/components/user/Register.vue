<template>
  <div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">Register</div>

            <div class="card-body">
              <form method="POST">
                <div class="form-group row">
                  <label
                    for="name"
                    class="col-md-4 col-form-label text-md-right"
                    >Name</label
                  >

                  <div class="col-md-6">
                    <input
                      id="name"
                      type="text"
                      class="form-control"
                      name="name"
                      value=""
                      required
                      autocomplete="name"
                      autofocus
                    />
                  </div>
                </div>

                <div class="form-group row">
                  <label
                    for="email"
                    class="col-md-4 col-form-label text-md-right"
                    >Email Address</label
                  >

                  <div class="col-md-6">
                    <input
                      id="email"
                      type="email"
                      class="form-control"
                      name="email"
                      value=""
                      required
                      autocomplete="email"
                    />
                  </div>
                </div>

                <div class="form-group row">
                  <label
                    for="mobile"
                    class="col-md-4 col-form-label text-md-right"
                    >Mobile
                  </label>

                  <div class="col-md-6">
                    <input
                      id="mobile"
                      type="text"
                      class="form-control"
                      name="mobile"
                      value=""
                      required
                      autocomplete="mobile"
                      autofocus
                    />
                  </div>
                </div>

                <div class="form-group row">
                  <label
                    for="address"
                    class="col-md-4 col-form-label text-md-right"
                    >Address</label
                  >

                  <div class="col-md-6">
                    <input
                      id="address"
                      type="text"
                      class="form-control"
                      name="address"
                      value=""
                      required
                      autocomplete="address"
                      autofocus
                    />
                  </div>
                </div>

                <div class="form-group row">
                  <label
                    for="gender"
                    class="col-md-4 col-form-label text-md-right"
                    >Gender
                  </label>

                  <div class="col-md-6">
                    <select class="form-control" name="gender">
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                    </select>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="dob" class="col-md-4 col-form-label text-md-right"
                    >Date Of Birth
                  </label>

                  <div class="col-md-6">
                    <input id="dob" class="date form-control" type="text" />
                  </div>
                </div>

                <div class="form-group row">
                  <label
                    for="user_type"
                    class="col-md-4 col-form-label text-md-right"
                    >User Type</label>

                  <div class="col-md-6">
                    <select class="form-control" name="user_type">
                      <option value="c">Client</option>
                      <option value="a">Admin</option>
                    </select>
                  </div>
                </div>

                <div class="form-group row">
                  <label
                    for="password"
                    class="col-md-4 col-form-label text-md-right"
                    >Password</label>

                  <div class="col-md-6">
                    <input
                      id="password"
                      type="password"
                      class="form-control"
                      name="password"
                      required
                      autocomplete="new-password"
                    />
                  </div>
                </div>

                <div class="form-group row">
                  <label
                    for="password-confirm"
                    class="col-md-4 col-form-label text-md-right"
                    >Confirm Password </label>

                  <div class="col-md-6">
                    <input
                      id="password-confirm"
                      type="password"
                      class="form-control"
                      name="password_confirmation"
                      required
                      autocomplete="new-password"
                    />
                  </div>
                </div>

                <div class="form-group row mb-0">
                  <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                      Register
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>


<script>

export default {
    created(){
        $('#dob').datetimepicker({
        format: 'DD-MM-YYYY'
        });
    }
}
</script>


